<?

$current_path = preg_replace('/^\//', '', drupal_get_path_alias(request_uri()));
$twitter_text = "I'm pumped for @DoSomething & @Lenovo's Scavenger Hunt on 7/11. Are you signed up yet? http://dsorg.us/iSmD9x #DShunt";

?>

<img class="header" src="/sites/all/micro/hunt/headers/challenges.png" alt="Challenges"/>

<a target="_blank" href="http://facebook.com/sharer.php?u=<?=urlencode('http://www.dosomething.org/'.$current_path);?>"><img class="social" src="/sites/all/micro/hunt/fb-small.png" alt="Share this on Facebook" /></a>
<a target="_blank" href="http://twitter.com/intent/tweet?text=<?=urlencode($twitter_text).'&url=http://www.dosomething.org/'.$current_path;?>"><img class="social" src="/sites/all/micro/hunt/tw-small.png" alt="Share this on Twitter" /></a>

<p>The hunt has begun!  Each day will be dedicated to a different cause and a new chance for your team to win some pretty cool stuff.  To report back, enter the email address or cell phone number you used during sign up:</p>

<?
include 'sites/all/themes/dosomething/templates/scavenger-challenges.inc';
?>

<br><br><br>
<?
$day = $current_day;
while ($day > 0):
  $selected = 'not-selected'; if ($day == $selected_day) {$selected = 'selected';}?>
<div class="challenge <?=$selected;?>">
<h3>Day <?=$day.' - '.$challenges[$day]['name'];?></h3>
<ul class="map-marker">
<?=$challenges[$day]['challenge'];?>
</ul>
<div class="submissions">
<h3 class="header">Recent Submissions <a href="/scavenger-hunt/gallery/day?day=<?=$day;?>">(more)</a></h3>

<?

  $view = views_get_view('scavenger_hunt_team_reportbacks');
  $filter = $view->get_item('block_2','filter','field_campaign_project_type_value');
  $filter['value'] = 'Day '.$day;
  $view->set_item('block_2', 'filter', 'field_campaign_project_type_value', $filter);
  print '<div class="clearfix">';
  print $view->preview('block_2');
  print '</div>';
?>
</div>

</div>
<? $day--; ?>
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
