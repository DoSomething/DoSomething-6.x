<?php

/**
 * Implementation of hook_content_default_fields().
 */
function ds_projects_content_default_fields() {
  $fields = array();

  // Exported field: field_dosomething_award_winner
  $fields['project-field_dosomething_award_winner'] = array(
    'field_name' => 'field_dosomething_award_winner',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '-2',
      'parent' => '',
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
    'allowed_values' => 'No
Yes',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'DoSomething Award Winner?',
      'weight' => '-2',
      'description' => '',
      'type' => 'optionwidgets_buttons',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_embedded_video
  $fields['project-field_embedded_video'] = array(
    'field_name' => 'field_embedded_video',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '-4',
      'parent' => '',
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
        'brightcove' => 'brightcove',
        'google' => 'google',
        'metacafe' => 'metacafe',
        'revver' => 'revver',
        'veoh' => 'veoh',
        'vimeo' => 'vimeo',
        'youtube' => 'youtube',
        'dailymotion' => 0,
        'guba' => 0,
        'imeem' => 0,
        'jumpcut' => 0,
        'lastfm' => 0,
        'livevideo' => 0,
        'myspace' => 0,
        'sevenload' => 0,
        'spike' => 0,
        'tudou' => 0,
        'zzz_custom_url' => 0,
      ),
      'label' => 'Video (optional)',
      'weight' => '-4',
      'description' => '',
      'type' => 'emvideo_textfields',
      'module' => 'emvideo',
    ),
  );

  // Exported field: field_essay_believe_it
  $fields['project-field_essay_believe_it'] = array(
    'field_name' => 'field_essay_believe_it',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '1',
      'parent' => 'group_explain_your_project',
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
      'rows' => '5',
      'label' => 'Why is it important to you?',
      'weight' => '1',
      'description' => 'Describe your project/organization and how it addresses the problem(s) above.',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_essay_build_it
  $fields['project-field_essay_build_it'] = array(
    'field_name' => 'field_essay_build_it',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '2',
      'parent' => 'group_explain_your_project',
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
      'rows' => '5',
      'label' => 'What\'s your plan of action?',
      'weight' => '2',
      'description' => 'Describe the steps you will take/took to create your project or organization. What kind of impact have you made?',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_essay_see_it
  $fields['project-field_essay_see_it'] = array(
    'field_name' => 'field_essay_see_it',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => 0,
      'parent' => 'group_explain_your_project',
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
      'rows' => '5',
      'label' => 'What\'s the problem you are trying to solve?',
      'weight' => 0,
      'description' => 'Tell us about the community you are helping and the problem(s) being solved.',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_fb_like_count
  $fields['project-field_fb_like_count'] = array(
    'field_name' => 'field_fb_like_count',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => 0,
      'parent' => '',
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
    'type' => 'number_integer',
    'required' => '0',
    'multiple' => '0',
    'module' => 'number',
    'active' => '1',
    'prefix' => '',
    'suffix' => '',
    'min' => '',
    'max' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'Facebook like count',
      'weight' => 0,
      'description' => '',
      'type' => 'number',
      'module' => 'number',
    ),
  );

  // Exported field: field_hours_volunteered
  $fields['project-field_hours_volunteered'] = array(
    'field_name' => 'field_hours_volunteered',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => 0,
      'parent' => 'group_the_details',
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
    'type' => 'number_integer',
    'required' => '0',
    'multiple' => '0',
    'module' => 'number',
    'active' => '1',
    'prefix' => '',
    'suffix' => '',
    'min' => '',
    'max' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'Total hours volunteered (to date)',
      'weight' => 0,
      'description' => 'how many hours have you spent on this project',
      'type' => 'number',
      'module' => 'number',
    ),
  );

  // Exported field: field_inspired_by_dosomething
  $fields['project-field_inspired_by_dosomething'] = array(
    'field_name' => 'field_inspired_by_dosomething',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '-6',
      'parent' => '',
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
    'type' => 'number_integer',
    'required' => '1',
    'multiple' => '0',
    'module' => 'number',
    'active' => '1',
    'prefix' => '',
    'suffix' => '',
    'min' => '',
    'max' => '',
    'allowed_values' => '1|yes
2|no',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => 'yes',
        ),
      ),
      'default_value_php' => '',
      'label' => 'Did DoSomething.org’s content or programs inspire you to start, or help you to grow your project? ',
      'weight' => '-6',
      'description' => '',
      'type' => 'optionwidgets_buttons',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_num_people_impacted
  $fields['project-field_num_people_impacted'] = array(
    'field_name' => 'field_num_people_impacted',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '7',
      'parent' => 'group_project_numbers',
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
    'type' => 'number_integer',
    'required' => '1',
    'multiple' => '0',
    'module' => 'number',
    'active' => '1',
    'prefix' => '',
    'suffix' => '',
    'min' => '',
    'max' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '0',
        ),
      ),
      'default_value_php' => '',
      'label' => 'How many people has your project helped?  ',
      'weight' => '7',
      'description' => '(i.e. Number of people you provided food for through your collection, etc.) Use digits, for example: "20", "100"',
      'type' => 'number',
      'module' => 'number',
    ),
  );

  // Exported field: field_num_people_inspired
  $fields['project-field_num_people_inspired'] = array(
    'field_name' => 'field_num_people_inspired',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '6',
      'parent' => 'group_project_numbers',
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
    'type' => 'number_integer',
    'required' => '1',
    'multiple' => '0',
    'module' => 'number',
    'active' => '1',
    'prefix' => '',
    'suffix' => '',
    'min' => '',
    'max' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '0',
        ),
      ),
      'default_value_php' => '',
      'label' => 'How many people have you inspired to take action?',
      'weight' => '6',
      'description' => '(i.e.  Number of people who donated canned goods to your canned food drive, etc.)',
      'type' => 'number',
      'module' => 'number',
    ),
  );

  // Exported field: field_num_people_involved
  $fields['project-field_num_people_involved'] = array(
    'field_name' => 'field_num_people_involved',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '5',
      'parent' => 'group_project_numbers',
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
    'type' => 'number_integer',
    'required' => '1',
    'multiple' => '0',
    'module' => 'number',
    'active' => '1',
    'prefix' => '',
    'suffix' => '',
    'min' => '',
    'max' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '0',
        ),
      ),
      'default_value_php' => '',
      'label' => 'How many people are directly involved in your project? ',
      'weight' => '5',
      'description' => '(i.e.  5 staff and 25 volunteers for a total of 30, or 35 club members.)<br/>
Use numbers only (no text).',
      'type' => 'number',
      'module' => 'number',
    ),
  );

  // Exported field: field_others_involved
  $fields['project-field_others_involved'] = array(
    'field_name' => 'field_others_involved',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '3',
      'parent' => 'group_explain_your_project',
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
    'text_processing' => '1',
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
      'label' => 'How Can Others Help?',
      'weight' => '3',
      'description' => '',
      'type' => 'text_textarea',
      'module' => 'text',
    ),
  );

  // Exported field: field_project_age
  $fields['project-field_project_age'] = array(
    'field_name' => 'field_project_age',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '-2',
      'parent' => '',
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
    'type' => 'number_integer',
    'required' => '0',
    'multiple' => '0',
    'module' => 'number',
    'active' => '1',
    'prefix' => '',
    'suffix' => '',
    'min' => '',
    'max' => '',
    'allowed_values' => '7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(),
      'default_value_php' => 'return array( 0 => array(\'value\' => \'\'));',
      'label' => 'Current age (NOTE: this section is for people 25 and younger)',
      'weight' => '-2',
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_project_photo
  $fields['project-field_project_photo'] = array(
    'field_name' => 'field_project_photo',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '-4',
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'shadowbox_gallery_nid___projects_page_thumbnail___original',
        'exclude' => 0,
      ),
      'Teaser' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
      'Full' => array(
        'format' => 'image_plain',
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
      'label' => 'Project Photo',
      'weight' => '-4',
      'description' => '<p> Do Something reserves the right to use photographs uploaded to the site in order to promote and publicize itself and its mission. If you have questions email admin@dosomething.org</p>',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Exported field: field_related_action_guide
  $fields['project-field_related_action_guide'] = array(
    'field_name' => 'field_related_action_guide',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '-1',
      'parent' => '',
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
    'multiple' => '1',
    'module' => 'nodereference',
    'active' => '1',
    'referenceable_types' => array(
      'action_guide' => 'action_guide',
      'tips_and_tools' => 'tips_and_tools',
      '1in3_abuse' => 0,
      'dsaward_app' => 0,
      '301_redirects' => 0,
      'abc_family' => 0,
      'aspca_grant_app' => 0,
      'grant_judge' => 0,
      'blank_page' => 0,
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
      'ds_award_judging' => 0,
      'awards_archive' => 0,
      'dsaward_nomination' => 0,
      'disaster_grant' => 0,
      'dsaward_rec' => 0,
      'easy_idea' => 0,
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
      'enviro_grant' => 0,
      'whitehouse' => 0,
      'help_ticket' => 0,
      'increaseyourgreen_report' => 0,
      'increaseyourgreen_signup' => 0,
      'iyg_judge' => 0,
      'issue' => 0,
      'grammy_grant' => 0,
      'mdvoltage_application' => 0,
      'multichoice' => 0,
      'yac_app' => 0,
      'page' => 0,
      'plum_grant_app' => 0,
      'poll' => 0,
      'press' => 0,
      'project' => 0,
      'project_teaser' => 0,
      'project_update' => 0,
      'quiz' => 0,
      'rant_rave' => 0,
      '911_registration' => 0,
      'save_our_music' => 0,
      'som_judge' => 0,
      'scroller' => 0,
      'story' => 0,
      'take_action_app' => 0,
      'teach_grants' => 0,
      'tfj_contest_signup' => 0,
      'test_grant_app' => 0,
      'testimonial' => 0,
      'ugc_tips_tools' => 0,
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
    'advanced_view' => '--',
    'advanced_view_args' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(),
      ),
      'default_value_php' => '',
      'label' => 'OPTIONAL - Link DoSomething action guides or fact pages to this project',
      'weight' => '-1',
      'description' => 'This will help connect your amazing project to more resources that will inspire people to take action! Just start typing in the title of the action guide or fact page - the field will automatically complete the title if it is in our system',
      'type' => 'nodereference_autocomplete',
      'module' => 'nodereference',
    ),
  );

  // Exported field: field_related_campaign
  $fields['project-field_related_campaign'] = array(
    'field_name' => 'field_related_campaign',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '-1',
      'parent' => '',
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
    'allowed_values' => 'Boot Camp Attendee
DoSomething 101
Feed the Need
Increase Your Green
Save Our Music
Teens for Jeans
Thumb wars',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'Related Campaign or Program',
      'weight' => '-1',
      'description' => 'If you’re participating in one of the Do Something monthly cause campaigns let us know and pick it here!',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_type_of_project
  $fields['project-field_type_of_project'] = array(
    'field_name' => 'field_type_of_project',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '-7',
      'parent' => '',
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
    'allowed_values' => 'volunteer experience
project idea 
ongoing project 
completed project',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'Is this a...',
      'weight' => '-7',
      'description' => 'please select the most appropriate one, thanks!',
      'type' => 'optionwidgets_buttons',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_website_link
  $fields['project-field_website_link'] = array(
    'field_name' => 'field_website_link',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '-4',
      'parent' => '',
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
      'label' => 'Web site link',
      'weight' => '-4',
      'description' => 'Your web site\'s address, for example <strong>www.dosomething.org</strong>',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Current age (NOTE: this section is for people 25 and younger)');
  t('Did DoSomething.org’s content or programs inspire you to start, or help you to grow your project? ');
  t('DoSomething Award Winner?');
  t('Facebook like count');
  t('How Can Others Help?');
  t('How many people are directly involved in your project? ');
  t('How many people has your project helped?  ');
  t('How many people have you inspired to take action?');
  t('Is this a...');
  t('OPTIONAL - Link DoSomething action guides or fact pages to this project');
  t('Project Photo');
  t('Related Campaign or Program');
  t('Total hours volunteered (to date)');
  t('Video (optional)');
  t('Web site link');
  t('What\'s the problem you are trying to solve?');
  t('What\'s your plan of action?');
  t('Why is it important to you?');

  return $fields;
}
