<?php
$form['og_description']['#value'] = 'DoSomething Club ';
 $form['taxonomy'][17]['#value'] = 'other';

 $description = "Changed the description";
   $title_field = drupal_render($form['title']);

  $form['buttons']['submit']['#value'] = 'Submit';
  $form['buttons']['submit']['#attributes'] = array('class' => 'button button-medium shadow rounded');
  print $title_field;
  if (user_access('administer nodes')) {
  }
  print drupal_render($form['group_club_leader_info']);
  print drupal_render($form['group_what_campaigns']);
  print drupal_render($form['field_camp']);
  print drupal_render($form['group_where_should_we_send_the']);
  print drupal_render($form['group_club_photos_and_albums']);
  print drupal_render($form['taxonomy'][17]);
  print drupal_render($form['group_agreement']);
  print drupal_render($form['buttons']['submit']);
?>

<div style="display:none">
  <?php print drupal_render($form);?>

</div>

