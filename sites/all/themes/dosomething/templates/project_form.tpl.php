<?
$form['taxonomy'][5]['#description'] = 'Select the cause and issue that are closest to your project. Other users will be looking for projects in these categories and by tagging your project with these other people will be able to see what you are doing!';

// check clubs by default
if (is_array($form['og_nodeapi']['visible']['og_groups']['#options'])) {
  $form['og_nodeapi']['visible']['og_groups']['#default_value'] = array_keys($form['og_nodeapi']['visible']['og_groups']['#options']);
}

$form['og_nodeapi']['visible']['og_groups']['#prefix'] = '<div class="project-og-settings">';
$form['og_nodeapi']['visible']['og_groups']['#suffix'] = '</div>';
$form['og_nodeapi']['visible']['og_groups']['#description'] = t('The club or clubs responsible for this project (if any). This setting will determine if the project is listed on each club\'s page.');
$form['og_nodeapi']['visible']['og_public']['#default_value'] = TRUE;
$form['og_nodeapi']['visible']['og_public']['#prefix'] = '<div class="hide-me">';
$form['og_nodeapi']['visible']['og_public']['#suffix'] = '</div>';
$form['field_embedded_video']['#collapsible'] = TRUE;
$form['field_embedded_video']['#collapsed'] = TRUE;
//_validate_birthdate_set_error($form['uid']['#value']);

$form['field_project_age']['#access'] = false;
$form['field_related_action_guide']['#access'] = false;
if (! user_access('administer nodes')) {
  $form['field_fb_like_count']['#access'] = false;
  $form['field_dosomething_award_winner']['#access'] = false;
}
$form['field_related_campaign']['#access'] = false;
$issues_vid = variable_get('dosomething_causes_vid',0);

$form['taxonomy']['#attributes']['class'] .= ' project-node-form-taxonomy';

$form['field_project_photo']['#description'] = '<p>Upload photos that are relevant to your project here. Be sure to upload photos from your project and you could be featured on the DoSomething.org home page.</p><p>The first photo will be used on the site when linking to your project, so make sure it\'s good!</p>';


print drupal_render($form);

?>

