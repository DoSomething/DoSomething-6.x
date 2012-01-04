<?php

/**
 * @file
 *  Link webform functionalities to services module.
 */


module_load_include('inc', 'webform', 'includes/webform.submissions');

/**
 * Returns a list of webform nids.
 *
 * @return
 *   Array. An array of the nids of all webform nodes.
 */
function webform_service_list() {
  global $user;
  
  $db_result = db_query("SELECT nid FROM {node} WHERE type = 'webform'");
  
  $result = array();
  while ($row = db_fetch_array($db_result)) {
    $result[] = $row['nid'];
  }
  
  return $result;
}

/**
 * Returns a list of submission ids.
 *
 * @param $nid
 *   Number. The node id of the webform to retrieve submission ids from
 * @param $fromdate
 *   Number. The time of the oldest submission to query.
 * @return
 *   Array. An array of the sids of submissions since fromdate.
 */
function webform_service_get($nid, $fromdate = 0) {
  global $user;
  
  $db_result = db_query("SELECT sid FROM {webform_submissions} WHERE submitted >= '%d' AND nid = '%d'",$fromdate, $nid);
  
  $result = array();
  while ($row = db_fetch_array($db_result)) {
    $result[] = $row['sid'];
  }
  
  return $result;
}

/**
 * Returns a specified submission.
 *
 * @param $nid
 *   Number. The node ID.
 * @param $fields
 *   Array (optional). The node fields needed. If its empty,
 *   all fields will be returned
 * @param $teaser
 *   Boolean (optional). Format as teaser.
 * @param $page
  *   Boolean (optional). Format as page.
 * @return
 *   Object. The node object with all wanted fields.
 */
function webform_service_view($nid,$sid) {
  
  //module_load_include('inc', 'webform', 'includes/webform.submissions');
  //$submissions = webform_get_submissions($nid);
  $submission = webform_get_submission($nid,$sid);
  _webform_service_populate_field_names($submission, $nid);

  if (!$submission) {
    return services_error(t("Could not find the submission."), 404);
  }

  return $submission;
}

/**
 * Save a node. It creates a new one, in case the 'nid' field
 * is missing.
 *
 * @param $submission
 *   Array. The submission fields' values, just like created on
 *   submission edit form.
 * @return
 *   Number. The submission id.
 */
function webform_service_save($submission) {
  
  // save the submission here.
  
  return $submission->sid;
}

/**
 * Delete a submission. 
 *
 * @param $sid
 *   Array. The node fields' values, just like created on
 *   node edit form.
 * @return
 *   Number. The id of the deleted submission.
 */
function webform_service_delete($sid) {
  
  // delete the submission here.
  
  return $sid;
}

/**
 * Check if the user has the permission to get the
 * webform's data thru services.
 *
 * @param $fromdate
 *   Number. The date in seconds of the earliest webform submission to query.
 * @return
 *   Boolean. TRUE if the user has view access.
 */
function webform_service_list_access() {
  global $user;
  return user_access('access all webform results');
}

/**
 * Check if the user has the permission to get the
 * webform's data thru services.
 *
 * @param $fromdate
 *   Number. The date in seconds of the earliest webform submission to query.
 * @return
 *   Boolean. TRUE if the user has view access.
 */
function webform_service_get_access($nid, $fromdate) {
  global $user;
  return user_access('access all webform results');
}

/**
 * Check if the user has the permission to get the
 * node's formated data thru services.
 *
 * @param $sid
 *   Number. The submission ID.
 * @return
 *   Boolean. TRUE if the user has the permission to get the
 *   submission's data thru services.
 */
function webform_service_view_access($sid) {
  global $user;
  
  return user_access('access all webform results');
}

/**
 * Check if the user has the permission to save a node.
 *
 * @param $node
 *   Object. The submission form object.
 * @return
 *   Boolean. TRUE if the user has the permission to save a submission.
 */
/*
function webform_service_save_access($submission) {
  
  return user_access('edit all webform submissions');
}
*/

/**
 * Check if the user has the permission to delete a node.
 *
 * @param $nid
 *   Number. The node ID.
 * @return
 *   Boolean. TRUE if the user has the permission to delete a submission.
 */
/*
function webform_service_delete_access($sid) {
  return user_access('delete all webform submissions');
}
*/

/**
 * Gets the name of each field and adds it to the object
 *
 * @param $submission
 *   Object. (passed by reference) The submission object.
 * @return
 *   Null. No return value
 */
function _webform_service_populate_field_names(&$submission, $nid){
  
  // get the field names
  static $fields = array();
  $result = db_query("SELECT `cid`,`form_key`,`type`,`name` FROM {webform_component} WHERE `nid` = '%d'",$nid);
  while ($row = db_fetch_array($result)) {
    $fields[$row['cid']] = array(
      'key'=>$row['form_key'],
      'type'=>$row['type'],
      'name'=>$row['name'],
    );
  }
  
  // loop through $submission->data and add field names to each
  if (is_array($submission->data)){
    foreach($submission->data as $key => $value){
      $submission->data[$key]['field_key'] = $fields[$key]['key'];
      $submission->data[$key]['field_type'] = $fields[$key]['type'];
      $submission->data[$key]['field_name'] = $fields[$key]['name'];
    }
  }
}
