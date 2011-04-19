function school_link(school, i) {
  var rowClass='odd';
  if (i % 2 == 0) {
    rowClass='even';
  }
  return '<tr class="'+rowClass+'"><td class="name">'+school.name+'</td><td class="city">'+school.city+'</td><td class="missinglink"><a class="hideme" href="/green-your-school/find-your-school?gsid=' + school.gsId + '&state=' + school.state + '">This is my school.</a></td></tr>';
}

function loadScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initializeFindYourSchool";
  document.body.appendChild(script);
}


function applyHovers() {
  $('div.node-gys table tr.odd, div.node-gys table tr.even').hover(function() {
    $(this).find('a.hideme').show();
  },
  function() {
    $(this).find('a.hideme').hide();
  }
  );
}


$(document).ready(function() {
  loadScript();
  $('#find-your-school').submit(
     getSchoolLinks
  );
});

function getSchoolLinks(u_state,u_lat,u_lon) {
  state = $('#gys-state').val();
  query = $('#gys-school').val();
  data = { state: state,
           query: query };
  if (u_state && u_lat && u_lon) {
    data = { state: u_state,
             lat: u_lat,
             lon: u_lon };
  }
    
  $.ajax({
    url: '/nd/school/finder.php',
    data: data,
    dataType: 'json',
    success: function(data) {
    //  if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1) {
    //    console.log("%o", data);
    //  }
      result = '<table><thead><tr><th class="name">'+
               '<a href="#">School Name</a>'+
               '</th><th class="city"><a href="#">City</a>'+
               '</th></tr></thead>'+
               '<tbody>';
      // overly complicated isArray check, because we don't have jQuery 1.3+ -- http://perfectionkills.com/instanceof-considered-harmful-or-how-to-write-a-robust-isarray
      var schools = [];
      var LatLngList = [];
      var bounds = new google.maps.LatLngBounds();
      if (data.school && data.school.constructor == Array) {
        //To create links to markers: Create all markers, return them from plotPoints, then create the links
        for (i = 0; i < data.school.length; i++) {
          result += school_link(data.school[i], i);
          var newPoint = new google.maps.LatLng(data.school[i].lat,data.school[i].lon);
          bounds.extend(newPoint);
          schools.push( createMarkerData(data.school[i]) );
        }
      } else if (data.school) {
        result += school_link(data.school,1);
        var newPoint = new google.maps.LatLng(data.school.lat,data.school.lon);
        bounds.extend(newPoint);
        schools.push( createMarkerData(data.school) );
      } else {
        result += '<tr class="odd"><td class="col1">No matches.  Check your spelling or <a href="/green-your-school/find-your-school?manual=1">enter your school here.</a></td><td class="col2"></td> </tr>';
      }
      result += '</tbody></table>';
      if (schools.length > 0) {
        map.fitBounds(bounds);
        plotPoints(schools);
      } else {
        clearOverlays();
        deleteOverlays();
        initializeFindYourSchool(true);
      }
      $('.results').html(result);
      applyHovers();
    }
  });
  return false;
}


function createMarkerData(school) {
   var phone = '';
   if (school.phone) {
     phone = '<div class="phone">'+school.phone+'</div>';
   }
   return {
     name_with_link: '<a href="/green-your-school/find-your-school?gsid='+school.gsId+'&state='+school.state+'">'+school.name+'</a>',
     name: school.name,
      latitude: school.lat,
      longitude: school.lon,
      body: '<div class="address">'+school.address+'</div>'+
            phone+'<br/>'+
            '<span class="type">'+school.type+'</span>, '+
            '<span class="gradeRange">'+school.gradeRange+'</span>'+
            '<br/># students: <span class="enrollment">'+school.enrollment+'</span>'+
            '<div class="moreinfo"><a target="_blank" href="'+school.overviewLink+'">More information on '+school.name+'</a> from <a target="_blank" href="http://www.greatschools.org">GreatSchools.org</a></div>'

     }
}

