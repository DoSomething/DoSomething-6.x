<?php
$key = 'pgs9xjxdf8azkiwzxsswmwxx';

function searchSchools_query ($state, $query) {
  $key = 'pgs9xjxdf8azkiwzxsswmwxx';
  header('Cache-Control: no-cache, must-revalidate');
  header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
  header('Content-type: application/json');

  $state = rawurlencode($_GET['state']);
  $query = rawurlencode($_GET['query']);

  $url = "http://api.greatschools.org/search/schools?key=${key}&state={$state}&q={$query}&limit=10";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);

  $xml = new SimpleXMLElement($response);
  return json_encode($xml);

}

function print_searchSchools_query($state, $query) {
  print searchSchools_query($state, $query);
}

function schoolProfile ($state, $gsid) {
  $key = 'pgs9xjxdf8azkiwzxsswmwxx';
  $state = rawurlencode($state);
  $gsid = rawurlencode($gsid);

  $url = "http://api.greatschools.org/schools/${state}/${gsid}?key=${key}";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);

  $xml = new SimpleXMLElement($response);
  return $xml;
}

function searchSchools_location ($state, $lat, $lon) {
  $key = 'pgs9xjxdf8azkiwzxsswmwxx';
  header('Cache-Control: no-cache, must-revalidate');
  header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
  header('Content-type: application/json');

  $state = rawurlencode($_GET['state']);
  $lat = rawurlencode($_GET['lat']);
  $lon = rawurlencode($_GET['lon']);

  $url = "http://api.greatschools.org/schools/nearby?key=${key}&state={$state}&limit=10";
  if ($lat && $lon) {
    $url .= "&lat={$lat}&lon={$lon}";
  }

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);

  $xml = new SimpleXMLElement($response);
  return json_encode($xml);

}

function print_searchSchools_location($state, $lat, $lon) {
  print searchSchools_location($state, $lat, $lon);
}

?>
