<?

$team = $_GET['team_name'];
$zip = $_GET['zip'];
$title_field = '';
$zip_field = '';
$extra_links = '';

if ($team && $zip) {?>
  <img src="/sites/all/micro/hunt/join-your-team.jpg" alt="Join your team (step 1 of 2)"/>
<?
  if (! $_GET['signedup']) {
    drupal_set_message('Welcome to the Scavenger Hunt!  Sign up with your team on the right side of this page.');
  }
  $form['title']['#value'] = $team;
  $form['locations'][0]['postal_code']['#value'] = $zip;
  $title_field = '<br/><br/><b>Team Name:</b> '.$team;
  $zip_field = '<b>Postal code:</b> '.$zip.'<br/><br/>';
  $extra_links = '<br><a href="/scavenger-hunt/leaderboard?team_name='.$_GET['team_name'].'&zip='.$_GET['zip'].'&invite=yes">Invite teammates</a>';
} else { ?>
  <img src="/sites/all/micro/hunt/register-your-team.jpg" alt="Register your team (step 1 of 2)"/>
<?
  $title_field = drupal_render($form['title']);
  $zip_field = drupal_render($form['locations'][0]['postal_code']);
  $extra_links = '<br><a href="/scavenger-hunt/leaderboard">Join an existing team</a>';
}
  $form['buttons']['submit']['#value'] = 'next';
  $form['buttons']['submit']['#attributes'] = array('class' => 'button button-medium shadow rounded');
//global $user;
//if ($user->uid == 454869) {
  $form['field_email'][0]['value']['#required'] = 0;
//  drupal_set_message('<pre>'.print_r($form['field_email'],1).'</pre>');
//}
  print $title_field;
  print drupal_render($form['field_campaign_first_name']);
  print drupal_render($form['field_campaign_last_name']);
  print drupal_render($form['field_email']);
  print drupal_render($form['field_campaign_phone']);
  print $zip_field;
  print drupal_render($form['buttons']['submit']);
  print $extra_links;
  
?>

<div style="display:none">
  <?php print drupal_render($form);?>
</div>
