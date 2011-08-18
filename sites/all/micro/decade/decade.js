$(document).ready(function () {
  initialize();
});

var markers = [];
var map;
var data;

function initialize() {
  var myLatlng = new google.maps.LatLng(33.431441,7.03125);
  var myOptions = {
    zoom: 1,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  querySignups();
}

function querySignups() {
  $.ajax({
    url: '/decade-of-thanks/signupsquery',
    dataType: 'json',
    success: function (data) {plotPoints(data);}
  });
}

function plotPoints(data) {
  clearOverlays();
  deleteOverlays();
  data = data.node;
  if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1) {
    console.log('%o',data);
  }
  if (data && data.constructor == Array) {
    var infowindow = new google.maps.InfoWindow();
    for (i = 0; i < data.length; i++) {
      (function(signup) {
        setTimeout(function() {
          var marker = new google.maps.Marker({
            title: signup.name,
            position: new google.maps.LatLng(signup.Latitude,signup.Longitude),
            map: map,
            draggable: false,
            animation: google.maps.Animation.DROP,
            zIndex: i,
            icon: '/nd/iyg-2011/hp_small.png',
            shadow: '/nd/iyg-2011/shadow_small.png'
          });
          google.maps.event.addListener(marker, 'click', function(event) {
            var old_zindex = this.getZIndex();
            this.setZIndex(old_zindex - 900);
            infowindow.setContent(
                                  '<div class="marker">'+
                                  '<h3>' +
                                  signup.name_with_link +
                                  '</h3>' +
                                  '<div class="body">'+
                                  signup.body+
                                  '</div></div>'
                                 );
            infowindow.setPosition(event.latLng);
            infowindow.open(map,marker);
          });
          markers.push(marker);
        }, (5000 / data.length) * i );
      })(data[i]);
    }

  }
}

// Deletes all markers in the array by removing references to them
function deleteOverlays() {
  if (markers) {
    for (i in markers) {
      markers[i].setMap(null);
    }
    markers.length = 0;
  }
}

// Removes the overlays from the map, but keeps them in the array
function clearOverlays() {
  if (markers) {
    for (i in markers) {
      markers[i].setMap(null);
    }
  }
}

