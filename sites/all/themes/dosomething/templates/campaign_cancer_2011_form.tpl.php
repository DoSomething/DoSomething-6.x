<?php
  $form['buttons']['submit']['#value'] = 'submit';
  
  print drupal_render($form['title']);
  print drupal_render($form['field_cancer_email']);
  //print drupal_render($form['field_embedded_video']);
  print drupal_render($form['field_cancer_volunteers']);
  print drupal_render($form['field_cancer_donors']);
  print drupal_render($form['field_cancer_anythingelse']);
  print drupal_render($form['field_campaign_pictures']);
  print drupal_render($form['field_campaign_video']);  
  print drupal_render($form['buttons']['submit']);
?>
<div style="display:none">
  <?php print drupal_render($form);?>
</div>