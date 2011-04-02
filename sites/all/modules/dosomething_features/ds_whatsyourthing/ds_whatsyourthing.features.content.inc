<?php

/**
 * Implementation of hook_content_default_fields().
 */
function ds_whatsyourthing_content_default_fields() {
  $fields = array();

  // Exported field: field_act_now_items
  $fields['cause-field_act_now_items'] = array(
    'field_name' => 'field_act_now_items',
    'type_name' => 'cause',
    'display_settings' => array(
      'weight' => '-3',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'nodereference',
    'required' => '0',
    'multiple' => '1',
    'module' => 'nodereference',
    'active' => '1',
    'referenceable_types' => array(
      'action_guide' => 'action_guide',
      'easy_idea' => 'easy_idea',
      'tips_and_tools' => 'tips_and_tools',
      'blank_page' => 0,
      'cause' => 0,
      'celebs_gone_good' => 0,
      'chatterbox' => 0,
      'club' => 0,
      'club_event' => 0,
      'feature_content' => 0,
      'feedapi_node' => 0,
      'final_grant_update' => 0,
      'forum' => 0,
      'grant_application' => 0,
      'help_ticket' => 0,
      'increaseyourgreen_signup' => 0,
      'issue' => 0,
      'multichoice' => 0,
      'page' => 0,
      'plum_grant_app' => 0,
      'poll' => 0,
      'project' => 0,
      'project_update' => 0,
      'quiz' => 0,
      'rant_rave' => 0,
      'scroller' => 0,
      'story' => 0,
      'test_grant_app' => 0,
      'volunteer_opp' => 0,
      'webform' => 0,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(),
      ),
      'default_value_php' => '',
      'label' => 'Act Now! Items',
      'weight' => '-3',
      'description' => '',
      'type' => 'nodereference_autocomplete',
      'module' => 'nodereference',
    ),
  );

  // Exported field: field_act_now_photo
  $fields['cause-field_act_now_photo'] = array(
    'field_name' => 'field_act_now_photo',
    'type_name' => 'cause',
    'display_settings' => array(
      'weight' => '-3',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'image_plain',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'filefield',
    'required' => '0',
    'multiple' => '0',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => '0',
    'list_default' => '1',
    'description_field' => '0',
    'widget' => array(
      'max_resolution' => '0',
      'image_path' => '',
      'custom_alt' => 0,
      'custom_title' => 0,
      'teaser_preset' => NULL,
      'body_preset' => NULL,
      'default_image' => NULL,
      'use_default_image' => 0,
      'file_path' => '',
      'file_extensions' => NULL,
      'max_filesize_per_file' => NULL,
      'max_filesize_per_node' => NULL,
      'label' => 'Act Now Photo',
      'weight' => '-3',
      'description' => '133px by 177px max',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Exported field: field_action_guides
  $fields['cause-field_action_guides'] = array(
    'field_name' => 'field_action_guides',
    'type_name' => 'cause',
    'display_settings' => array(
      'weight' => '8',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'nodereference',
    'required' => '0',
    'multiple' => '1',
    'module' => 'nodereference',
    'active' => '1',
    'referenceable_types' => array(
      'action_guide' => 'action_guide',
      'blank_page' => 0,
      'cause' => 0,
      'cause_or_issue' => 0,
      'celebs_gone_good' => 0,
      'chatterbox' => 0,
      'club' => 0,
      'club_event' => 0,
      'easy_idea' => 0,
      'feedapi_node' => 0,
      'final_grant_update' => 0,
      'forum' => 0,
      'grant_application' => 0,
      'help_ticket' => 0,
      'issue' => 0,
      'multichoice' => 0,
      'page' => 0,
      'poll' => 0,
      'project' => 0,
      'project_update' => 0,
      'quiz' => 0,
      'rant_rave' => 0,
      'story' => 0,
      'tips_and_tools' => 0,
      'volunteer_opp' => 0,
      'webform' => 0,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(),
      ),
      'default_value_php' => '',
      'label' => 'Action Guides',
      'weight' => '8',
      'description' => '',
      'type' => 'nodereference_autocomplete',
      'module' => 'nodereference',
    ),
  );

  // Exported field: field_further_description
  $fields['cause-field_further_description'] = array(
    'field_name' => 'field_further_description',
    'type_name' => 'cause',
    'display_settings' => array(
      'weight' => '1',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'rows' => '4',
      'label' => 'Further Description',
      'weight' => '1',
      'description' => '',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_further_description_capti
  $fields['cause-field_further_description_capti'] = array(
    'field_name' => 'field_further_description_capti',
    'type_name' => 'cause',
    'display_settings' => array(
      'weight' => '1',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'rows' => '1',
      'label' => 'Further Description Caption',
      'weight' => '1',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_further_description_photo
  $fields['cause-field_further_description_photo'] = array(
    'field_name' => 'field_further_description_photo',
    'type_name' => 'cause',
    'display_settings' => array(
      'weight' => '1',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'image_plain',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'filefield',
    'required' => '0',
    'multiple' => '0',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => '0',
    'list_default' => '1',
    'description_field' => '0',
    'widget' => array(
      'max_resolution' => '0',
      'image_path' => '',
      'custom_alt' => 0,
      'custom_title' => 0,
      'teaser_preset' => NULL,
      'body_preset' => NULL,
      'default_image' => NULL,
      'use_default_image' => 0,
      'file_path' => '',
      'file_extensions' => NULL,
      'max_filesize_per_file' => NULL,
      'max_filesize_per_node' => NULL,
      'label' => 'Further Description Photo',
      'weight' => '1',
      'description' => '133px by 177px max',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Exported field: field_further_description_title
  $fields['cause-field_further_description_title'] = array(
    'field_name' => 'field_further_description_title',
    'type_name' => 'cause',
    'display_settings' => array(
      'weight' => 0,
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'rows' => '1',
      'label' => 'Further Description Title',
      'weight' => 0,
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_intro_text
  $fields['cause-field_intro_text'] = array(
    'field_name' => 'field_intro_text',
    'type_name' => 'cause',
    'display_settings' => array(
      'weight' => '-4',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'rows' => '4',
      'label' => 'Intro Text',
      'weight' => '-4',
      'description' => '',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_intro_text_photo
  $fields['cause-field_intro_text_photo'] = array(
    'field_name' => 'field_intro_text_photo',
    'type_name' => 'cause',
    'display_settings' => array(
      'weight' => '-4',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => '115_default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'filefield',
    'required' => '0',
    'multiple' => '0',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => '0',
    'list_default' => '1',
    'description_field' => '0',
    'widget' => array(
      'max_resolution' => '0',
      'image_path' => '',
      'custom_alt' => 0,
      'custom_title' => 0,
      'teaser_preset' => NULL,
      'body_preset' => NULL,
      'default_image' => NULL,
      'use_default_image' => 0,
      'file_path' => '',
      'file_extensions' => NULL,
      'max_filesize_per_file' => NULL,
      'max_filesize_per_node' => NULL,
      'label' => 'Intro Text Photo',
      'weight' => '-4',
      'description' => '111px by 111px max',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Exported field: field_learn_items
  $fields['cause-field_learn_items'] = array(
    'field_name' => 'field_learn_items',
    'type_name' => 'cause',
    'display_settings' => array(
      'weight' => '-1',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'nodereference',
    'required' => '0',
    'multiple' => '1',
    'module' => 'nodereference',
    'active' => '1',
    'referenceable_types' => array(
      'action_guide' => 'action_guide',
      'easy_idea' => 'easy_idea',
      'tips_and_tools' => 'tips_and_tools',
      'blank_page' => 0,
      'cause' => 0,
      'celebs_gone_good' => 0,
      'chatterbox' => 0,
      'club' => 0,
      'club_event' => 0,
      'feature_content' => 0,
      'feedapi_node' => 0,
      'final_grant_update' => 0,
      'forum' => 0,
      'grant_application' => 0,
      'help_ticket' => 0,
      'increaseyourgreen_signup' => 0,
      'issue' => 0,
      'multichoice' => 0,
      'page' => 0,
      'plum_grant_app' => 0,
      'poll' => 0,
      'project' => 0,
      'project_update' => 0,
      'quiz' => 0,
      'rant_rave' => 0,
      'scroller' => 0,
      'story' => 0,
      'test_grant_app' => 0,
      'volunteer_opp' => 0,
      'webform' => 0,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(),
      ),
      'default_value_php' => '',
      'label' => 'Learn Items',
      'weight' => '-1',
      'description' => '',
      'type' => 'nodereference_autocomplete',
      'module' => 'nodereference',
    ),
  );

  // Exported field: field_learn_photo
  $fields['cause-field_learn_photo'] = array(
    'field_name' => 'field_learn_photo',
    'type_name' => 'cause',
    'display_settings' => array(
      'weight' => '-2',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'image_plain',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'filefield',
    'required' => '0',
    'multiple' => '0',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => '0',
    'list_default' => '1',
    'description_field' => '0',
    'widget' => array(
      'max_resolution' => '0',
      'image_path' => '',
      'custom_alt' => 0,
      'custom_title' => 0,
      'teaser_preset' => NULL,
      'body_preset' => NULL,
      'default_image' => NULL,
      'use_default_image' => 0,
      'file_path' => '',
      'file_extensions' => NULL,
      'max_filesize_per_file' => NULL,
      'max_filesize_per_node' => NULL,
      'label' => 'Learn Photo',
      'weight' => '-2',
      'description' => '133px by 177px max',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Exported field: field_top_issues
  $fields['cause-field_top_issues'] = array(
    'field_name' => 'field_top_issues',
    'type_name' => 'cause',
    'display_settings' => array(
      'weight' => '9',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'nodereference',
    'required' => '0',
    'multiple' => '1',
    'module' => 'nodereference',
    'active' => '1',
    'referenceable_types' => array(
      'issue' => 'issue',
      'action_guide' => 0,
      'blank_page' => 0,
      'cause' => 0,
      'cause_or_issue' => 0,
      'celebs_gone_good' => 0,
      'chatterbox' => 0,
      'club' => 0,
      'club_event' => 0,
      'easy_idea' => 0,
      'feedapi_node' => 0,
      'final_grant_update' => 0,
      'forum' => 0,
      'grant_application' => 0,
      'help_ticket' => 0,
      'multichoice' => 0,
      'page' => 0,
      'poll' => 0,
      'project' => 0,
      'project_update' => 0,
      'quiz' => 0,
      'rant_rave' => 0,
      'story' => 0,
      'tips_and_tools' => 0,
      'volunteer_opp' => 0,
      'webform' => 0,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(),
      ),
      'default_value_php' => '',
      'label' => 'Top Issues',
      'weight' => '9',
      'description' => '',
      'type' => 'nodereference_autocomplete',
      'module' => 'nodereference',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Act Now Photo');
  t('Act Now! Items');
  t('Action Guides');
  t('Further Description');
  t('Further Description Caption');
  t('Further Description Photo');
  t('Further Description Title');
  t('Intro Text');
  t('Intro Text Photo');
  t('Learn Items');
  t('Learn Photo');
  t('Top Issues');

  return $fields;
}
