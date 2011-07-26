<?

$current_path = preg_replace('/^\//', '', drupal_get_path_alias(request_uri()));
$twitter_text = "I'm pumped for @DoSomething & @Lenovo's Scavenger Hunt! Are you signed up yet? http://dsorg.us/iSmD9x #DShunt";

?>

<img class="header" src="/sites/all/micro/hunt/headers/challenges.png" alt="Challenges"/>

<a target="_blank" href="http://facebook.com/sharer.php?u=<?=urlencode('http://www.dosomething.org/'.$current_path);?>"><img class="social" src="/sites/all/micro/hunt/fb-small.png" alt="Share this on Facebook" /></a>
<a target="_blank" href="http://twitter.com/intent/tweet?text=<?=urlencode($twitter_text).'&url=http://www.dosomething.org/'.$current_path;?>"><img class="social" src="/sites/all/micro/hunt/tw-small.png" alt="Share this on Twitter" /></a>

<p>The hunt has finished!  Check out the challenges and photos below.  To recap, each day we revealed a new challenge dedicated to a different cause, and each day you responded with some great results.  Be sure to click into the photos below and see how other teams performed.  Winners will be notified by 8/1 and announced on the <a href="/scavenger-hunt">Scavenger Hunt home page</a>.</p>

<?
include 'sites/all/themes/dosomething/templates/scavenger-challenges.inc';
?>

<br><br><br>
<?
$day = 1;
while ($day <= 11 ):
  $selected = 'not-selected'; if ($day == $selected_day) {$selected = 'selected';}?>
<div class="challenge <?=$selected;?>">
<? $full_challenge_name = 'Day '.$day.' - '.$challenges[$day]['name']; ?>
<h3>Day <?=$day;?> - <a class="underline" href="/<?=$challenges[$day]['link'];?>"><?=$challenges[$day]['name'];?>
<?
if (user_access('administer nodes') && $day > $actual_day) {
  print ' (only viewable by admins of dosomething.org)';
}
?></a></h3>
<ul class="map-marker">
<?=$challenges[$day]['challenge'];?>
</ul>
<div class="submissions">

<?
$gallery = 'gallery';
if ($day == 11) {
  $gallery = 'gallery-video';
} ?>

<h3 class="header"><a class="underline" href="/scavenger-hunt/<?=$gallery;?>/day/<?=urlencode($full_challenge_name);?>">Recent Submissions</a></h3>

<?
  $view_pane = 'block_2';
  if ($day == 11) {
    $view_pane = 'block_3';
  }
  $view = views_get_view('scavenger_hunt_team_reportbacks');
  $filter = $view->get_item($view_pane,'filter','field_campaign_project_type_value');
  $filter['value'] = 'Day '.$day;
  $view->set_item($view_pane, 'filter', 'field_campaign_project_type_value', $filter);
  print '<div class="clearfix">';
  print $view->preview($view_pane);
  print '</div>';
?>
</div>

</div>
<? $day++; ?>
<? endwhile; ?>


<? if (! $selected_day): ?>

<ul class="map-marker">
<?
$day = $current_day+1;
while ($day < 11):
  print '<li><b>Day '.$day.'</b>: '.$challenges[$day]['name'].'</li>';
  $day++;
endwhile;
?>
</ul>

<? endif; ?>
