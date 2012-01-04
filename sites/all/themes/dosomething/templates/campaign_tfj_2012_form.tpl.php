  <div style="float: left; width: 50%;">
<?php
  
  print(drupal_render($form['field_name_f']));
  print(drupal_render($form['field_name_l']));
  print(drupal_render($form['title']));
  print(drupal_render($form['field_email']));
  print(drupal_render($form['field_campaign_number_of_people']));
  print(drupal_render($form['field_friends_emails']));
?>
  </div>
  <div style="float: left; width: 50%;">
<?php
  print(drupal_render($form['field_mall_name']));
  print(drupal_render($form['field_campaign_pieces']));
  print(drupal_render($form['field_campaign_pictures']));
  print(drupal_render($form['field_campaign_video_single']));
  $form['buttons']['submit']['#value'] = 'SUBMIT';
  print(drupal_render($form['buttons']['submit']));
?>
  </div>
<div style="display: none;">
  <?php print(drupal_render($form)); ?>
</div>
