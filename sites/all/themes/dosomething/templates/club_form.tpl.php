<?php
$form['og_description']['#value'] = 'DoSomething Club ';
 $form['taxonomy'][17]['#value'] = 'other';

 $description = "Changed the description";
   $title_field = drupal_render($form['title']);
//print drupal_render($form['title']['description']);
  // drupal_render($form['field_campaigns']);
 // $zip_field = drupal_render($form['locations'][0]['postal_code']);
// $club_leader =  drupal_render($form['group_club_leader_info']);
//$extra_links = '<br><a href="/scavenger-hunt/leaderboard">Join an existing team</a>';

  $form['buttons']['submit']['#value'] = 'Submit';
  $form['buttons']['submit']['#attributes'] = array('class' => 'button button-medium shadow rounded');
//global $user;
//if ($user->uid == 454869) {
//  $form['field_email'][0]['value']['#required'] = 0;
//  drupal_set_message('<pre>'.print_r($form['field_email'],1).'</pre>');
//}
  print $title_field;
  if (user_access('administer nodes')) {
  //  print drupal_render($form['field_team_points']);
  }
  print drupal_render($form['group_club_leader_info']);
  print drupal_render($form['group_what_campaigns']);
  print drupal_render($form['field_camp']);
  print drupal_render($form['group_where_should_we_send_the']);
  print drupal_render($form['group_club_photos_and_albums']);
  print drupal_render($form['taxonomy'][17]);
  print drupal_render($form['group_agreement']);
  print drupal_render($form['buttons']['submit']);
  //print drupal_render($form['buttons']['delete']);
  //print $extra_links;
  //print '<br><br><span class="small">Due to overwhelming demand, we have run out of sunglasses.  We still have tons of great prizes like Lenovo laptops and scholarships, so join the hunt!</span>';
?>

<div style="display:none">
  <?php print drupal_render($form);?>

</div>

