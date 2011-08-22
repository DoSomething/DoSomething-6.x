<!DOCTYPE html>
<html>
<head>

<title><?php print $head_title; ?></title>
<?php print $head; ?>
<?php print $styles; ?>
<?php print $scripts; ?>

<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0px; padding: 0px; background-color: white; }
  #map_canvas { height: 100%; width: 70%; float:right; }
  .result { min-height:50px; padding: 5px 5px 10px 5px}
  #search_bar { width:25%; height:100%; position:absolute; }
</style>
<script type="text/javascript"
    src="http://maps.google.com/maps/api/js?sensor=true">
</script>
<script type="text/javascript">

var max_infowindow_length = 100;
var max_result_length = 500;
var map = null;
var geocoder = null;
var markers = new Array();

function initialize() {
    var latlng = new google.maps.LatLng(48.57479,-115.839844);
    var myOptions = {
      zoom: 3,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 
    google.maps.event.trigger(map, "resize");
    geocoder = new google.maps.Geocoder();
    $('#spinner').hide();
    $('#search-keyword,#postal-code,#input-proximity').keypress(function(key) {
      if (key.which == 13) search();
    });

}

function myclick(i) {
  google.maps.event.trigger(markers[i], "click");
}

function getSelectedOption(selectBox) {
  return selectBox.options[selectBox.selectedIndex].value;
}

function buildSearchUrl(page,zip) {
  cause = getSelectedOption(document.getElementById("filter-cause"));
  keyword = document.getElementById("search-keyword").value;
  zip = document.getElementById("postal-code").value;
  distance = document.getElementById("input-proximity").value; 
  province = getSelectedOption(document.getElementById("filter-state"))
  maxnum = 10 //TODO: Maybe more...?
  latlng = '';
  if (! zip) {
    center = map.getCenter();
    latlng = '&lat='+center.lat()+'&lng='+center.lng();
    distance = myGetRadius()*.6; //padding, make sure all results appear in viewable window
  }
  var url = "http://www.dosomething.org/api/projects?key=11276fce3cf6ea958c0f842934802121&cause="+cause+
            "&zip="+zip+"&keyword="+keyword+"&distance="+distance+"&maxnum="+maxnum+"&page="+page+latlng+"&province="+province;
  return url;
  //return "http://www.dosomething.org/sites/all/micro/projects/projects-new";
}

function myGetRadius() {
  bounds = map.getBounds();

  center = bounds.getCenter();
  ne = bounds.getNorthEast();

  // r = radius of the earth in statute miles
  var r = 3963.0;  

  // Convert lat or lng from decimal degrees into radians (divide by 57.2958)
  var lat1 = center.lat() / 57.2958; 
  var lon1 = center.lng() / 57.2958;
  var lat2 = ne.lat() / 57.2958;
  var lon2 = ne.lng() / 57.2958;

  // distance = circle radius from center to Northeast corner of bounds
  var radius = r * Math.acos(Math.sin(lat1) * Math.sin(lat2) + 
    Math.cos(lat1) * Math.cos(lat2) * Math.cos(lon2 - lon1));
  return radius;
}

function ellipsize(text, size) {
  newtext = null
  if (text.length > size) {
    newtext = text.substring(0, size);
    newtext = newtext.replace(/\w+$/, '');
    newtext += '...';
  } else {
    newtext = text;
  }
  return newtext;
}

function search() {
  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
    $('#spinner').show();
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
        writeResults(xmlhttp);
        $('#spinner').hide();
      }
    };
    //TODO: Make page numbers dynamic based on clicks for next/previous link.
    xmlhttp.open("GET", buildSearchUrl(1), true);
    xmlhttp.send();
  }
}
function writeResults(xmlhttp) {
  xmlTxt=xmlhttp.responseText;
  if (window.DOMParser)
  {
    parser=new DOMParser();
    xmlDoc=parser.parseFromString(xmlTxt,"text/xml");
  }
  else // Internet Explorer
  {
    xmlDoc=new ActiveXObject("Microsoft.XMLDOM");
    xmlDoc.async="false";
    xmlDoc.loadXML(xmlTxt); 
  }

  currentWindow = null;
  nodes = xmlDoc.getElementsByTagName("node");
  // Clear existing markers
  for (i = 0; i < markers.length; ++i) {
    markers[i].setMap(null);
  }

  // Clear existing results
  var resultsVar = document.getElementById("results");
  while(resultsVar.childNodes.length > 0) {
    resultsVar.removeChild(resultsVar.childNodes[0]);
  }
  var bounds = new google.maps.LatLngBounds();
  for (i = 0; i < nodes.length; ++i) {
    node = nodes[i];
    lat = node.getElementsByTagName("location_lat")[0].childNodes[0].nodeValue;
    lng = node.getElementsByTagName("location_long")[0].childNodes[0].nodeValue;
    title = node.getElementsByTagName("title")[0].childNodes[0].nodeValue;
    see_it = node.getElementsByTagName("essay_see_it")[0].childNodes[0].nodeValue;
    url = node.getElementsByTagName("Path")[0].childNodes[0].nodeValue;

    resultText = ellipsize(see_it, max_result_length);
    infowindowText = ellipsize(see_it, max_infowindow_length);

    // InfoWindow html content
    var content = "<div><h3><a href=\""+url+"\">" + title + "</a></h3></div><div id=\"descrip_" + i + "\">" +
        infowindowText + "</div><div><a href=\""+url+"\">More details...</a></div>";
    var newPoint = new google.maps.LatLng(lat, lng); 
    var marker = new google.maps.Marker({
      position: newPoint,
      map: map,
      content: content,
	    title: title});
    markers[i] = marker;
    bounds.extend(newPoint);
    // Create result element
    var result = document.createElement("div");
    result.setAttribute("class", "result");
    result.setAttribute("id", "result"+i);
    if (i % 2 == 0) 
      result.setAttribute("style", "background-color:white");
    else
      result.setAttribute("style", "background-color:#DEF3F9");

    result.innerHTML = "<p><b><a href=\"javascript:myclick("+i+")\" style=\"color: darkblue\">"+title+"</a></b></p>";
    result.innerHTML += "<p>"+resultText+"</p>";

    document.getElementById("results").appendChild(result);

    // Create infowindow listener
    google.maps.event.addListener(marker, 'click', function() {
      if (currentWindow != null) {
        currentWindow.set("marker", null);
        currentWindow.close();
      }
      currentWindow = new google.maps.InfoWindow({
        content: this.content,
        maxWidth: 500,
      });
      currentWindow.open(map,this);
    });
  }
  if (nodes.length > 0) {
    map.fitBounds(bounds);
  } else {
    var noresult = document.createElement("p");
    noresult.innerHTML = '<em>No results found!</em> Try expanding your search.';
    document.getElementById("results").appendChild(noresult);
  }
}              

</script>
</head>
<body onload="initialize()">
<div id="search_bar" style="">
	<div id="search-box" class="box blue gainlayout" style="float:left">
		<form id="proj-search" onsubmit="search();return false;" >
			<label for="search-keyword">Keyword</label>
      <input type="text" id="search-keyword" name="search-keyword"/>
      <input type="submit" style="display:none"/>
			<div id="search-filter-box" class="clicktip">
				<div id="filterSelects">
					<input type="text" id="input-proximity" value="10" name="input-proximity" size="1" maxlength="5" style="text-align:right;">
					<label for="postal-code">miles from Postal Code:</label>
					<input type="text" id="postal-code" name="postal-code" size="10" style="display:inline">
					<label for="filter-cause">Cause</label>
					<select id="filter-cause">
						<option value="all">&lt;All&gt;</option>
						<option value="Animal Welfare">Animal Welfare</option>
						<option value="Disaster Response And Relief">Disaster Response And Relief</option>
						<option value="Discrimination">Discrimination</option>
						<option value="Education">Education</option>
						<option value="Environment">Environment</option>
						<option value="Health And Fitness">Health And Fitness</option>
						<option value="HIV And Sexuality">HIV And Sexuality</option>
						<option value="International Human Rights">International Human Rights</option>
						<option value="Poverty">Poverty</option>
						<option value="Violence And Bullying">Violence And Bullying</option>
						<option value="War%2C Peace And Politics">War, Peace And Politics</option>
					</select>
					<label for="filter-state">State</label>
					<select id="filter-state">
						<option value="all">&lt;All&gt;</option>
						<option value="AK">AK</option>
						<option value="AL">AL</option>
						<option value="AR">AR</option>
						<option value="AS">AS</option>
						<option value="AZ">AZ</option>
						<option value="CA">CA</option>
						<option value="CO">CO</option>
						<option value="CT">CT</option>
						<option value="DC">DC</option>
						<option value="DE">DE</option>
						<option value="FL">FL</option>
						<option value="FM">FM</option>
						<option value="GA">GA</option>
						<option value="GU">GU</option>
						<option value="HI">HI</option>
						<option value="IA">IA</option>
						<option value="ID">ID</option>
						<option value="IL">IL</option>
						<option value="IN">IN</option>
						<option value="KS">KS</option>
						<option value="KY">KY</option>
						<option value="LA">LA</option>
						<option value="MA">MA</option>
						<option value="MD">MD</option>
						<option value="ME">ME</option>
						<option value="MH">MH</option>
						<option value="MI">MI</option>
						<option value="MN">MN</option>
						<option value="MO">MO</option>
						<option value="MP">MP</option>
						<option value="MS">MS</option>
						<option value="MT">MT</option>
						<option value="NC">NC</option>
						<option value="ND">ND</option>
						<option value="NE">NE</option>
						<option value="NH">NH</option>
						<option value="NJ">NJ</option>
						<option value="NM">NM</option>
						<option value="NV">NV</option>
						<option value="NY">NY</option>
						<option value="OH">OH</option>
						<option value="OK">OK</option>
						<option value="OR">OR</option>
						<option value="PA">PA</option>
						<option value="PR">PR</option>
						<option value="PW">PW</option>
						<option value="RI">RI</option>
						<option value="SC">SC</option>
						<option value="SD">SD</option>
						<option value="TN">TN</option>
						<option value="TX">TX</option>
						<option value="UT">UT</option>
						<option value="VA">VA</option>
						<option value="VI">VI</option>
						<option value="VT">VT</option>
						<option value="WA">WA</option>
						<option value="WI">WI</option>
						<option value="WV">WV</option>
						<option value="WY">WY</option>
						<option value="Canada">Canada</option>
					</select>
					<span style="position:relative">
          <a href="javascript:search();"><img src="http://www.dosomething.org/nd/buttons/search.png" border="0"/></a>
          <img id="spinner" src="/<?=path_to_theme();?>/images/spinner.gif"  />
          
					<!--<span style="position:absolute;padding:15px 0px 0px 10px;"><a href="#" onclick="$('#proj-search')[0].reset(); return false;">reset</a></span>-->
					</span>
				</div>
			</div>
		</form>
	</div>
	<div id="results" style="clear:both; height: 400px; overflow:auto">
  <!--TODO: Dynamically add next/previous results page links-->
  </div>
</div>
<div id="map_canvas" style=" height:100%">
</div>
  <?php print $page_closure; ?>

  <?php print $closure; ?>

</body>
</html>
