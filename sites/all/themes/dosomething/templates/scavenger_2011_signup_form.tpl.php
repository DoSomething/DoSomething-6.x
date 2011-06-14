<?php

  $form['buttons']['submit']['#value'] = 'next';
  $form['buttons']['submit']['#attributes'] = array('class' => 'button button-medium shadow rounded');

  print drupal_render($form['title']);
  print drupal_render($form['field_campaign_first_name']);
  print drupal_render($form['field_campaign_last_name']);
  print drupal_render($form['field_email']);
  print drupal_render($form['locations'][0]['postal_code']);
  print drupal_render($form['buttons']['submit']);
  
?>

<div style="display:none">
  <?php print drupal_render($form);?>
</div>
