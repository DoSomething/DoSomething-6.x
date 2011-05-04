<?

$form['#validate']['user_field_form_validate'] = array(
    'profile_fname',
    'profile_lname',
    'mail',
    'profile_cell',
    'profile_state',
    'profile_zip',
    );
$form['body_filter']['body']['#required'] = 1;

$form['body_field']['format'] = NULL;
print drupal_render($form['title']);
print '<br/>';
print drupal_render($form['field_what_is_your_goal_number_']);
print '<br style="clear:both"/>';
print '<div class="textarea">'.drupal_render($form['body_field']).'</div>';
?>

<?
live_profile_v2_show(
    array(
       'profile_fname',
       'profile_lname',
       'mail',
       'profile_cell',
       'profile_state',
       'profile_zip',
    )
  );
?>

<div class="submit-button">
<?
print drupal_render($form['buttons']['submit']);
?>
</div>

<div style="display:none">
  <?php print drupal_render($form);?>
</div>
