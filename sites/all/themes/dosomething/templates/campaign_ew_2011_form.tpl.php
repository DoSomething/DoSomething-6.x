<?php

  $form['buttons']['submit']['#value'] = 'submit';
  $form['buttons']['submit']['#attributes'] = array('class' => '');
  echo '<div id="signup-wrapper"><div id="signup-page-1">';
  echo '<div class="signup-right">';
  print drupal_render($form['field_project_name']);
  print drupal_render($form['field_campaign_essay']);
  print drupal_render($form['field_campaign_essay_how']);
  echo '</div><div class="signup-left">';
  print drupal_render($form['title']);
  print drupal_render($form['field_project_age']);
  print drupal_render($form['field_campaign_phone']);
  print drupal_render($form['field_zip_campaign']);
  print drupal_render($form['field_ewaste_items_collected']);
  print drupal_render($form['field_ewaste_bestbuy']);
  echo '</div></div><div class="clearfix"></div><div id="signup-page-2">';
  echo '<div class="signup-right">';
  print drupal_render($form['field_campaign_essay_why']);
  print drupal_render($form['field_campaign_anything_else']);
  echo '</div><div class="signup-left">';
  print drupal_render($form['field_campaign_pictures']);
  print drupal_render($form['field_campaign_video_single']);
  echo '<a href="#" id="signup-back">&lt;&lt; back</a>';
  echo '</div>';
  
  echo '</div></div>';
  echo '<input type="button" id="signup-next-page" />';
  print drupal_render($form['buttons']['submit']);
?>

<div style="display:none">
  <?php print drupal_render($form);?>
</div>
