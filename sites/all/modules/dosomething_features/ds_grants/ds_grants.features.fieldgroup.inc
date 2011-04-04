<?php

/**
 * Implementation of hook_fieldgroup_default_groups().
 */
function ds_grants_fieldgroup_default_groups() {
  $groups = array();

  // Exported group: group_budget
  $groups['final_grant_update-group_budget'] = array(
    'type_name' => 'final_grant_update',
    'group_name' => 'group_budget',
    'label' => 'Budget',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'description' => '',
        'teaser' => NULL,
        'full' => NULL,
        'label' => NULL,
      ),
    ),
    'weight' => '3',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_evaluation_of_budget_pred',
      '1' => 'field_budget',
    ),
  );

  // Exported group: group_photos_and_press
  $groups['final_grant_update-group_photos_and_press'] = array(
    'type_name' => 'final_grant_update',
    'group_name' => 'group_photos_and_press',
    'label' => 'Photos and Press',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => 'Please upload photos of your project and any press your project received.  ',
      ),
      'display' => array(
        'description' => '',
        'teaser' => NULL,
        'full' => NULL,
        'label' => NULL,
      ),
    ),
    'weight' => '2',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_picture',
      '1' => 'field_press_clippings',
      '2' => 'field_project_links',
    ),
  );

  // Exported group: group_project_info
  $groups['final_grant_update-group_project_info'] = array(
    'type_name' => 'final_grant_update',
    'group_name' => 'group_project_info',
    'label' => 'Project Info',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => 'Some of this info will be displayed on your project posting, each field is marked Public if it will be displayed, or Admin Only if it will only be viewed by Do Something Staff. ',
      ),
      'display' => array(
        'description' => '',
        'teaser' => NULL,
        'full' => NULL,
        'label' => NULL,
      ),
    ),
    'weight' => '0',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_project',
      '1' => 'field_grant_type',
    ),
  );

  // Exported group: group_reflection_questions
  $groups['final_grant_update-group_reflection_questions'] = array(
    'type_name' => 'final_grant_update',
    'group_name' => 'group_reflection_questions',
    'label' => 'Reflection Questions',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'description' => '',
        'teaser' => NULL,
        'full' => NULL,
        'label' => NULL,
      ),
    ),
    'weight' => '1',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_project_evolution',
      '1' => 'field_project_highlights',
      '2' => 'field_things_to_do_differently',
      '3' => 'field_number_people_impacted',
      '4' => 'field_number_people_in_organiza',
      '5' => 'field_grant_impact',
    ),
  );

  // Exported group: group_additional_info
  $groups['grant-group_additional_info'] = array(
    'type_name' => 'grant',
    'group_name' => 'group_additional_info',
    'label' => 'Additional Info',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'description' => '',
        'teaser' => NULL,
        'full' => NULL,
        'label' => NULL,
      ),
    ),
    'weight' => '0',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_grant_optional_essay_1',
      '1' => 'field_grant_optional_number_1',
    ),
  );

  // Exported group: group_boring_legal_stuff
  $groups['grant-group_boring_legal_stuff'] = array(
    'type_name' => 'grant',
    'group_name' => 'group_boring_legal_stuff',
    'label' => 'Boring Legal Stuff',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'description' => '',
        'teaser' => NULL,
        'full' => NULL,
        'label' => NULL,
      ),
    ),
    'weight' => '5',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_legal_1_0',
      '1' => 'field_legal_2_0',
      '2' => 'field_legal_3_0',
      '3' => 'field_legal_4',
    ),
  );

  // Exported group: group_essays
  $groups['grant-group_essays'] = array(
    'type_name' => 'grant',
    'group_name' => 'group_essays',
    'label' => 'Essays',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'description' => '',
        'teaser' => NULL,
        'full' => NULL,
        'label' => NULL,
      ),
    ),
    'weight' => '-3',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_essay_one',
      '1' => 'field_essay_two',
      '2' => 'field_essay_three',
      '3' => 'field_essay_four',
    ),
  );

  // Exported group: group_personal_info
  $groups['grant-group_personal_info'] = array(
    'type_name' => 'grant',
    'group_name' => 'group_personal_info',
    'label' => 'Personal Info',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'description' => '',
        'teaser' => NULL,
        'full' => NULL,
        'label' => NULL,
      ),
    ),
    'weight' => '-8',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_name',
      '1' => 'field_address',
      '2' => 'field_city',
      '3' => 'field_state',
      '4' => 'field_zip_code_3',
      '5' => 'field_email',
      '6' => 'field_phone_number',
      '7' => 'field_your_facebook_page_url',
      '8' => 'field_your_twitter_handle',
      '9' => 'field_plumgrant_highschool',
      '10' => 'field_your_college_if_applicabl',
      '11' => 'field_your_school_deans_name',
      '12' => 'field_deans_email_0',
      '13' => 'field_deans_phone_number_0',
      '14' => 'field_which_grant',
      '15' => 'field_you_are_applying_as',
      '16' => 'field_other_group_members_email',
      '17' => 'field_where_did_you_hear',
      '18' => 'field_how_did_you_hear_about_bo',
    ),
  );

  // Exported group: group_project_info
  $groups['grant-group_project_info'] = array(
    'type_name' => 'grant',
    'group_name' => 'group_project_info',
    'label' => 'Project Info',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'description' => '',
        'teaser' => NULL,
        'full' => NULL,
        'label' => NULL,
      ),
    ),
    'weight' => '-5',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_describe',
      '1' => 'field_your_project',
      '2' => 'field_project_date',
      '3' => 'field_personal_project_website',
      '4' => 'field_youtube_or_video_url',
      '5' => 'field_photo_album_url',
    ),
  );

  // Exported group: group_project_numbers
  $groups['grant-group_project_numbers'] = array(
    'type_name' => 'grant',
    'group_name' => 'group_project_numbers',
    'label' => 'Project Numbers',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => 'Confused? <a href ="/projects/projectnumbershelp" target= "_blank"><strong> Here </a> </strong> are some more examples to help you.',
      ),
      'display' => array(
        'description' => '',
        'teaser' => NULL,
        'full' => NULL,
        'label' => NULL,
      ),
    ),
    'weight' => '-4',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_num_people_involved',
      '1' => 'field_num_people_inspired',
      '2' => 'field_num_people_impacted',
    ),
  );

  // Exported group: group_recommendation
  $groups['grant-group_recommendation'] = array(
    'type_name' => 'grant',
    'group_name' => 'group_recommendation',
    'label' => 'Recommendation',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => ' You can come back and add your recommendation in, but a <b> RECOMMENDATION IS REQUIRED</b> to complete your application.',
      ),
      'display' => array(
        'description' => '',
        'teaser' => NULL,
        'full' => NULL,
        'label' => NULL,
      ),
    ),
    'weight' => '2',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_recommenders_name_1',
      '1' => 'field_recommenders_email_1',
      '2' => 'field_recommenders_phone_numb_1',
      '3' => 'field_recommenders_relationsh_1',
      '4' => 'field_reccomendation',
      '5' => 'field_recommendation_upload',
    ),
  );

  // Exported group: group_scoring
  $groups['grant_judge-group_scoring'] = array(
    'type_name' => 'grant_judge',
    'group_name' => 'group_scoring',
    'label' => 'Scoring',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => 'The applicants should be judged on a scale of 1-10 (1 = absolutely do not agree; 5 = neutral; 10 = totally agree). ',
      ),
      'display' => array(
        'description' => '',
        'teaser' => NULL,
        'full' => NULL,
        'label' => NULL,
      ),
    ),
    'weight' => '0',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_grant_judge_youth',
      '1' => 'field_grant_judge_focus',
      '2' => 'field_grant_judge_community',
      '3' => 'field_grant_judge_problem',
      '4' => 'field_grant_judge_creativity',
      '5' => 'field_grant_judge_diversity',
      '6' => 'field_grant_judge_winner',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Additional Info');
  t('Boring Legal Stuff');
  t('Budget');
  t('Essays');
  t('Personal Info');
  t('Photos and Press');
  t('Project Info');
  t('Project Numbers');
  t('Recommendation');
  t('Reflection Questions');
  t('Scoring');

  return $groups;
}
