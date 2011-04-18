
function loadScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initializeBrowseSchools";
  document.body.appendChild(script);
}


$(document).ready(function() {
    loadScript();
});

