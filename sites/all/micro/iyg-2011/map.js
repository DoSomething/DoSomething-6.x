var markersArray = [];
var map;
var data;

function initializeBrowseSchools() {
  var myLatlng = new google.maps.LatLng(48.57479,-115.839844);
  var myOptions = {
    zoom: 3,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  querySignups();
}

function initializeFindYourSchool(doNotGetLocation) {
  var myLatlng = new google.maps.LatLng(48.57479,-115.839844);
  var myOptions = {
    zoom: 3,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  if (doNotGetLocation == undefined) {
    getLocation();
  }
}

function querySignups() {
  $.ajax({
    url: '/gys/signupsquery',
    dataType: 'json',
    success: function (data) {plotPoints(data);}
  });
}

function getLocation() {
  // Try W3C Geolocation (Preferred)
  if(navigator.geolocation) {
    browserSupportFlag = true;
    navigator.geolocation.getCurrentPosition(function(position) {
      initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
      reverseGeocode(initialLocation);
    }, function() {
      handleNoGeolocation(browserSupportFlag);
    });
  // Try Google Gears Geolocation
  } else if (google.gears) {
    browserSupportFlag = true;
    var geo = google.gears.factory.create('beta.geolocation');
    geo.getCurrentPosition(function(position) {
      initialLocation = new google.maps.LatLng(position.latitude,position.longitude);
      reverseGeocode(initialLocation);
    }, function() {
      handleNoGeoLocation(browserSupportFlag);
    });
  // Browser doesn't support Geolocation
  } else {
    browserSupportFlag = false;
    handleNoGeolocation(browserSupportFlag);
  }

}
function reverseGeocode(myLocation) {
  geocoder = new google.maps.Geocoder();
  geocoder.geocode( { 'latLng': myLocation}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[1]) {
         var state = results[0].formatted_address.replace(/^.*([A-Z]{2}) [0-9]{5}.*/, "$1");
        if (/^[A-Z]{2}$/.test(state)) {
          getSchoolLinks(state,myLocation.lat(),myLocation.lng());
          $('#gys-state').val(state);
        }
      }
    }
  });

}
  
function handleNoGeolocation(errorFlag) {
/*  if (errorFlag == true) {
    alert("Geolocation service failed.");
    initialLocation = newyork;
  } else {
    alert("Your browser doesn't support geolocation. We've placed you in Siberia.");
    initialLocation = siberia;
  }
  map.setCenter(initialLocation);*/
}


function plotPoints(data) {
  clearOverlays();
  deleteOverlays();
 // if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1) {
 //   console.log('%o',data);
 // }
  if (data && data.constructor == Array) {
    var infowindow = new google.maps.InfoWindow();
    for (i = 0; i < data.length; i++) {
      (function(signup) {
        setTimeout(function() {
          var marker = new google.maps.Marker({
            title: signup.name,
            position: new google.maps.LatLng(signup.latitude,signup.longitude),
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
          markersArray.push(marker);
        }, (5000 / data.length) * i );
      })(data[i]);
    }

  }
}



// Deletes all markers in the array by removing references to them
function deleteOverlays() {
  if (markersArray) {
    for (i in markersArray) {
      markersArray[i].setMap(null);
    }
    markersArray.length = 0;
  }
}

// Removes the overlays from the map, but keeps them in the array
function clearOverlays() {
  if (markersArray) {
    for (i in markersArray) {
      markersArray[i].setMap(null);
    }
  }
}

