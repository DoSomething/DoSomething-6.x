<?php

/**
 * Implementation of hook_ctools_plugin_api().
 */
function ds_clubs_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => 1);
  }
}

/**
 * Implementation of hook_node_info().
 */
function ds_clubs_node_info() {
  $items = array(
    'club' => array(
      'name' => t('Club'),
      'module' => 'features',
      'description' => t('A group of like-minded people.'),
      'has_title' => '1',
      'title_label' => t('Club Name'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => t('<p>In order to continue to receive all of the awesome benefits of a Do Something Club you must post at least one project to your Club\'s Profile Page per semester. The deadline to post for the Spring Semester is <strong>June 30th, 2011</strong>. Please meet this deadline to be eligible for prizes and updates on DoSomething.org. Of course, the more projects the better!</p>
<p>Once you submit your application, we will review it and contact you shortly regarding your acceptance into the program. So please <strong>check the email</strong> that you provide because this is how we a) notify you if your Club has been approved and b) email you any questions that we have about your application.</p>'),
    ),
    'club_event' => array(
      'name' => t('Club Event'),
      'module' => 'features',
      'description' => t('An event that will appear on a club\'s calendar.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Body'),
      'min_word_count' => '0',
      'help' => '',
    ),
    'club_materials' => array(
      'name' => t('Club Materials Request Form'),
      'module' => 'features',
      'description' => t('Club materials request form.'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}

/**
 * Implementation of hook_views_api().
 */
function ds_clubs_views_api() {
  return array(
    'api' => '2',
  );
}
