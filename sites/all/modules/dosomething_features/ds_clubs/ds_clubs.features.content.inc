<?php

/**
 * Implementation of hook_content_default_fields().
 */
function ds_clubs_content_default_fields() {
  $fields = array();

  // Exported field: field_club_address
  $fields['club-field_club_address'] = array(
    'field_name' => 'field_club_address',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => 0,
      'parent' => 'group_where_should_we_send_the',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'label' => 'Address',
      'weight' => 0,
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_city
  $fields['club-field_club_city'] = array(
    'field_name' => 'field_club_city',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '1',
      'parent' => 'group_where_should_we_send_the',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'label' => 'City',
      'weight' => '1',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_expected_members
  $fields['club-field_club_expected_members'] = array(
    'field_name' => 'field_club_expected_members',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '-8',
      'parent' => 'group_club_members',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'label' => 'Expected number of club members',
      'weight' => '-8',
      'description' => 'Please give your best estimate. Numbers only (no letters or symbols).',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_first_meeting
  $fields['club-field_club_first_meeting'] = array(
    'field_name' => 'field_club_first_meeting',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '-1',
      'parent' => 'group_club_details',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '<reply>
no
yes',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'Did you have your first meeting yet?',
      'weight' => '-1',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_club_first_meeting_when
  $fields['club-field_club_first_meeting_when'] = array(
    'field_name' => 'field_club_first_meeting_when',
    'type_name' => 'club',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'short',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'short',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'date',
    'required' => '0',
    'multiple' => '0',
    'module' => 'date',
    'active' => '1',
    'granularity' => array(
      '0' => 'year',
      '1' => 'month',
      '2' => 'day',
      '3' => '0',
      '4' => '0',
      '5' => '0',
    ),
    'field_timezone' => 'America/New_York',
    'timezone_db' => '',
    'tz_handling' => 'none',
    'todate' => '',
    'default_format' => 'short',
    'widget' => array(
      'default_value' => 'blank',
      'default_value_custom' => '',
      'default_value2' => 'blank',
      'default_value_custom2' => '',
      'input_format' => 'site-wide',
      'input_format_custom' => '',
      'increment' => '1',
      'text_parts' => array(),
      'year_range' => '-0:+1',
      'label' => 'If not, when is your first meeting?',
      'weight' => 0,
      'description' => '',
      'type' => 'date_select',
      'module' => 'date',
    ),
  );

  // Exported field: field_club_intended_role
  $fields['club-field_club_intended_role'] = array(
    'field_name' => 'field_club_intended_role',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '3',
      'parent' => 'group_club_leader_info',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '<role>
Club Leader
Adult Advisor',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'What is your role?',
      'weight' => '3',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_club_is_school
  $fields['club-field_club_is_school'] = array(
    'field_name' => 'field_club_is_school',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '5',
      'parent' => 'group_where_should_we_send_the',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '<reply>
no
yes',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'Is this a school address?',
      'weight' => '5',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_club_leader_birthdate
  $fields['club-field_club_leader_birthdate'] = array(
    'field_name' => 'field_club_leader_birthdate',
    'type_name' => 'club',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'field_club_leader_birthdate_default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'field_club_leader_birthdate_default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'date',
    'required' => '1',
    'multiple' => '0',
    'module' => 'date',
    'active' => '1',
    'granularity' => array(
      '0' => 'year',
      '1' => 'month',
      '2' => 'day',
      '3' => '0',
      '4' => '0',
      '5' => '0',
    ),
    'field_timezone' => 'America/New_York',
    'timezone_db' => '',
    'tz_handling' => 'none',
    'todate' => '',
    'default_format' => 'field_club_leader_birthdate_default',
    'widget' => array(
      'default_value' => 'blank',
      'default_value_custom' => '',
      'default_value2' => 'blank',
      'default_value_custom2' => '',
      'input_format' => 'site-wide',
      'input_format_custom' => 'm/d/y',
      'increment' => NULL,
      'text_parts' => NULL,
      'year_range' => NULL,
      'label' => 'Date of birth',
      'weight' => '-3',
      'description' => 'mm/dd/yyyy
',
      'type' => 'date_text',
      'module' => 'date',
    ),
  );

  // Exported field: field_club_leader_email
  $fields['club-field_club_leader_email'] = array(
    'field_name' => 'field_club_leader_email',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '7',
      'parent' => 'group_student_leader_contact_i',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
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
      'label' => 'Student Leader Email',
      'weight' => '7',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_leader_last_name
  $fields['club-field_club_leader_last_name'] = array(
    'field_name' => 'field_club_leader_last_name',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '5',
      'parent' => 'group_student_leader_contact_i',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
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
      'label' => 'Student Leader Last Name',
      'weight' => '5',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_meeting_frequency
  $fields['club-field_club_meeting_frequency'] = array(
    'field_name' => 'field_club_meeting_frequency',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '-2',
      'parent' => 'group_club_details',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '<frequency>
Once a week
Twice a month
Once a month
Not sure',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'How often does your Club plan to hold meetings?',
      'weight' => '-2',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_club_member_1_email
  $fields['club-field_club_member_1_email'] = array(
    'field_name' => 'field_club_member_1_email',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '-8',
      'parent' => 'group_club_members',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'label' => 'Member 1 email',
      'weight' => '-8',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_member_1_role
  $fields['club-field_club_member_1_role'] = array(
    'field_name' => 'field_club_member_1_role',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '-6',
      'parent' => 'group_club_members',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
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
      'label' => 'Member 1 leadership title',
      'weight' => '-6',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_member_2_email
  $fields['club-field_club_member_2_email'] = array(
    'field_name' => 'field_club_member_2_email',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '-4',
      'parent' => 'group_club_members',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'label' => 'Member 2 email',
      'weight' => '-4',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_member_2_role
  $fields['club-field_club_member_2_role'] = array(
    'field_name' => 'field_club_member_2_role',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '-2',
      'parent' => 'group_club_members',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
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
      'label' => 'Member 2 leadership title',
      'weight' => '-2',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_member_3_email
  $fields['club-field_club_member_3_email'] = array(
    'field_name' => 'field_club_member_3_email',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => 0,
      'parent' => 'group_club_members',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'label' => 'Member 3 email',
      'weight' => 0,
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_member_3_role
  $fields['club-field_club_member_3_role'] = array(
    'field_name' => 'field_club_member_3_role',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '2',
      'parent' => 'group_club_members',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
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
      'label' => 'Member 3 leadership title',
      'weight' => '2',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_member_4_email
  $fields['club-field_club_member_4_email'] = array(
    'field_name' => 'field_club_member_4_email',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '4',
      'parent' => 'group_club_members',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'label' => 'Member 4 email',
      'weight' => '4',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_member_4_role
  $fields['club-field_club_member_4_role'] = array(
    'field_name' => 'field_club_member_4_role',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '6',
      'parent' => 'group_club_members',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
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
      'label' => 'Member 4 leadership title',
      'weight' => '6',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_picture
  $fields['club-field_club_picture'] = array(
    'field_name' => 'field_club_picture',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '-6',
      'parent' => 'group_club_photos_and_albums',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'image_plain',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'filefield',
    'required' => '0',
    'multiple' => '0',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => '0',
    'list_default' => 1,
    'description_field' => '0',
    'widget' => array(
      'max_resolution' => '0',
      'max_filesize' => '0',
      'max_number_images' => '0',
      'image_path' => 'files/club',
      'file_extensions' => 'jpg jpeg png gif',
      'custom_alt' => 0,
      'custom_title' => 0,
      'default_image' => array(
        'filename' => 'group.jpg',
        'filepath' => 'files/imagefield_default_images/group.jpg',
        'filemime' => 'image/jpeg',
        'source' => 'default_image_upload',
        'destination' => 'files/imagefield_default_images/group.jpg',
        'filesize' => 48151,
        'uid' => '236225',
        'status' => 1,
        'timestamp' => 1297371239,
        'fid' => '61377',
      ),
      'use_default_image' => 1,
      'file_path' => 'club',
      'max_filesize_per_file' => '',
      'max_filesize_per_node' => '',
      'progress_indicator' => 'bar',
      'min_resolution' => '0',
      'alt' => '',
      'title' => '',
      'title_type' => 'textfield',
      'label' => 'Official club photo',
      'weight' => '-6',
      'description' => 'This is for your Club\'s Profile Page!',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Exported field: field_club_project_idea_1
  $fields['club-field_club_project_idea_1'] = array(
    'field_name' => 'field_club_project_idea_1',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => 0,
      'parent' => 'group_what_project_ideas_do_yo',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'rows' => '5',
      'label' => 'Project Idea and Plan of Action 1',
      'weight' => 0,
      'description' => 'Please write at least 3 sentences here.',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_project_idea_2
  $fields['club-field_club_project_idea_2'] = array(
    'field_name' => 'field_club_project_idea_2',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '1',
      'parent' => 'group_what_project_ideas_do_yo',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'rows' => '5',
      'label' => 'Project Idea and Plan of Action 2',
      'weight' => '1',
      'description' => 'Please write at least 3 sentences here.',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_project_idea_other
  $fields['club-field_club_project_idea_other'] = array(
    'field_name' => 'field_club_project_idea_other',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '2',
      'parent' => 'group_what_project_ideas_do_yo',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
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
      'rows' => '5',
      'label' => 'Other Project Ideas',
      'weight' => '2',
      'description' => 'The more ideas the better! Separate multiple ideas with a semicolon!',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_state
  $fields['club-field_club_state'] = array(
    'field_name' => 'field_club_state',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '2',
      'parent' => 'group_where_should_we_send_the',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '<state/province>
AB
AK
AL
AR
AS
AZ
BC
CA
CO
CT
DC
DE
FL
FM
GA
GU
HI
IA
ID
IL
IN
KS
KY
LA
MA
MB
MD
ME
MH
MI
MN
MO
MP
MS
MT
NB
NC
ND
NE
NH
NJ
NL
NM
NT
NS
NU
NV
NY
OH
OK
ON
OR
PA
PE
PR
PW
QC
RI
SC
SD
SK
TN
TX
UT
VA
VI
VT
WA
WI
WV
WY
YT
Outside of U.S./Canada',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'State',
      'weight' => '2',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_club_student_leader_first
  $fields['club-field_club_student_leader_first'] = array(
    'field_name' => 'field_club_student_leader_first',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '4',
      'parent' => 'group_student_leader_contact_i',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
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
      'label' => 'Student Leader First Name',
      'weight' => '4',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_url
  $fields['club-field_club_url'] = array(
    'field_name' => 'field_club_url',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '2',
      'parent' => 'group_club_details',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'label' => 'http://www.DoSomething.org/Club/',
      'weight' => '2',
      'description' => 'Put the one or two words that you want to appear at the end of your Club\'s profile page web address.',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_club_video
  $fields['club-field_club_video'] = array(
    'field_name' => 'field_club_video',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => 0,
      'parent' => 'group_club_photos_and_albums',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'video_video',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'emvideo',
    'required' => '0',
    'multiple' => '0',
    'module' => 'emvideo',
    'active' => '1',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'embed' => '',
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'video_width' => '425',
      'video_height' => '350',
      'video_autoplay' => 0,
      'preview_width' => '425',
      'preview_height' => '350',
      'preview_autoplay' => 0,
      'thumbnail_width' => '120',
      'thumbnail_height' => '90',
      'thumbnail_default_path' => '',
      'providers' => array(
        'bliptv' => 'bliptv',
        'metacafe' => 'metacafe',
        'myspace' => 'myspace',
        'vimeo' => 'vimeo',
        'youtube' => 'youtube',
        'brightcove' => 0,
        'dailymotion' => 0,
        'google' => 0,
        'guba' => 0,
        'imeem' => 0,
        'jumpcut' => 0,
        'lastfm' => 0,
        'livevideo' => 0,
        'revver' => 0,
        'sevenload' => 0,
        'spike' => 0,
        'tudou' => 0,
        'veoh' => 0,
        'zzz_custom_url' => 0,
      ),
      'emimport' => 0,
      'emthumb' => 0,
      'emthumb_label' => 'club_video custom thumbnail',
      'emthumb_description' => 'If you upload a custom thumbnail, then this will be displayed when the club_video thumbnail is called for, overriding any automatic thumbnails by custom providers.',
      'emthumb_max_resolution' => '0',
      'emimport_image_path' => '',
      'emthumb_custom_alt' => 0,
      'emthumb_custom_title' => 0,
      'label' => 'Club Video - to appear on Clubs Profile Page',
      'weight' => 0,
      'description' => '',
      'type' => 'emvideo_textfields',
      'module' => 'emvideo',
    ),
  );

  // Exported field: field_club_zip
  $fields['club-field_club_zip'] = array(
    'field_name' => 'field_club_zip',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '3',
      'parent' => 'group_where_should_we_send_the',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'label' => 'ZIP/Postal Code',
      'weight' => '3',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_clubs_meeting_location
  $fields['club-field_clubs_meeting_location'] = array(
    'field_name' => 'field_clubs_meeting_location',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '-3',
      'parent' => 'group_club_details',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '<where>
school
summer camp
religious institution
community center
other',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'Where does your Club plan to hold meetings?',
      'weight' => '-3',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_email
  $fields['club-field_email'] = array(
    'field_name' => 'field_email',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '-1',
      'parent' => 'group_club_leader_info',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(),
      'default_value_php' => 'global $user;
return array(0 => array(\'value\' => $user->mail));',
      'rows' => '1',
      'label' => 'Your Email',
      'weight' => '-1',
      'description' => 'Please give us an email address you check often so we can let you know when your application has been approved and notify you if you win any grants/prizes!',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_field_club_country
  $fields['club-field_field_club_country'] = array(
    'field_name' => 'field_field_club_country',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '4',
      'parent' => 'group_where_should_we_send_the',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
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
      'label' => 'Country, if outside the U.S. and Canada',
      'weight' => '4',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_field_club_new
  $fields['club-field_field_club_new'] = array(
    'field_name' => 'field_field_club_new',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '1',
      'parent' => 'group_club_details',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '<yes/no>
yes, we\'ve been in existence for over a month but are new to DoSomething.org
no, we are a completely brand new Club',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'Has your group been in existence for more than a month?',
      'weight' => '1',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_name
  $fields['club-field_name'] = array(
    'field_name' => 'field_name',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '-7',
      'parent' => 'group_club_leader_info',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'label' => 'First Name',
      'weight' => '-7',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_name_last
  $fields['club-field_name_last'] = array(
    'field_name' => 'field_name_last',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '-4',
      'parent' => 'group_club_leader_info',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'label' => 'Last Name',
      'weight' => '-4',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_phone_required
  $fields['club-field_phone_required'] = array(
    'field_name' => 'field_phone_required',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '1',
      'parent' => 'group_club_leader_info',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'label' => 'Your Cell Phone',
      'weight' => '1',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_project_photo
  $fields['club-field_project_photo'] = array(
    'field_name' => 'field_project_photo',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '-4',
      'parent' => 'group_club_photos_and_albums',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'filefield',
    'required' => '0',
    'multiple' => '1',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => '0',
    'list_default' => '1',
    'description_field' => '0',
    'widget' => array(
      'max_resolution' => '0',
      'max_filesize' => '0',
      'max_number_images' => '0',
      'image_path' => 'project_photos',
      'file_extensions' => 'jpg jpeg png gif',
      'custom_alt' => 0,
      'custom_title' => 1,
      'file_path' => 'project_photos',
      'use_default_image' => 0,
      'max_filesize_per_file' => NULL,
      'max_filesize_per_node' => NULL,
      'label' => 'Club Photos',
      'weight' => '-4',
      'description' => 'Please don\'t use BMP files.
Upload photos that are relevant to your project here.  The first photo will be used on the site when linking to your project, so make sure it\'s good! Maximum photo dimensions are 580px by 580px.  ',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Exported field: field_school
  $fields['club-field_school'] = array(
    'field_name' => 'field_school',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '3',
      'parent' => 'group_club_details',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'label' => 'School you attend',
      'weight' => '3',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_school_level
  $fields['club-field_school_level'] = array(
    'field_name' => 'field_school_level',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '8',
      'parent' => 'group_club_details',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '<school level>
Elementary School
Middle/Junior High School
High School
College
Not in School',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'School Level',
      'weight' => '8',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_yacapp_school_type
  $fields['club-field_yacapp_school_type'] = array(
    'field_name' => 'field_yacapp_school_type',
    'type_name' => 'club',
    'display_settings' => array(
      'weight' => '7',
      'parent' => 'group_club_details',
      '4' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '2' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      '3' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '<school type>
Public
Private
Magnet
Charter
Parochial
Home School
Not in School',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'School Type',
      'weight' => '7',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_club_materials_why
  $fields['club_materials-field_club_materials_why'] = array(
    'field_name' => 'field_club_materials_why',
    'type_name' => 'club_materials',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
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
      'rows' => '5',
      'label' => 'Why do you want to start a Do Something Club?',
      'weight' => 0,
      'description' => '',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_email_2
  $fields['club_materials-field_email_2'] = array(
    'field_name' => 'field_email_2',
    'type_name' => 'club_materials',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(),
      'default_value_php' => 'global $user;
return array(0 => array(\'value\' => $user->mail));',
      'rows' => '1',
      'label' => 'Email',
      'weight' => 0,
      'description' => 'Please enter the e-mail you want us to send the clubs starter kit to.',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Address');
  t('City');
  t('Club Photos');
  t('Club Video - to appear on Clubs Profile Page');
  t('Country, if outside the U.S. and Canada');
  t('Date of birth');
  t('Did you have your first meeting yet?');
  t('Email');
  t('Expected number of club members');
  t('First Name');
  t('Has your group been in existence for more than a month?');
  t('How often does your Club plan to hold meetings?');
  t('If not, when is your first meeting?');
  t('Is this a school address?');
  t('Last Name');
  t('Member 1 email');
  t('Member 1 leadership title');
  t('Member 2 email');
  t('Member 2 leadership title');
  t('Member 3 email');
  t('Member 3 leadership title');
  t('Member 4 email');
  t('Member 4 leadership title');
  t('Official club photo');
  t('Other Project Ideas');
  t('Project Idea and Plan of Action 1');
  t('Project Idea and Plan of Action 2');
  t('School Level');
  t('School Type');
  t('School you attend');
  t('State');
  t('Student Leader Email');
  t('Student Leader First Name');
  t('Student Leader Last Name');
  t('What is your role?');
  t('Where does your Club plan to hold meetings?');
  t('Why do you want to start a Do Something Club?');
  t('Your Cell Phone');
  t('Your Email');
  t('ZIP/Postal Code');
  t('http://www.DoSomething.org/Club/');

  return $fields;
}
