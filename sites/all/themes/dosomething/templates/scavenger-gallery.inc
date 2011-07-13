<?

include 'sites/all/themes/dosomething/templates/scavenger-globals.inc';

global $challenges;
$days = array(1,2,3,4,5,6,7,8,9,10,11);

global $current_day;
$day = $current_day;


while ($day > 0) {
  $full_challenge_name = 'Day '.$day.' - '.$challenges[$day]['name'];
  $more_link = '<a href="/scavenger-hunt/gallery/day/'.urlencode($full_challenge_name).'">(see more)</a>';
  print '<h2 class="gallery-header">'.$full_challenge_name.'</h2>'.$more_link;
  $view = views_get_view('scavenger_hunt_team_reportbacks');
  $filter = $view->get_item('block_2','filter','field_campaign_project_type_value');
  $filter['value'] = 'Day '.$day;
  $view->set_item('block_2', 'filter', 'field_campaign_project_type_value', $filter);
  print '<div class="clearfix">';
  print $view->preview('block_2');
  print '</div>';
  $day--;
}


?>
<? // When this is visible, there's a big gap between the first day and second day's photos on /scavenger-hunt/gallery page ?>
<style type="text/css">
#hunt-signup { display: none;}
</style>
