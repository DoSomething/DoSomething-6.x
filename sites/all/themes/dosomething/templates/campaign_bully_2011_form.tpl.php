<?

  $form['body_field']['format'] = NULL;
$form['body_field']['body']['#rows'] = 3;
$form['buttons']['submit']['#value'] = 'submit';
  print drupal_render($form['locations'][0]['postal_code']);

  print drupal_render($form['body_field']);
  print drupal_render($form['group_show_us_what_you_did']);
  print drupal_render($form['field_campaign_pictures']);
  print drupal_render($form['buttons']['submit']);
  print drupal_render($form['buttons']['delete']);



?>
<div style="display:none;">
<?=drupal_render($form);?>
</div>
