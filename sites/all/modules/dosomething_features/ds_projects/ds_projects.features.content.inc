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
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'thumbnail_shadowbox',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'emvideo',
    'required' => '0',
    'multiple' => '1',
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

  // Exported field: field_others_involved
  $fields['project-field_others_involved'] = array(
    'field_name' => 'field_others_involved',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '3',
      'parent' => 'group_explain_your_project',
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

  // Exported field: field_project_photo
  $fields['project-field_project_photo'] = array(
    'field_name' => 'field_project_photo',
    'type_name' => 'project',
    'display_settings' => array(
      'weight' => '-4',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'projects_page_thumbnail_linked',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'shadowbox_gallery_field___thumbnail___original',
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
        'format' => 'hidden',
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
      'label' => 'Web site link',
      'weight' => '-4',
      'description' => 'Your web site\'s address, for example <strong>www.dosomething.org</strong>',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_embedded_video
  $fields['project_update-field_embedded_video'] = array(
    'field_name' => 'field_embedded_video',
    'type_name' => 'project_update',
    'display_settings' => array(
      'weight' => '-1',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'video_video',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'shadowbox',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'emvideo',
    'required' => '0',
    'multiple' => '1',
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
        'myspace' => 'myspace',
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
        'sevenload' => 0,
        'spike' => 0,
        'tudou' => 0,
        'zzz_custom_url' => 0,
      ),
      'label' => 'Video (optional)',
      'weight' => '-1',
      'description' => '',
      'type' => 'emvideo_textfields',
      'module' => 'emvideo',
    ),
  );

  // Exported field: field_project
  $fields['project_update-field_project'] = array(
    'field_name' => 'field_project',
    'type_name' => 'project_update',
    'display_settings' => array(
      'weight' => '-4',
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
        'exclude' => 1,
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
      'ds101_action_kit' => 0,
      'dsaward_rec' => 0,
      'easy_idea' => 0,
      'editorial_notes' => 0,
      'editorial_project' => 0,
      'feature_content' => 0,
      'feedapi_node' => 0,
      'feed_the_need' => 0,
      'final_grant_update' => 0,
      'forum' => 0,
      'general_grant_app' => 0,
      'grant' => 0,
      'grant_alumni' => 0,
      'grant_alumni_update_form' => 0,
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
      'lost_found' => 0,
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
      'thumb_wars_bumper_sticker' => 0,
      'thumb_wars_sock_signup' => 0,
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
      'varsity' => 0,
    ),
    'advanced_view' => 'projects_current_user',
    'advanced_view_args' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(),
      ),
      'default_value_php' => '',
      'label' => 'Project',
      'weight' => '-4',
      'description' => 'This an auto complete field.  Start typing in the name of your project. If you haven\'t yet posted a project <a href="/node/add/project"> click here </a>.',
      'type' => 'nodereference_select',
      'module' => 'nodereference',
    ),
  );

  // Exported field: field_project_photo
  $fields['project_update-field_project_photo'] = array(
    'field_name' => 'field_project_photo',
    'type_name' => 'project_update',
    'display_settings' => array(
      'weight' => '-4',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'shadowbox_gallery_field___207x138___original',
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
      'image_path' => 'project_photos',
      'custom_alt' => 0,
      'custom_title' => 1,
      'teaser_preset' => NULL,
      'body_preset' => NULL,
      'file_path' => 'project_photos',
      'use_default_image' => 0,
      'file_extensions' => NULL,
      'max_filesize_per_file' => NULL,
      'max_filesize_per_node' => NULL,
      'label' => 'Project Photo',
      'weight' => '-4',
      'description' => 'Please don\'t use BMP files.
Upload photos that are relevant to your project here.  The first photo will be used on the site when linking to your project, so make sure it\'s good! Maximum photo dimensions are 580px by 580px.  ',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('DoSomething Award Winner?');
  t('How Can Others Help?');
  t('Is this a...');
  t('OPTIONAL - Link DoSomething action guides or fact pages to this project');
  t('Project');
  t('Project Photo');
  t('Related Campaign or Program');
  t('Video (optional)');
  t('Web site link');
  t('What\'s the problem you are trying to solve?');
  t('What\'s your plan of action?');
  t('Why is it important to you?');

  return $fields;
}
