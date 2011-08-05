<?php
//NID of api/projects is 620842

$view_name = 'api_projects';
$display_id = 'feed_1';

$prefix = '<?xml version="1.0" encoding="utf-8"?><xml>';
$suffix = '</xml>';

$maxnum = trim($_GET['maxnum']);
$key = trim($_GET['key']);
$zip = $_GET['zip'];
$country = $_GET['country'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];
$province = 'all';
if (isset($_GET['province'])) {
  $province = $_GET['province'];
}
if (! isset($country)) {
  $country = 'US';
}

$cause = 'all';
if (isset ($_GET['cause'])) {
  $cause = $_GET['cause'];
}
$distance = 10;
$page = 0;
$cause = $_GET['cause'];

if (isset($_GET['distance'])) {
  $distance = $_GET['distance'];
}

$keyword = '*';
if ($_GET['keyword']) {
  $keyword = $_GET['keyword'];
}

if (isset($_GET['page']) && preg_match('/^\d+$/', $_GET['page']) && $_GET['page'] > 0) {
  $page = $_GET['page']-1;
}

if (isset($maxnum) && $maxnum && preg_match('/^[0-9]+$/', $maxnum)) {
   if ($maxnum > 100 || $maxnum < 1) {
      $maxnum = 100;
   }
} else {
   $maxnum = 10;
}

$key_valid = 0;
if ($key && $key == '11276fce3cf6ea958c0f842934802121') {
  $key_valid = 1;
} elseif ($key) {
  $key_object = db_fetch_object(db_query("SELECT n.nid,field_query_count_value as 'count' FROM node n INNER JOIN content_type_api_key ctak ON ctak.nid=n.nid WHERE n.title='%s' AND n.type='api_key'", $key));
  if (isset($key_object)) {
    $nid = $key_object->nid;
    $count = $key_object->count;
    if (isset($nid) && $count < 300) {
      $key_valid = 1;
    }
  }
}
if ($key_valid) {
  db_query("UPDATE content_type_api_key SET field_query_count_value=field_query_count_value+1 WHERE nid='%d'",$nid);
  $view = views_get_view($view_name);
  if ($zip) {
    $filter = $view->get_item($display_id,'filter','distance');
    $filter['value']['postal_code'] = $zip;
    $filter['value']['country'] = $country;
    $filter['value']['search_distance'] = $distance;
    $view->set_item($display_id, 'filter', 'distance', $filter);
    $view->set_item($display_id, 'filter', 'distance_1', NULL);
  } elseif ($province != 'all') {
    //do nothing, province argument is passed to view below
    $view->set_item($display_id, 'filter', 'distance_1', NULL);
    $view->set_item($display_id, 'filter', 'distance', NULL);
  } elseif ($lat && $lng) {
    $filter = $view->get_item($display_id,'filter','distance_1');
    $filter['value']['latitude'] = $lat;
    $filter['value']['longitude'] = $lng;
    $filter['value']['search_distance'] = $distance;
    $view->set_item($display_id, 'filter', 'distance_1', $filter);
    $view->set_item($display_id, 'filter', 'distance', NULL);
  }
  
  $view->set_current_page($page);
  print $view->preview($display_id, array($cause, $province, $keyword));
} else {
  $error = '<error>Maximum number of queries hit or key is invalid</error>';
  print $prefix.$error.$suffix;
}
?>
