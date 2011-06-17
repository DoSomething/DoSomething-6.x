<?php

//NID of api/projects is 620842

$prefix = '<?xml version="1.0" encoding="utf-8"?><ds-api>';
$suffix = '</ds-api>';
$maxnum = trim($_GET['maxnum']);
$key = trim($_GET['key']);
$zip = $_GET['zip'];
$province = $_GET['province'];
$distance = 10;
$page = 0;
$cause = $_GET['cause'];

if (isset($_GET['distance'])) {
  $distance = $_GET['distance'];
}

if (isset($_GET['page']) && preg_match('/^\d+$/', $_GET['page']) && $_GET['page'] > 0) {
  $page = $_GET['page']-1;
}

$_GET['page'] = $page;

if (isset($maxnum) && $maxnum && preg_match('/^[0-9]+$/', $maxnum)) {
   if ($maxnum > 100 || $maxnum < 1) {
      $maxnum = 100;
   }
} else {
   $maxnum = 10;
}

$key_valid = 0;
if ($key) {
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
  $view = views_get_view('api_projects');

  $view->is_cacheable = 0;
  if (isset($zip)) {
    $view->filter[3]['value'] = $zip;
    $view->filter[3]['operator'] = $distance;
  }
  if (isset($province) && $province != '*') {
    $view->filter[4]['value'] = $province;
  }
  if (isset($cause) && $cause != '*') {
    $view->filter[5]['value'] = $cause;
  }
  //$xml = views_build_view('page', $view, array(), TRUE, $maxnum, $page);
  $xml = views_build_view('page', $view, array(), TRUE, $maxnum);
  //print $xml;
  //print $prefix.preg_replace('|<div[^>]*>|','',preg_replace('|</div.*|s', '', $xml)).$suffix;
  print $prefix.preg_replace('@</div.*|<div[^>]*>@s', '', $xml).$suffix;
} else {
  $error = '<error>Maximum number of queries hit or key is invalid</error>';
  print $prefix.$error.$suffix;
}
?>
