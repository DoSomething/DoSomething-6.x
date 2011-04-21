<?

$type = $_GET['type'];
if (! $type && arg(2) == 'edit') {
  $type = 'project';
  //print '<!-- =form='.print_r($form,TRUE).'-->';
  if ($form['#node']->field_botb_video[0]['embed']) {
    $type = 'video';
  }
}


print drupal_render($form['field_campaign_group']);
print drupal_render($form['taxonomy']);
print drupal_render($form['field_campaign_essay_why']);
print drupal_render($form['field_campaign_essay_how']);
print drupal_render($form['field_campaign_number_of_people']);
print drupal_render($form['field_campaign_essay_challenge']);

if ($type == 'project'):
  $form['group_show_us_what_you_did']['field_campaign_pictures']['#collapsible'] = false;
  $form['group_show_us_what_you_did']['field_campaign_video']['#collapsible'] = TRUE;
  $form['group_show_us_what_you_did']['field_campaign_video']['#collapsed'] = TRUE;

  print drupal_render($form['field_why_run_advocacy_project']);
  print drupal_render($form['impact_project_had_on_community']);
  print drupal_render($form['group_show_us_what_you_did']['field_campaign_pictures']);
  print drupal_render($form['group_show_us_what_you_did']['field_campaign_video']);
  print drupal_render($form['field_botb_other']);

  //print '<!--<pre>'.print_r($form['group_about_your_video'],TRUE).'</pre>-->';

else:
  print drupal_render($form['group_your_song']);
  print drupal_render($form['group_about_your_video']);


endif;
  $form['field_campaign_project_type']['key']['#value'] = $type;
  if (user_access('administer nodes')) {
    print drupal_render($form['field_campaign_project_type']);
  }
 
  print drupal_render($form['group_official_contest_rules']);
  print drupal_render($form['field_campaign_next_year_yesno']);

  print drupal_render($form['field_campaign_why_participate']);

  print "<p>Fill in your location below so that people near you can find your project.</p>";
  print drupal_render($form['locations'][0]['street']);
  print drupal_render($form['locations'][0]['city']);
  print drupal_render($form['locations'][0]['province']);
  print drupal_render($form['locations'][0]['postal_code']);

  if (user_access('administer nodes')) {
    print drupal_render($form['options']);
  }



  print drupal_render($form['submit']);

?>


<?php
 
 $form['preview']['#access'] = false;

  //print '<!--<pre>'.print_r($form,TRUE).'</pre>-->';
?>

<div style="display:none">
  <?php print drupal_render($form);?>
</div>

