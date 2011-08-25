$(document).ready(function () {
  initialize();
});

var markers = [];
var map;
var data;

function $_GET(q,s) { 
  s = s ? s : window.location.search; 
  var re = new RegExp('&'+q+'(?:=([^&]*))?(?=&|$)','i'); 
  return (s=s.replace(/^\?/,'&').match(re)) ? (typeof s[1] == 'undefined' ? '' : decodeURIComponent(s[1])) : undefined; 
} 


function initialize() {
  var myLatlng = new google.maps.LatLng(39.607804, -97.536621);
  var myOptions = {
    zoom: 3,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  querySignups();
  $('#postal-code,#input-proximity').keypress(function(key) {
      if (key.which == 13) querySignups();
  });
}

function querySignups() {
  var zipStr = '';
  zip = document.getElementById("postal-code").value;
  distance = document.getElementById("input-proximity").value;
  $('#spinner').show();
  if (zip && distance) {
    zipStr = '/'+zip+'_'+distance;
  }
  $.ajax({
    url: '/decade-of-thanks/signupsquery'+zipStr,
    dataType: 'json',
    success: function (data) {plotPoints(data);}
  });
}

function plotPoints(data) {
  clearOverlays();
  deleteOverlays();
  data = data.node;
  var nid=0;
  var paramnid=$_GET('nid');
  if (typeof paramnid !== 'undefined') {
    nid=paramnid;
  }
  if (data && data.constructor != Array) {
    data = [data];
  }
  if (data && data.constructor == Array) {
    var infowindow = new google.maps.InfoWindow();
    var bounds = new google.maps.LatLngBounds();
    for (i = 0; i < data.length; i++) {
      (function(signup) {
        var newPoint = new google.maps.LatLng(signup.Latitude,signup.Longitude);
        bounds.extend(newPoint);
        setTimeout(function() {
          var marker = new google.maps.Marker({
            title: signup.field_campaign_first_name_value,
            position: new google.maps.LatLng(signup.Latitude,signup.Longitude),
            map: map,
            draggable: false,
            animation: google.maps.Animation.DROP,
            zIndex: i,
            icon: '/nd/iyg-2011/hp_small.png',
            shadow: '/nd/iyg-2011/shadow_small.png'
          });
            var locationStr = '';
            if (typeof(signup.City) == "string") {
              locationStr += signup.City;
            }
            if (typeof(signup.Province) == "string") {
              locationStr += ', '+signup.Province;
            }
            if (typeof(signup.Country) == "string") {
              locationStr += ', '+signup.Country;
            }
         var content=             '<div class="marker">'+
                                  '<div class="body">'+
                                  signup.Body+
                                  '</div>'+
                                  '<div class="name">'+
                                   signup.field_campaign_first_name_value+
                                  '</div>' +
                                   '<div class="location">'+
                                   locationStr+
                                  '</div>' +
                                  '</div>';
  
          google.maps.event.addListener(marker, 'click', function(event) {
            var old_zindex = this.getZIndex();
            this.setZIndex(old_zindex - 900);
           infowindow.setContent(content);
            infowindow.setPosition(event.latLng);
            infowindow.open(map,marker);
          });
          markers.push(marker);
          //alert('nid is '+signup.nid);
          if (signup.Nid == nid) {
             infowindow.setContent(content);
             infowindow.setPosition(new google.maps.LatLng(signup.Latitude,signup.Longitude));
             infowindow.open(map,marker);
          }
        }, (1000 / data.length) * i );
      })(data[i]);
    }
    if (data.length > 0) {
      map.fitBounds(bounds);
    }
  }
  $('#spinner').hide();
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

