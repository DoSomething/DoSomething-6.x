<?

include 'sites/all/themes/dosomething/templates/scavenger-globals.inc';

global $challenges;
$day = $_GET['day'];

global $current_day;

if ($day && $day <= $current_day) {
  print '<h2>Day '.$day.' - '.$challenges[$day]['name'].'</h2>';
  $view = views_get_view('scavenger_hunt_team_reportbacks');
  $filter = $view->get_item('block_3','filter','field_campaign_project_type_value');
  $filter['value'] = 'Day '.$day;
  $view->set_item('block_3', 'filter', 'field_campaign_project_type_value', $filter);
  print '<div class="clearfix">';
  print $view->preview('block_3');
  print '</div>';
} else {
  drupal_goto('scavenger-hunt/gallery',NULL,NULL,303);
}

?>

<? // When this is visible, there's a big gap ?>
<style type="text/css">
#hunt-signup { display: none;}
</style>

