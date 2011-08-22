

<?


print '<div id="signup-block-title">[1] Share Your Thanks!</div>';


global $user;
if (!$user->uid):
  $current_path = preg_replace('/^\//', '', drupal_get_path_alias(request_uri()));
  $urlencode_current_path = urlencode($current_path);
?>

<div style="padding-top: 30px;"<p>Please <a href="/user/login?destination=<?=$urlencode_current_path;?>">login</a> if you are an existing user on DoSomething.org, or <a href="/user/register?destination=<?=$urlencode_current_path;?>">register</a> to share your thanks!</p></div>


<?php
 else:


//drupal_set_message('<pre>'.print_r($form,1).'</pre>');

  unset($form['field_hunt_subscriptions']['value']['#title']);
  $form['buttons']['submit']['#value'] = 'Submit';
  $form['body_field']['format'] = NULL;
  $form['body_field']['body']['#rows'] = 3;
  $form['buttons']['submit']['#attributes'] = array('class' => 'button button-medium shadow rounded');
  $form['field_email'][0]['value']['#required'] = 0;
  $form['field_campaign_phone'][0]['value']['#required'] = 0;


  print drupal_render($form['field_campaign_first_name']);
  print drupal_render($form['field_campaign_last_name']);
  print drupal_render($form['field_email']);
  print drupal_render($form['field_campaign_phone']);
  print drupal_render($form['locations'][0]['postal_code']);
  print drupal_render($form['locations'][0]['country']);
  print drupal_render($form['body_field']);
  print drupal_render($form['field_hunt_subscriptions']);
  print drupal_render($form['buttons']['submit']);
  print drupal_render($form['buttons']['delete']);
?>


<div style="clear:both"></div>
<div style="display:none">
  <?php print drupal_render($form);?>
</div>

<?

endif;

?>
