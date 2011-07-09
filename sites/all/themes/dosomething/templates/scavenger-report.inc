<?
  if (! isset($_GET['team']) && $_GET['form_id'] != 'campaign_hunt_2011_node_form') {
    drupal_goto('scavenger-hunt/challenges',NULL,NULL,303);
  }
  global $user;
  $tid = urldecode($_GET['tid']);
  $selected_day = urldecode($_GET['selected_day']);
  $challenge = urldecode($_GET['challenge']);
  list($team,$postal_code,$email_or_cell) = explode('HnzMneI', urldecode($_GET['team']));

  module_load_include('inc', 'node', 'node.pages');
  $node = new stdClass();
  $node ->type = 'campaign_hunt_2011';
  $node ->name = $user->name;
  $node ->field_campaign_project_type[0]['value'] = 'day'.$selected_day.'-'.$challenge;
  $node ->field_email[0]['value'] = $email_or_cell;
  if ($selected_day != 11) {
    $node ->taxonomy = array($tid => taxonomy_get_term($tid));
  }
  print drupal_get_form('campaign_hunt_2011_node_form', $node);


?>
