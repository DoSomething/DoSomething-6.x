<?php

/**
 * Implementation of hook_content_default_fields().
 */
function ds_grants_content_default_fields() {
  $fields = array();

  // Exported field: field_address
  $fields['grant-field_address'] = array(
    'field_name' => 'field_address',
    'type_name' => 'grant',
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
return array( 0 => array(\'value\' => $user->profile_address1));',
      'rows' => '1',
      'label' => 'Address',
      'weight' => '-8',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_application_status
  $fields['grant-field_application_status'] = array(
    'field_name' => 'field_application_status',
    'type_name' => 'grant',
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
    'allowed_values' => '0|no
1|yes
',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => 'no',
        ),
      ),
      'default_value_php' => '',
      'label' => 'Is this application complete?',
      'weight' => '10',
      'description' => 'You can come back later. ',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_budget_0
  $fields['grant-field_budget_0'] = array(
    'field_name' => 'field_budget_0',
    'type_name' => 'grant',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
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
    'type' => 'filefield',
    'required' => '1',
    'multiple' => '0',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => FALSE,
    'list_default' => 1,
    'description_field' => '',
    'widget' => array(
      'file_extensions' => '',
      'file_path' => '',
      'label' => 'Please submit a budget detailing how you would use the grant money',
      'weight' => '-1',
      'description' => '',
      'type' => 'filefield_widget',
      'module' => 'filefield',
    ),
  );

  // Exported field: field_city
  $fields['grant-field_city'] = array(
    'field_name' => 'field_city',
    'type_name' => 'grant',
    'display_settings' => array(
      'label' => array(
        'format' => 'inline',
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
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '30',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(),
      'default_value_php' => 'global $user;
return array( 0 => array(\'value\' => $user->profile_city));',
      'rows' => '1',
      'label' => 'City',
      'weight' => '-7',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_deans_email_0
  $fields['grant-field_deans_email_0'] = array(
    'field_name' => 'field_deans_email_0',
    'type_name' => 'grant',
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
      'label' => 'Principal/Dean\'s Email',
      'weight' => '3',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_deans_phone_number_0
  $fields['grant-field_deans_phone_number_0'] = array(
    'field_name' => 'field_deans_phone_number_0',
    'type_name' => 'grant',
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
      'label' => 'Principal/Dean\'s phone number',
      'weight' => '3',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_describe
  $fields['grant-field_describe'] = array(
    'field_name' => 'field_describe',
    'type_name' => 'grant',
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
    'max_length' => '150',
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
      'label' => 'Short Description',
      'weight' => 0,
      'description' => '(up to 150 characters)',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_email
  $fields['grant-field_email'] = array(
    'field_name' => 'field_email',
    'type_name' => 'grant',
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
      'weight' => '-4',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_essay_four
  $fields['grant-field_essay_four'] = array(
    'field_name' => 'field_essay_four',
    'type_name' => 'grant',
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
    'max_length' => '1500',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'rows' => '10',
      'label' => 'Next Steps',
      'weight' => '4',
      'description' => 'How would winning a Do Something grant help you achieve your goals? How will you measure the success of your project? (Max. 1500 characters)',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_essay_one
  $fields['grant-field_essay_one'] = array(
    'field_name' => 'field_essay_one',
    'type_name' => 'grant',
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
    'max_length' => '1500',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'rows' => '10',
      'label' => 'See It',
      'weight' => '-4',
      'description' => '1) Tell us about the community you are helping or the problem you are trying to solve. 2) Provide evidence (statistics, testimony or research) that shows why this is an important problem.  3) Why are you the right person to solve this problem? (Max. 1500 characters) ',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_essay_three
  $fields['grant-field_essay_three'] = array(
    'field_name' => 'field_essay_three',
    'type_name' => 'grant',
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
    'max_length' => '1500',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'rows' => '10',
      'label' => 'Build It',
      'weight' => '2',
      'description' => 'What\'s your plan of action? Describe the steps you have and/or you will take to achieve your goals.  Please detail your role in the project/organization.  (Max 1500 characters)',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_essay_two
  $fields['grant-field_essay_two'] = array(
    'field_name' => 'field_essay_two',
    'type_name' => 'grant',
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
    'max_length' => '1500',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'rows' => '10',
      'label' => 'Believe It',
      'weight' => '-1',
      'description' => 'What is the vision of your project/organization?  (Your long-term goal, ie.  Decrease my school’s energy use) Tell us how you are or plan to achieve your vision, by providing us with detailed goals for your project/organization.  Please make them as specific as possible. (Change all light bulbs in the school to CF lights, Reduce the time lights are left by a 2 hours a day etc.) (Max. 1500 characters)',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_grant_optional_essay_1
  $fields['grant-field_grant_optional_essay_1'] = array(
    'field_name' => 'field_grant_optional_essay_1',
    'type_name' => 'grant',
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
      'label' => 'grant_optional_essay_1',
      'weight' => 0,
      'description' => '',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_how_did_you_hear_about_bo
  $fields['grant-field_how_did_you_hear_about_bo'] = array(
    'field_name' => 'field_how_did_you_hear_about_bo',
    'type_name' => 'grant',
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
    'allowed_values' => 'Fastweb
Scholarships.com
Internet search
Facebook
Another Website
A Friend
A Teacher
My School
Former Grant Winner
On the Do Something Site
A Do Something Email
Previous Do Something Boot Camps
Other 
',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'How did you hear about this grant? ',
      'weight' => '9',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_name
  $fields['grant-field_name'] = array(
    'field_name' => 'field_name',
    'type_name' => 'grant',
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
return array( 0 => array(\'value\' => $user->profile_fname.\' \'.$user->profile_lname));',
      'rows' => '1',
      'label' => 'Name',
      'weight' => '-10',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_optional_checkbox
  $fields['grant-field_optional_checkbox'] = array(
    'field_name' => 'field_optional_checkbox',
    'type_name' => 'grant',
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
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'No
<b>YES! </b>Send me special offers, special events and exclusive sales from PBteen',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '<b>YES! </b>Send me special offers, special events and exclusive sales from PBteen',
        ),
      ),
      'default_value_php' => '',
      'label' => 'Optional Checkbox',
      'weight' => '9',
      'description' => '',
      'type' => 'optionwidgets_onoff',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_other_group_members_email
  $fields['grant-field_other_group_members_email'] = array(
    'field_name' => 'field_other_group_members_email',
    'type_name' => 'grant',
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
      'rows' => '3',
      'label' => 'Other group members\' emails',
      'weight' => '6',
      'description' => 'If you are applying as a group, please provide your other members\' email addresses.',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_phone_number
  $fields['grant-field_phone_number'] = array(
    'field_name' => 'field_phone_number',
    'type_name' => 'grant',
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
return array( 0 => array(\'value\' => $user->profile_phone));',
      'rows' => '1',
      'label' => 'Phone Number',
      'weight' => '-3',
      'description' => 'Example: 2122542390 (no spaces or separators)',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_plumgrant_highschool
  $fields['grant-field_plumgrant_highschool'] = array(
    'field_name' => 'field_plumgrant_highschool',
    'type_name' => 'grant',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
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
      'rows' => '1',
      'label' => 'High School',
      'weight' => 0,
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_project_date
  $fields['grant-field_project_date'] = array(
    'field_name' => 'field_project_date',
    'type_name' => 'grant',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
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
      'rows' => '2',
      'label' => 'Project Dates',
      'weight' => '1',
      'description' => 'When is the project set to happen?  ',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_reccomendation
  $fields['grant-field_reccomendation'] = array(
    'field_name' => 'field_reccomendation',
    'type_name' => 'grant',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
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
      'rows' => '10',
      'label' => 'Recommendation',
      'weight' => '5',
      'description' => 'Cut and paste your recommendation in here.',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_recipient_birthdate
  $fields['grant-field_recipient_birthdate'] = array(
    'field_name' => 'field_recipient_birthdate',
    'type_name' => 'grant',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
      ),
      'full' => array(
        'format' => 'field_recipient_birthdate_short',
        'exclude' => 0,
      ),
      'teaser' => array(
        'format' => 'field_recipient_birthdate_short',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'datestamp',
    'required' => '1',
    'multiple' => '0',
    'module' => 'date',
    'active' => '1',
    'granularity' => array(
      '0' => 'year',
      '1' => 'month',
      '2' => 'day',
    ),
    'field_timezone' => 'America/New_York',
    'timezone_db' => '',
    'tz_handling' => 'none',
    'todate' => '',
    'default_format' => 'field_recipient_birthdate_short',
    'widget' => array(
      'default_value' => 'blank',
      'default_value_custom' => '',
      'default_value2' => 'blank',
      'default_value_custom2' => '',
      'input_format' => 'site-wide',
      'input_format_custom' => '',
      'increment' => '1',
      'text_parts' => array(),
      'year_range' => '-30:+10',
      'label' => 'Birth Date',
      'weight' => '-9',
      'description' => '',
      'type' => 'date_select',
      'module' => 'date',
    ),
  );

  // Exported field: field_recommendation_upload
  $fields['grant-field_recommendation_upload'] = array(
    'field_name' => 'field_recommendation_upload',
    'type_name' => 'grant',
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
    'type' => 'filefield',
    'required' => '0',
    'multiple' => '0',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => FALSE,
    'list_default' => 1,
    'description_field' => '',
    'widget' => array(
      'file_extensions' => '',
      'file_path' => '',
      'label' => 'Recommendation (Upload)',
      'weight' => '6',
      'description' => 'You can either cut and paste your recommendation in the field above or upload your recommendation as a PDF or Word document. ',
      'type' => 'filefield_widget',
      'module' => 'filefield',
    ),
  );

  // Exported field: field_recommenders_email_1
  $fields['grant-field_recommenders_email_1'] = array(
    'field_name' => 'field_recommenders_email_1',
    'type_name' => 'grant',
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
      'label' => 'Recommender\'s Email',
      'weight' => '2',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_recommenders_name_1
  $fields['grant-field_recommenders_name_1'] = array(
    'field_name' => 'field_recommenders_name_1',
    'type_name' => 'grant',
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
      'label' => 'Recommender\'s Name',
      'weight' => '1',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_recommenders_phone_numb_1
  $fields['grant-field_recommenders_phone_numb_1'] = array(
    'field_name' => 'field_recommenders_phone_numb_1',
    'type_name' => 'grant',
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
      'label' => 'Recommender\'s Phone Number',
      'weight' => '3',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_recommenders_relationsh_1
  $fields['grant-field_recommenders_relationsh_1'] = array(
    'field_name' => 'field_recommenders_relationsh_1',
    'type_name' => 'grant',
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
      'label' => 'Recommender\'s relationship to you',
      'weight' => '4',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_state
  $fields['grant-field_state'] = array(
    'field_name' => 'field_state',
    'type_name' => 'grant',
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
    'allowed_values' => 'AK
AL
AR
AS
AZ
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
MD
ME
MH
MI
MN
MO
MP
MS
MT
NC
ND
NE
NH
NJ
NM
NV
NY
OH
OK
OR
PA
PR
PW
RI
SC
SD
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
Canada
Other',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(),
      'default_value_php' => 'global $user;
return array( 0 => array(\'value\' => $user->profile_state ? $user->profile_state : \'\'));',
      'label' => 'State',
      'weight' => '-6',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_where_did_you_hear
  $fields['grant-field_where_did_you_hear'] = array(
    'field_name' => 'field_where_did_you_hear',
    'type_name' => 'grant',
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
      'rows' => '1',
      'label' => 'Where did you hear about us?',
      'weight' => '8',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_which_grant
  $fields['grant-field_which_grant'] = array(
    'field_name' => 'field_which_grant',
    'type_name' => 'grant',
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
    'allowed_values' => 'Do Something Seed Grant
Do Something Growth Grant
Club Grant
Club Startup Grant
Be Amazing Grant
Change for the Children Grant
BIC 4 GOOD Grant
Get Well Soon Grant
',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'Which grant are you applying for?',
      'weight' => '4',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_you_are_applying_as
  $fields['grant-field_you_are_applying_as'] = array(
    'field_name' => 'field_you_are_applying_as',
    'type_name' => 'grant',
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
    'allowed_values' => 'an individual
a group',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'You are applying as',
      'weight' => '5',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_your_college_if_applicabl
  $fields['grant-field_your_college_if_applicabl'] = array(
    'field_name' => 'field_your_college_if_applicabl',
    'type_name' => 'grant',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
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
      'rows' => '1',
      'label' => 'College (if applicable)',
      'weight' => '1',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_your_facebook_page_url
  $fields['grant-field_your_facebook_page_url'] = array(
    'field_name' => 'field_your_facebook_page_url',
    'type_name' => 'grant',
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
      'label' => 'Your Facebook Page URL',
      'weight' => '-2',
      'description' => 'Enter either your personal or your project\'s facebook page.  If you\'re selected as a grant winner, we will be using facebook and twitter to help promote your project.',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_your_project
  $fields['grant-field_your_project'] = array(
    'field_name' => 'field_your_project',
    'type_name' => 'grant',
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
    'type' => 'nodereference',
    'required' => '1',
    'multiple' => '0',
    'module' => 'nodereference',
    'active' => '1',
    'referenceable_types' => array(
      'project' => 'project',
      '1in3_abuse' => 0,
      'dsaward_app' => 0,
      '301_redirects' => 0,
      'abc_family' => 0,
      'aspca_grant_app' => 0,
      'action_guide' => 0,
      'botb' => 0,
      'blank_page' => 0,
      'bc_bio_form' => 0,
      'boot_camp_app' => 0,
      'bc_financial_aid' => 0,
      'speed_catcher' => 0,
      'cause' => 0,
      'cause_video' => 0,
      'celebrity_db' => 0,
      'celebs_gone_good' => 0,
      'chatterbox' => 0,
      'club' => 0,
      'club_event' => 0,
      'consulting_program_alumni_form' => 0,
      'ds_award_judging' => 0,
      'awards_archive' => 0,
      'dsaward_nomination' => 0,
      'disaster_grant' => 0,
      'dsaward_rec' => 0,
      'easy_idea' => 0,
      'editorial_notes' => 0,
      'editorial_project' => 0,
      'feature_content' => 0,
      'feedapi_node' => 0,
      'feed_the_need' => 0,
      'final_grant_update' => 0,
      'forum' => 0,
      'friendraiser' => 0,
      'general_grant_app' => 0,
      'grant' => 0,
      'grant_alumni' => 0,
      'grant_application' => 0,
      'grant_judge' => 0,
      'enviro_grant' => 0,
      'whitehouse' => 0,
      'help_ticket' => 0,
      'iyg_kits' => 0,
      'iyg_2010' => 0,
      'increaseyourgreen_report' => 0,
      'increaseyourgreen_signup' => 0,
      'iyg_judge' => 0,
      'info_request' => 0,
      'issue' => 0,
      'grammy_grant' => 0,
      'mdvoltage_application' => 0,
      'multichoice' => 0,
      'yac_app' => 0,
      'page' => 0,
      'plum_grant_app' => 0,
      'poll' => 0,
      'press' => 0,
      'project_teaser' => 0,
      'project_update' => 0,
      'quiz' => 0,
      'rant_rave' => 0,
      '911_registration' => 0,
      'save_our_music' => 0,
      'som_judge' => 0,
      'scroller' => 0,
      'sixflags_scholarships_app' => 0,
      'staff_blog' => 0,
      'story' => 0,
      'troop_letter' => 0,
      'take_action_app' => 0,
      'teach_grants' => 0,
      'tfj_contest_signup' => 0,
      'test_grant_app' => 0,
      'testimonial' => 0,
      'tips_and_tools' => 0,
      'ugc_tips_tools' => 0,
      'bc_financial_aid_grantalumni' => 0,
      'volunteer_opp' => 0,
      'webform' => 0,
      'yacapp' => 0,
      'canned_food' => 0,
      'custom_voting' => 0,
      'youth_act_fair_signup' => 0,
      'youth_grant_app' => 0,
      'grants_database' => 0,
      'ididthis' => 0,
      'twitter' => 0,
    ),
    'advanced_view' => 'projects_current_user',
    'advanced_view_args' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'nid' => '0',
          'error_field' => 'field_your_project][nids',
        ),
      ),
      'default_value_php' => '',
      'label' => 'Your Do Something Project Posting',
      'weight' => 0,
      'description' => 'If you haven\'t posted a project yet, you can submit one <a href="/node/add/project" target="_blank">here</a>.',
      'type' => 'nodereference_select',
      'module' => 'nodereference',
    ),
  );

  // Exported field: field_your_school_deans_name
  $fields['grant-field_your_school_deans_name'] = array(
    'field_name' => 'field_your_school_deans_name',
    'type_name' => 'grant',
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
      'label' => 'Principal/Dean\'s Name',
      'weight' => '2',
      'description' => 'In the case you are selected for the grant, we will be contacting this person to officially notify your school!',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_your_twitter_handle
  $fields['grant-field_your_twitter_handle'] = array(
    'field_name' => 'field_your_twitter_handle',
    'type_name' => 'grant',
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
      'label' => 'Your twitter handle',
      'weight' => '-1',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_zip_code_3
  $fields['grant-field_zip_code_3'] = array(
    'field_name' => 'field_zip_code_3',
    'type_name' => 'grant',
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
return array( 0 => array(\'value\' => $user->profile_zipcode));',
      'rows' => '1',
      'label' => 'Zip Code',
      'weight' => '-5',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_alumni_project
  $fields['grant_alumni-field_alumni_project'] = array(
    'field_name' => 'field_alumni_project',
    'type_name' => 'grant_alumni',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
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
    'type' => 'nodereference',
    'required' => '0',
    'multiple' => '0',
    'module' => 'nodereference',
    'active' => '1',
    'referenceable_types' => array(
      'project' => 'project',
      'action_guide' => 0,
      'blank_page' => 0,
      'cause' => 0,
      'celebs_gone_good' => 0,
      'chatterbox' => 0,
      'club' => 0,
      'club_event' => 0,
      'easy_idea' => 0,
      'feature_content' => 0,
      'feedapi_node' => 0,
      'final_grant_update' => 0,
      'forum' => 0,
      'grant_alumni' => 0,
      'grant_application' => 0,
      'help_ticket' => 0,
      'increaseyourgreen_signup' => 0,
      'issue' => 0,
      'multichoice' => 0,
      'page' => 0,
      'plum_grant_app' => 0,
      'poll' => 0,
      'project_update' => 0,
      'quiz' => 0,
      'rant_rave' => 0,
      'scroller' => 0,
      'story' => 0,
      'test_grant_app' => 0,
      'tips_and_tools' => 0,
      'volunteer_opp' => 0,
      'webform' => 0,
      'grants_database' => 0,
    ),
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(),
      ),
      'default_value_php' => '',
      'label' => 'Enter Name of the Project (already in our system) ',
      'weight' => 0,
      'description' => 'This is an auto complete field. Start typing and the project should pop up. Hopefully... ',
      'type' => 'nodereference_autocomplete',
      'module' => 'nodereference',
    ),
  );

  // Exported field: field_city_2
  $fields['grant_alumni-field_city_2'] = array(
    'field_name' => 'field_city_2',
    'type_name' => 'grant_alumni',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
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
      'rows' => '1',
      'label' => 'City',
      'weight' => 0,
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_contact_information
  $fields['grant_alumni-field_contact_information'] = array(
    'field_name' => 'field_contact_information',
    'type_name' => 'grant_alumni',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'hidden',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'hidden',
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
      'label' => 'Contact Information',
      'weight' => 0,
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_description
  $fields['grant_alumni-field_description'] = array(
    'field_name' => 'field_description',
    'type_name' => 'grant_alumni',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
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
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '1',
    'max_length' => '255',
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
      'label' => 'Short Description',
      'weight' => '-4',
      'description' => 'Suggested maximum length 150 characters.',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_grant_type
  $fields['grant_alumni-field_grant_type'] = array(
    'field_name' => 'field_grant_type',
    'type_name' => 'grant_alumni',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
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
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Seed
Growth
BIC 4 GOOD
Change for the Children
Get Well Soon 
Animal Action
Plum
Take Action
Healthy Living
Spring Into Action
Teach Something
Key Change
After School
Dating Abuse
General Do Something
Disaster Grant
Power in Numbers
Do Something Award Winner
Green Grant
GameStop
Youth to Youth
Smart Driving
Other',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => 'Plum',
        ),
      ),
      'default_value_php' => '',
      'label' => 'Select the grant that you received',
      'weight' => '-3',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_picture
  $fields['grant_alumni-field_picture'] = array(
    'field_name' => 'field_picture',
    'type_name' => 'grant_alumni',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => '111',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => '111',
        'exclude' => 0,
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
      'image_path' => 'pictures/actionguide',
      'custom_alt' => 1,
      'custom_title' => 1,
      'teaser_preset' => NULL,
      'body_preset' => NULL,
      'file_path' => 'pictures/actionguide',
      'use_default_image' => 0,
      'file_extensions' => NULL,
      'max_filesize_per_file' => NULL,
      'max_filesize_per_node' => NULL,
      'label' => 'Picture',
      'weight' => '-4',
      'description' => '580px by 580px max',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Exported field: field_recipient_birthdate
  $fields['grant_alumni-field_recipient_birthdate'] = array(
    'field_name' => 'field_recipient_birthdate',
    'type_name' => 'grant_alumni',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'field_recipient_birthdate_short',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'field_recipient_birthdate_short',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'datestamp',
    'required' => '1',
    'multiple' => '0',
    'module' => 'date',
    'active' => '1',
    'granularity' => array(
      '0' => 'year',
      '1' => 'month',
      '2' => 'day',
    ),
    'field_timezone' => 'America/New_York',
    'timezone_db' => '',
    'tz_handling' => 'none',
    'todate' => '',
    'default_format' => 'field_recipient_birthdate_short',
    'widget' => array(
      'default_value' => 'blank',
      'default_value_custom' => '',
      'default_value2' => 'blank',
      'default_value_custom2' => '',
      'input_format' => 'site-wide',
      'input_format_custom' => '',
      'increment' => '1',
      'text_parts' => array(),
      'year_range' => '-30:+30',
      'label' => 'Recipient\'s Birth Date',
      'weight' => '3',
      'description' => '',
      'type' => 'date_select',
      'module' => 'date',
    ),
  );

  // Exported field: field_state_plain
  $fields['grant_alumni-field_state_plain'] = array(
    'field_name' => 'field_state_plain',
    'type_name' => 'grant_alumni',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
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
    'required' => '1',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'AK
AL
AR
AS
AZ
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
MD
ME
MH
MI
MN
MO
MP
MS
MT
NC
ND
NE
NH
NJ
NM
NV
NY
OH
OK
OR
PA
PR
PW
RI
SC
SD
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
Canada',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'State',
      'weight' => 0,
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_anything_else_awesome_we_
  $fields['grant_alumni_update_form-field_anything_else_awesome_we_'] = array(
    'field_name' => 'field_anything_else_awesome_we_',
    'type_name' => 'grant_alumni_update_form',
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
      'rows' => '10',
      'label' => 'Anything else awesome we should know?',
      'weight' => 0,
      'description' => 'Tell us what you\'ve been up to. Are you at a new job? A new school? Have you won any amazing awards lately? Or gone on a big trip? (* This information will be added to your Grant Alumni page)',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_are_you_still_involved_wi
  $fields['grant_alumni_update_form-field_are_you_still_involved_wi'] = array(
    'field_name' => 'field_are_you_still_involved_wi',
    'type_name' => 'grant_alumni_update_form',
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
      'rows' => '1',
      'label' => 'Are you still involved with your project?',
      'weight' => '-2',
      'description' => 'Tell us what your current involvement is in your original grant-winning project/organization. ',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_give_us_a_brief_update_on
  $fields['grant_alumni_update_form-field_give_us_a_brief_update_on'] = array(
    'field_name' => 'field_give_us_a_brief_update_on',
    'type_name' => 'grant_alumni_update_form',
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
      'rows' => '10',
      'label' => 'Give us a brief update on any projects you\'re currently involved with',
      'weight' => '-1',
      'description' => '(* This information will be added to your Grant Alumni page)',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_plumgrant_email
  $fields['grant_alumni_update_form-field_plumgrant_email'] = array(
    'field_name' => 'field_plumgrant_email',
    'type_name' => 'grant_alumni_update_form',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
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
      'label' => 'Email Address',
      'weight' => '-3',
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_press_clippings_andor_add
  $fields['grant_alumni_update_form-field_press_clippings_andor_add'] = array(
    'field_name' => 'field_press_clippings_andor_add',
    'type_name' => 'grant_alumni_update_form',
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
    'type' => 'filefield',
    'required' => '0',
    'multiple' => '1',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => FALSE,
    'list_default' => 1,
    'description_field' => '',
    'widget' => array(
      'file_extensions' => '',
      'file_path' => '',
      'label' => 'Press Clippings and/or additional documents',
      'weight' => '1',
      'description' => '',
      'type' => 'filefield_widget',
      'module' => 'filefield',
    ),
  );

  // Exported field: field_comments_or_suggestions_f
  $fields['grant_judge-field_comments_or_suggestions_f'] = array(
    'field_name' => 'field_comments_or_suggestions_f',
    'type_name' => 'grant_judge',
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
      'rows' => '10',
      'label' => 'Comments or Suggestions for Grant Applicant',
      'weight' => '9',
      'description' => 'Comments will be sent to the grant applicant to help them improve their projects and grant writing skills.',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_grant_judge_nid
  $fields['grant_judge-field_grant_judge_nid'] = array(
    'field_name' => 'field_grant_judge_nid',
    'type_name' => 'grant_judge',
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
      'rows' => '1',
      'label' => 'Application Node ID',
      'weight' => 0,
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Address');
  t('Anything else awesome we should know?');
  t('Application Node ID');
  t('Are you still involved with your project?');
  t('Believe It');
  t('Birth Date');
  t('Build It');
  t('City');
  t('College (if applicable)');
  t('Comments or Suggestions for Grant Applicant');
  t('Contact Information');
  t('Email');
  t('Email Address');
  t('Enter Name of the Project (already in our system) ');
  t('Give us a brief update on any projects you\'re currently involved with');
  t('High School');
  t('How did you hear about this grant? ');
  t('Is this application complete?');
  t('Name');
  t('Next Steps');
  t('Optional Checkbox');
  t('Other group members\' emails');
  t('Phone Number');
  t('Picture');
  t('Please submit a budget detailing how you would use the grant money');
  t('Press Clippings and/or additional documents');
  t('Principal/Dean\'s Email');
  t('Principal/Dean\'s Name');
  t('Principal/Dean\'s phone number');
  t('Project Dates');
  t('Recipient\'s Birth Date');
  t('Recommendation');
  t('Recommendation (Upload)');
  t('Recommender\'s Email');
  t('Recommender\'s Name');
  t('Recommender\'s Phone Number');
  t('Recommender\'s relationship to you');
  t('See It');
  t('Select the grant that you received');
  t('Short Description');
  t('State');
  t('Where did you hear about us?');
  t('Which grant are you applying for?');
  t('You are applying as');
  t('Your Do Something Project Posting');
  t('Your Facebook Page URL');
  t('Your twitter handle');
  t('Zip Code');
  t('grant_optional_essay_1');

  return $fields;
}
