<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" media="all" href="http://www.dosomething.org/files/ctools/css/b32116845453fc3082b1af22f71fe155.css?c">
<link type="text/css" rel="stylesheet" media="all" href="http://www.dosomething.org/files/css/css_5b0ce16a88c20ff8e9055b3eb8694547.css">
<link type="text/css" rel="stylesheet" media="print" href="http://www.dosomething.org/files/css/css_33f27bce19ac7028e2e15beb429820df.css">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0px; padding: 0px }
  #map_canvas { height: 100% }
  .result { width: 290px; min-height:50px; padding: 5px 5px 10px 5px}
</style>
<script type="text/javascript"
    src="http://maps.google.com/maps/api/js?sensor=true">
</script>
<script type="text/javascript">
var max_infowindow_length = 100;
var max_result_length = 500;
var map = null;
var markers = new Array();

  function initialize() {
    // TODO: Need to pick a better center location to start with.
    var latlng = new google.maps.LatLng(40.77, -74.0);
    var myOptions = {
      zoom: 8,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions); 
}                  

function getSelectedOption(selectBox) {
  return selectBox.options[selectBox.selectedIndex].value;
}

function buildSearchUrl(page) {
  cause = getSelectedOption(document.getElementById("filter-cause"));
  keyword = document.getElementById("search-keyword").value;
  zip = document.getElementById("postal-code").value;
  distance = document.getElementById("input-proximity").value; 
  province = getSelectedOption(document.getElementById("filter-state"))
  maxnum = 10 //TODO: Maybe more...?

  // Assumes API can handle blank values. 
  // TODO: Should probably do some error checking here too.
  var url = "http://www.dosomething.org/api/projects?key=[yourAPIkey]&cause="+cause+
            "&zip="+zip+"&keyword="+keyword+"&distance="+distance+"&maxnum="+maxnum+"&page="+page;
  //TODO: Uncomment me.
  //return url;

  return "http://www.dosomething.org/sites/all/micro/projects/projects-new";
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
    xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  //TODO: Make page numbers dynamic based on clicks for next/previous link.
  xmlhttp.open("GET", buildSearchUrl(1), false);
  xmlhttp.send();
  xmlTxt=xmlhttp.response;
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

  // TODO: Need to recenter map based on results.
  
  currentWindow = null;
  nodes = xmlDoc.getElementsByTagName("node");
  if (nodes.length > 0) {
    // Clear existing markers
    for (i = 0; i < markers.length; ++i) {
      markers[i].setMap(null);
    }

    // Clear existing results
    results = document.getElementById("results");
    while(results.childNodes.length > 0) {
      results.removeChild(results.childNodes[0]);
    }
  }
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
    var content = "<div><h3>" + title + "</h3></div><div id=\"descrip_" + i + "\">" +
        infowindowText + "</div><div><a href=\""+url+"\">Project Info</a></div>";
      
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(lat, lng),
      map: map,
      content: content,
	    title: title});
    markers[i] = marker;

    // Create result element
    var result = document.createElement("div");
    result.setAttribute("class", "result");
    result.setAttribute("id", "result"+i);
    if (i % 2 == 0) 
      result.setAttribute("style", "background-color:#DEF3F9");
    else
      result.setAttribute("style", "background-color:#8ECCDE");

    result.innerHTML = "<p><b><a href=\""+url+"\" style=\"color: darkblue\">"+title+"</a></b></p>";
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
}              

</script>
</head>
<body onload="initialize()">
<div id="search_bar" style="width:25%; height:100%;float:left">
	<div id="search-box" class="box blue gainlayout" style="width:300px; float:left">
		<form id="proj-search">
			<label for="search-keyword">Keyword</label>
			<input type="text" id="search-keyword" name="search-keyword"/>
			<div id="search-filter-box" class="clicktip">
				<div id="filterSelects">
					<input type="text" id="input-proximity" value="10" name="input-proximity" size="1" maxlength="5" style="text-align:right;">
					<label for="postal-code">miles from Postal Code:</label>
					<input type="text" id="postal-code" name="postal-code" size="10" style="display:inline">
					<label for="filter-cause">Cause</label>
					<select id="filter-cause">
						<option value="*">&lt;All&gt;</option>
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
						<option value="*">&lt;All&gt;</option>
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
					<a href="javascript:search()"><img src="http://www.dosomething.org/nd/buttons/search.png" border="0"/></a>
					<span style="position:absolute;padding:15px 0px 0px 10px;"><a href="#" onclick="$('#proj-search')[0].reset(); return false;">reset</a></span>
					</span>
				</div>
			</div>
		</form>
	</div>
	<div id="results" style="clear:both; padding-top:50px; width: 300px; overflow:auto">
  <!--TODO: Additional stylizing of this div; maybe scrollbar on the div instead of on the page?-->
  <!--TODO: Dynamically add next/previous results page links-->
  </div>
</div>
<div id="map_canvas" style=" height:100%">
</div>
</body>
</html>
