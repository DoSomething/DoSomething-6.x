<?
$form['body_filter']['body']['#required'] = 1;

$form['options']['sticky'] = NULL;
$form['buttons']['preview']['#access'] = false;
$form['locations']['#access'] = false;
$form['group_show_us_what_you_did']['field_campaign_video']['#collapsible'] = true;
$form['group_show_us_what_you_did']['field_campaign_video']['#collapsed'] = true;
$submit = drupal_render($form['buttons']['submit']);
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
