<?php

/**
 * Implementation of hook_fieldgroup_default_groups().
 */
function ds_projects_fieldgroup_default_groups() {
  $groups = array();

  // Exported group: group_explain_your_project
  $groups['project-group_explain_your_project'] = array(
    'type_name' => 'project',
    'group_name' => 'group_explain_your_project',
    'label' => 'Explain Your Project',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => 'Please do not post personal contact information, this will be removed by an administrator. Instead you can provide a link to your website or facebook page. ',
      ),
      'display' => array(
        'weight' => '1',
        'label' => 'above',
        'teaser' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'description' => '',
      ),
    ),
    'weight' => '1',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_essay_see_it',
      '1' => 'field_essay_believe_it',
      '2' => 'field_essay_build_it',
      '3' => 'field_others_involved',
    ),
  );

  // Exported group: group_project_numbers
  $groups['project-group_project_numbers'] = array(
    'type_name' => 'project',
    'group_name' => 'group_project_numbers',
    'label' => 'Project Numbers',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => 'Confused? <a href ="/projects/projectnumbershelp" target= "_blank"><strong> Here </a> </strong> are some more examples to help you.',
      ),
      'display' => array(
        'weight' => '0',
        'label' => 'above',
        'teaser' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'description' => '',
      ),
    ),
    'weight' => '0',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_num_people_involved',
      '1' => 'field_num_people_inspired',
      '2' => 'field_num_people_impacted',
    ),
  );

  // Exported group: group_the_details
  $groups['project-group_the_details'] = array(
    'type_name' => 'project',
    'group_name' => 'group_the_details',
    'label' => 'Extra Info',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'weight' => '2',
        'label' => 'above',
        'teaser' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'description' => '',
      ),
    ),
    'weight' => '2',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_hours_volunteered',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Explain Your Project');
  t('Extra Info');
  t('Project Numbers');

  return $groups;
}
