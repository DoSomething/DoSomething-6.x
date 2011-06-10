<?php

  $form['buttons']['submit']['#value'] = 'submit';
  $form['buttons']['submit']['#attributes'] = array('class' => 'button button-medium shadow rounded');
  unset($form['field_sfs_subscriptions']['value']['#title']);

  print drupal_render($form['title']);
  print drupal_render($form['field_school_name']);
  print drupal_render($form['field_campaign_email']);
  print drupal_render($form['field_campaign_phone_0']);
  print drupal_render($form['field_sfs_subscriptions']);
  print drupal_render($form['field_sfs_terms']);
  print drupal_render($form['buttons']['submit']);

?>

<div style="display:none">
  <?php print drupal_render($form);?>
</div>
