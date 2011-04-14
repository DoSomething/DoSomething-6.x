<?

if (user_access('administer nodes')) {
  //print '<pre>'.print_r($form,TRUE).'</pre>';
}
$form['preview']['#access'] = false;
$form['locations']['#access'] = false;
$form['group_show_us_what_you_did']['field_campaign_video']['#collapsible'] = true;
$form['group_show_us_what_you_did']['field_campaign_video']['#collapsed'] = true;
$submit = drupal_render($form['submit']);
print drupal_render($form);

live_profile_v2_show(
    array(
       'profile_fname',
       'profile_lname',
       'profile_cell',
       'profile_state',
       'profile_zip',
    )
);

print $submit;

?>
