<?php

/**
 * Implementation of hook_views_default_views().
 */
function ds_projects_views_default_views() {
  $views = array();

  // Exported view: projects_search
  $view = new view;
  $view->name = 'projects_search';
  $view->description = 'Projects Search';
  $view->tag = 'projects';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('relationships', array(
    'field_project_photo_fid' => array(
      'label' => 'Photos',
      'required' => 1,
      'delta' => '0',
      'id' => 'field_project_photo_fid',
      'table' => 'node_data_field_project_photo',
      'field' => 'field_project_photo_fid',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('fields', array(
    'field_project_photo_fid' => array(
      'label' => '',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'html' => 0,
        'strip_tags' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'link_to_node' => 0,
      'label_type' => 'none',
      'format' => 'projects_page_thumbnail_linked',
      'multiple' => array(
        'group' => 1,
        'multiple_number' => '1',
        'multiple_from' => '0',
        'multiple_reversed' => 0,
      ),
      'exclude' => 0,
      'id' => 'field_project_photo_fid',
      'table' => 'node_data_field_project_photo',
      'field' => 'field_project_photo_fid',
      'relationship' => 'none',
    ),
    'title' => array(
      'label' => '',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 0,
        'max_length' => '',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'html' => 0,
        'strip_tags' => 0,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'link_to_node' => 1,
      'exclude' => 0,
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'relationship' => 'none',
    ),
    'field_essay_see_it_value' => array(
      'label' => '',
      'alter' => array(
        'alter_text' => 0,
        'text' => '',
        'make_link' => 0,
        'path' => '',
        'link_class' => '',
        'alt' => '',
        'prefix' => '',
        'suffix' => '',
        'target' => '',
        'help' => '',
        'trim' => 1,
        'max_length' => '150',
        'word_boundary' => 1,
        'ellipsis' => 1,
        'html' => 1,
        'strip_tags' => 1,
      ),
      'empty' => '',
      'hide_empty' => 0,
      'empty_zero' => 0,
      'link_to_node' => 0,
      'label_type' => 'none',
      'format' => 'default',
      'multiple' => array(
        'group' => TRUE,
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_reversed' => FALSE,
      ),
      'exclude' => 0,
      'id' => 'field_essay_see_it_value',
      'table' => 'node_data_field_essay_see_it',
      'field' => 'field_essay_see_it_value',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('sorts', array(
    'last_updated' => array(
      'order' => 'DESC',
      'granularity' => 'second',
      'id' => 'last_updated',
      'table' => 'node_comment_statistics',
      'field' => 'last_updated',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('arguments', array(
    'null' => array(
      'default_action' => 'ignore',
      'style_plugin' => 'default_summary',
      'style_options' => array(),
      'wildcard' => 'all',
      'wildcard_substitution' => 'All',
      'title' => '',
      'breadcrumb' => '',
      'default_argument_type' => 'fixed',
      'default_argument' => '',
      'validate_type' => 'none',
      'validate_fail' => 'not found',
      'must_not_be' => 0,
      'id' => 'null',
      'table' => 'views',
      'field' => 'null',
      'validate_user_argument_type' => 'uid',
      'validate_user_roles' => array(
        '2' => 0,
        '3' => 0,
        '8' => 0,
        '7' => 0,
        '10' => 0,
        '13' => 0,
        '9' => 0,
        '5' => 0,
        '4' => 0,
        '11' => 0,
        '14' => 0,
        '6' => 0,
        '12' => 0,
      ),
      'relationship' => 'none',
      'default_options_div_prefix' => '',
      'default_argument_fixed' => '',
      'default_argument_user' => 0,
      'default_argument_php' => '',
      'validate_argument_node_type' => array(
        'poll' => 0,
        'chatterbox' => 0,
        'reporter' => 0,
        'cause' => 0,
        'forum' => 0,
        '1in3_abuse_old' => 0,
        '301_redirects' => 0,
        '911_registration' => 0,
        'abc_family' => 0,
        'action_guide' => 0,
        'action_guide_submission' => 0,
        'api_key' => 0,
        'aspca_grant_app' => 0,
        'awards_archive' => 0,
        'bc_bio_form' => 0,
        'bc_financial_aid' => 0,
        'bc_financial_aid_grantalumni' => 0,
        'blank_page' => 0,
        'bootcampx' => 0,
        'boot_camp_app' => 0,
        'botb' => 0,
        'campaign_bfb_2011' => 0,
        'campaign_ebd_2011' => 0,
        'campaign_gys_2011' => 0,
        'campaign_shellproj' => 0,
        'campaign_tfj_2011' => 0,
        'canned_food' => 0,
        'cause_video' => 0,
        'celebrity_db' => 0,
        'celebs_gone_good' => 0,
        'club' => 0,
        'club_event' => 0,
        'club_materials' => 0,
        'college_survey' => 0,
        'consulting_program_alumni_form' => 0,
        'custom_voting' => 0,
        'disaster_grant' => 0,
        'ds101_action_kit' => 0,
        'dsaward_app' => 0,
        'dsaward_nomination' => 0,
        'dsaward_rec' => 0,
        'dsu_askprof' => 0,
        'dsu_guides' => 0,
        'dsu_materials' => 0,
        'ds_award_judging' => 0,
        'easy_idea' => 0,
        'ebd_signup' => 0,
        'editorial_notes' => 0,
        'editorial_project' => 0,
        'enviro_grant' => 0,
        'feature_content' => 0,
        'feedapi_node' => 0,
        'feed_the_need' => 0,
        'final_grant_update' => 0,
        'general_grant_app' => 0,
        'grammy_grant' => 0,
        'grant' => 0,
        'grants_database' => 0,
        'grant_alumni' => 0,
        'grant_alumni_update_form' => 0,
        'grant_application' => 0,
        'grant_judge' => 0,
        'gys_2011' => 0,
        'healthy_schools' => 0,
        'healthy_schools_report' => 0,
        'help_ticket' => 0,
        'hp_art' => 0,
        'ididthis' => 0,
        'increaseyourgreen_report' => 0,
        'increaseyourgreen_signup' => 0,
        'info_request' => 0,
        'issue' => 0,
        'iyg_2010' => 0,
        'iyg_judge' => 0,
        'iyg_kits' => 0,
        'jet_sweeptakes' => 0,
        'lost_found' => 0,
        'mdvoltage_application' => 0,
        'page' => 0,
        'pitch_grant' => 0,
        'plum_grant_app' => 0,
        'press' => 0,
        'project' => 0,
        'project_teaser' => 0,
        'project_update' => 0,
        'rant_rave' => 0,
        'save_our_music' => 0,
        'scholarships_att' => 0,
        'scroller' => 0,
        'sixflags_scholarships_app' => 0,
        'som_judge' => 0,
        'speed_catcher' => 0,
        'staff_blog' => 0,
        'staples_design' => 0,
        'story' => 0,
        'surge_scholarship' => 0,
        'tackle_hunger' => 0,
        'take_action_app' => 0,
        'teach_grants' => 0,
        'testimonial' => 0,
        'test_grant_app' => 0,
        'tfj_contest_signup' => 0,
        'throwaway_type' => 0,
        'thumb_wars_bumper_sticker' => 0,
        'thumb_wars_sock_signup' => 0,
        'thumb_wars_sticker_order' => 0,
        'tips_and_tools' => 0,
        'troop_letter' => 0,
        'twitter' => 0,
        'ugc_tips_tools' => 0,
        'varsity' => 0,
        'whitehouse' => 0,
        'yacapp' => 0,
        'yac_app' => 0,
        'youth_act_fair_signup' => 0,
        'youth_grant_app' => 0,
      ),
      'validate_argument_node_access' => 0,
      'validate_argument_nid_type' => 'nid',
      'validate_argument_vocabulary' => array(
        '1' => 0,
        '9' => 0,
        '5' => 0,
        '6' => 0,
        '11' => 0,
        '18' => 0,
        '17' => 0,
        '15' => 0,
        '4' => 0,
        '16' => 0,
        '2' => 0,
        '3' => 0,
      ),
      'validate_argument_type' => 'tid',
      'validate_argument_transform' => 0,
      'validate_user_restrict_roles' => 0,
      'validate_argument_is_member' => 'OG_VIEWS_DO_NOT_VALIDATE_MEMBERSHIP',
      'validate_argument_group_node_type' => array(
        'club' => 0,
      ),
      'validate_argument_php' => '',
    ),
    'name' => array(
      'default_action' => 'ignore',
      'style_plugin' => 'default_summary',
      'style_options' => array(),
      'wildcard' => '*',
      'wildcard_substitution' => 'All',
      'title' => '',
      'breadcrumb' => '',
      'default_argument_type' => 'fixed',
      'default_argument' => '',
      'validate_type' => 'taxonomy_term',
      'validate_fail' => 'ignore',
      'glossary' => 0,
      'limit' => '0',
      'case' => 'none',
      'path_case' => 'none',
      'transform_dash' => 0,
      'add_table' => 0,
      'require_value' => 0,
      'id' => 'name',
      'table' => 'term_data',
      'field' => 'name',
      'validate_user_argument_type' => 'uid',
      'validate_user_roles' => array(
        '2' => 0,
        '3' => 0,
        '8' => 0,
        '7' => 0,
        '10' => 0,
        '13' => 0,
        '9' => 0,
        '5' => 0,
        '4' => 0,
        '11' => 0,
        '14' => 0,
        '6' => 0,
        '12' => 0,
      ),
      'relationship' => 'none',
      'default_options_div_prefix' => '',
      'default_argument_fixed' => '',
      'default_argument_user' => 0,
      'default_argument_php' => '',
      'validate_argument_node_type' => array(
        'poll' => 0,
        'chatterbox' => 0,
        'reporter' => 0,
        'cause' => 0,
        'forum' => 0,
        '1in3_abuse_old' => 0,
        '301_redirects' => 0,
        '911_registration' => 0,
        'abc_family' => 0,
        'action_guide' => 0,
        'action_guide_submission' => 0,
        'api_key' => 0,
        'aspca_grant_app' => 0,
        'awards_archive' => 0,
        'bc_bio_form' => 0,
        'bc_financial_aid' => 0,
        'bc_financial_aid_grantalumni' => 0,
        'blank_page' => 0,
        'bootcampx' => 0,
        'boot_camp_app' => 0,
        'botb' => 0,
        'campaign_bfb_2011' => 0,
        'campaign_ebd_2011' => 0,
        'campaign_gys_2011' => 0,
        'campaign_shellproj' => 0,
        'campaign_tfj_2011' => 0,
        'canned_food' => 0,
        'cause_video' => 0,
        'celebrity_db' => 0,
        'celebs_gone_good' => 0,
        'club' => 0,
        'club_event' => 0,
        'club_materials' => 0,
        'college_survey' => 0,
        'consulting_program_alumni_form' => 0,
        'custom_voting' => 0,
        'disaster_grant' => 0,
        'ds101_action_kit' => 0,
        'dsaward_app' => 0,
        'dsaward_nomination' => 0,
        'dsaward_rec' => 0,
        'dsu_askprof' => 0,
        'dsu_guides' => 0,
        'dsu_materials' => 0,
        'ds_award_judging' => 0,
        'easy_idea' => 0,
        'ebd_signup' => 0,
        'editorial_notes' => 0,
        'editorial_project' => 0,
        'enviro_grant' => 0,
        'feature_content' => 0,
        'feedapi_node' => 0,
        'feed_the_need' => 0,
        'final_grant_update' => 0,
        'general_grant_app' => 0,
        'grammy_grant' => 0,
        'grant' => 0,
        'grants_database' => 0,
        'grant_alumni' => 0,
        'grant_alumni_update_form' => 0,
        'grant_application' => 0,
        'grant_judge' => 0,
        'gys_2011' => 0,
        'healthy_schools' => 0,
        'healthy_schools_report' => 0,
        'help_ticket' => 0,
        'hp_art' => 0,
        'ididthis' => 0,
        'increaseyourgreen_report' => 0,
        'increaseyourgreen_signup' => 0,
        'info_request' => 0,
        'issue' => 0,
        'iyg_2010' => 0,
        'iyg_judge' => 0,
        'iyg_kits' => 0,
        'jet_sweeptakes' => 0,
        'lost_found' => 0,
        'mdvoltage_application' => 0,
        'page' => 0,
        'pitch_grant' => 0,
        'plum_grant_app' => 0,
        'press' => 0,
        'project' => 0,
        'project_teaser' => 0,
        'project_update' => 0,
        'rant_rave' => 0,
        'save_our_music' => 0,
        'scholarships_att' => 0,
        'scroller' => 0,
        'sixflags_scholarships_app' => 0,
        'som_judge' => 0,
        'speed_catcher' => 0,
        'staff_blog' => 0,
        'staples_design' => 0,
        'story' => 0,
        'surge_scholarship' => 0,
        'tackle_hunger' => 0,
        'take_action_app' => 0,
        'teach_grants' => 0,
        'testimonial' => 0,
        'test_grant_app' => 0,
        'tfj_contest_signup' => 0,
        'throwaway_type' => 0,
        'thumb_wars_bumper_sticker' => 0,
        'thumb_wars_sock_signup' => 0,
        'thumb_wars_sticker_order' => 0,
        'tips_and_tools' => 0,
        'troop_letter' => 0,
        'twitter' => 0,
        'ugc_tips_tools' => 0,
        'varsity' => 0,
        'whitehouse' => 0,
        'yacapp' => 0,
        'yac_app' => 0,
        'youth_act_fair_signup' => 0,
        'youth_grant_app' => 0,
      ),
      'validate_argument_node_access' => 0,
      'validate_argument_nid_type' => 'nid',
      'validate_argument_vocabulary' => array(
        '5' => 5,
        '1' => 0,
        '9' => 0,
        '6' => 0,
        '11' => 0,
        '18' => 0,
        '17' => 0,
        '15' => 0,
        '4' => 0,
        '16' => 0,
        '2' => 0,
        '3' => 0,
      ),
      'validate_argument_type' => 'name',
      'validate_argument_transform' => 0,
      'validate_user_restrict_roles' => 0,
      'validate_argument_is_member' => 'OG_VIEWS_DO_NOT_VALIDATE_MEMBERSHIP',
      'validate_argument_group_node_type' => array(
        'club' => 0,
      ),
      'validate_argument_php' => '',
    ),
  ));
  $handler->override_option('filters', array(
    'status' => array(
      'operator' => '=',
      'value' => '1',
      'group' => '0',
      'exposed' => FALSE,
      'expose' => array(
        'operator' => FALSE,
        'label' => '',
      ),
      'id' => 'status',
      'table' => 'node',
      'field' => 'status',
      'relationship' => 'none',
    ),
    'type' => array(
      'operator' => 'in',
      'value' => array(
        'project' => 'project',
      ),
      'group' => '0',
      'exposed' => FALSE,
      'expose' => array(
        'operator' => FALSE,
        'label' => '',
      ),
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('access', array(
    'type' => 'none',
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
  $handler->override_option('css_class', 'view-projects-list');
  $handler->override_option('use_pager', '1');
  $handler->override_option('distinct', 1);
  $handler = $view->new_display('panel_pane', 'Content pane', 'panel_pane_1');
  $handler->override_option('pane_title', '');
  $handler->override_option('pane_description', '');
  $handler->override_option('pane_category', array(
    'name' => 'View panes',
    'weight' => 0,
  ));
  $handler->override_option('allow', array(
    'use_pager' => FALSE,
    'items_per_page' => FALSE,
    'offset' => FALSE,
    'link_to_view' => FALSE,
    'more_link' => FALSE,
    'path_override' => FALSE,
    'title_override' => FALSE,
    'exposed_form' => FALSE,
    'fields_override' => FALSE,
  ));
  $handler->override_option('argument_input', array(
    'null' => array(
      'type' => 'panel',
      'context' => 'terms.tids',
      'context_optional' => 0,
      'panel' => '0',
      'fixed' => '',
      'label' => 'Global: Null',
    ),
    'name' => array(
      'type' => 'panel',
      'context' => 'terms.tids',
      'context_optional' => 0,
      'panel' => '1',
      'fixed' => '',
      'label' => 'Taxonomy: Term',
    ),
  ));
  $handler->override_option('link_to_view', 0);
  $handler->override_option('inherit_panels_path', 0);
  $handler = $view->new_display('panel_pane', 'recent projects', 'panel_pane_2');
  $handler->override_option('header', '<?
drupal_add_js(\'nd/projects/jquery.cycle.lite.1.0.js\');
drupal_add_js(path_to_theme() . \'/js/projects.js\'); ?>

<a href="/projects-search"><h2 class="header">Recently Added Projects</h2></a>');
  $handler->override_option('header_format', '2');
  $handler->override_option('header_empty', 0);
  $handler->override_option('footer', '<div class="controls"><a href="#" id="recent-prev">prev</a> | <a href="#" id="recent-next">next</a></div>');
  $handler->override_option('footer_format', '2');
  $handler->override_option('footer_empty', 0);
  $handler->override_option('items_per_page', 4);
  $handler->override_option('use_pager', '0');
  $handler->override_option('style_plugin', 'list');
  $handler->override_option('style_options', array(
    'grouping' => '',
    'type' => 'ul',
  ));
  $handler->override_option('pane_title', 'projects_search - recent projects');
  $handler->override_option('pane_description', '');
  $handler->override_option('pane_category', array(
    'name' => 'View panes',
    'weight' => 0,
  ));
  $handler->override_option('allow', array(
    'use_pager' => FALSE,
    'items_per_page' => FALSE,
    'offset' => FALSE,
    'link_to_view' => FALSE,
    'more_link' => FALSE,
    'path_override' => FALSE,
    'title_override' => FALSE,
    'exposed_form' => FALSE,
    'fields_override' => FALSE,
  ));
  $handler->override_option('argument_input', array());
  $handler->override_option('link_to_view', 0);
  $handler->override_option('inherit_panels_path', 0);
  $handler = $view->new_display('block', 'editorial-projects', 'block_1');
  $handler->override_option('relationships', array());
  $handler->override_option('arguments', array(
    'nid' => array(
      'default_action' => 'not found',
      'style_plugin' => 'default_summary',
      'style_options' => array(),
      'wildcard' => 'all',
      'wildcard_substitution' => 'All',
      'title' => '',
      'breadcrumb' => '',
      'default_argument_type' => 'fixed',
      'default_argument' => '',
      'validate_type' => 'none',
      'validate_fail' => 'not found',
      'break_phrase' => 1,
      'not' => 0,
      'id' => 'nid',
      'table' => 'node',
      'field' => 'nid',
      'validate_user_argument_type' => 'uid',
      'validate_user_roles' => array(
        '2' => 0,
        '3' => 0,
        '8' => 0,
        '7' => 0,
        '10' => 0,
        '13' => 0,
        '9' => 0,
        '5' => 0,
        '4' => 0,
        '11' => 0,
        '15' => 0,
        '14' => 0,
        '6' => 0,
        '12' => 0,
      ),
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
      'default_options_div_prefix' => '',
      'default_argument_fixed' => '',
      'default_argument_user' => 0,
      'default_argument_php' => '',
      'validate_argument_node_type' => array(
        'poll' => 0,
        'chatterbox' => 0,
        'reporter' => 0,
        'cause' => 0,
        'forum' => 0,
        '1in3_abuse_old' => 0,
        '301_redirects' => 0,
        '911_registration' => 0,
        'abc_family' => 0,
        'action_guide' => 0,
        'action_guide_submission' => 0,
        'api_key' => 0,
        'aspca_grant_app' => 0,
        'awards_archive' => 0,
        'bc_bio_form' => 0,
        'bc_financial_aid' => 0,
        'bc_financial_aid_grantalumni' => 0,
        'blank_page' => 0,
        'bootcampx' => 0,
        'boot_camp_app' => 0,
        'botb' => 0,
        'campaign_bfb_2011' => 0,
        'campaign_ebd_2011' => 0,
        'campaign_gys_2011' => 0,
        'campaign_shellproj' => 0,
        'campaign_tfj_2011' => 0,
        'canned_food' => 0,
        'cause_video' => 0,
        'celebrity_db' => 0,
        'celebs_gone_good' => 0,
        'club' => 0,
        'club_event' => 0,
        'club_materials' => 0,
        'college_survey' => 0,
        'consulting_program_alumni_form' => 0,
        'custom_voting' => 0,
        'disaster_grant' => 0,
        'ds101_action_kit' => 0,
        'dsaward_app' => 0,
        'dsaward_nomination' => 0,
        'dsaward_rec' => 0,
        'dsu_askprof' => 0,
        'dsu_guides' => 0,
        'dsu_materials' => 0,
        'ds_award_judging' => 0,
        'easy_idea' => 0,
        'ebd_signup' => 0,
        'editorial_notes' => 0,
        'editorial_project' => 0,
        'enviro_grant' => 0,
        'feedapi_node' => 0,
        'feed_the_need' => 0,
        'final_grant_update' => 0,
        'general_grant_app' => 0,
        'grammy_grant' => 0,
        'grant' => 0,
        'grants_database' => 0,
        'grant_alumni' => 0,
        'grant_alumni_update_form' => 0,
        'grant_application' => 0,
        'grant_judge' => 0,
        'gys_2011' => 0,
        'healthy_schools' => 0,
        'healthy_schools_report' => 0,
        'help_ticket' => 0,
        'hp_art' => 0,
        'ididthis' => 0,
        'increaseyourgreen_report' => 0,
        'increaseyourgreen_signup' => 0,
        'info_request' => 0,
        'issue' => 0,
        'iyg_2010' => 0,
        'iyg_judge' => 0,
        'iyg_kits' => 0,
        'jet_sweeptakes' => 0,
        'lost_found' => 0,
        'mdvoltage_application' => 0,
        'page' => 0,
        'pitch_grant' => 0,
        'plum_grant_app' => 0,
        'press' => 0,
        'project' => 0,
        'project_teaser' => 0,
        'project_update' => 0,
        'rant_rave' => 0,
        'save_our_music' => 0,
        'scholarships_att' => 0,
        'scroller' => 0,
        'sixflags_scholarships_app' => 0,
        'som_judge' => 0,
        'speed_catcher' => 0,
        'staff_blog' => 0,
        'staples_design' => 0,
        'story' => 0,
        'surge_scholarship' => 0,
        'tackle_hunger' => 0,
        'take_action_app' => 0,
        'teach_grants' => 0,
        'testimonial' => 0,
        'tfj_contest_signup' => 0,
        'throwaway_type' => 0,
        'thumb_wars_bumper_sticker' => 0,
        'thumb_wars_sock_signup' => 0,
        'thumb_wars_sticker_order' => 0,
        'tips_and_tools' => 0,
        'troop_letter' => 0,
        'ugc_tips_tools' => 0,
        'varsity' => 0,
        'whitehouse' => 0,
        'yacapp' => 0,
        'yac_app' => 0,
        'youth_act_fair_signup' => 0,
        'youth_grant_app' => 0,
      ),
      'validate_argument_node_access' => 0,
      'validate_argument_nid_type' => 'nid',
      'validate_argument_vocabulary' => array(
        '1' => 0,
        '9' => 0,
        '5' => 0,
        '6' => 0,
        '11' => 0,
        '18' => 0,
        '17' => 0,
        '15' => 0,
        '4' => 0,
        '16' => 0,
        '2' => 0,
        '3' => 0,
      ),
      'validate_argument_type' => 'tid',
      'validate_argument_transform' => 0,
      'validate_user_restrict_roles' => 0,
      'validate_argument_is_member' => 'OG_VIEWS_DO_NOT_VALIDATE_MEMBERSHIP',
      'validate_argument_group_node_type' => array(
        'club' => 0,
      ),
      'validate_argument_php' => '',
    ),
  ));
  $handler->override_option('block_description', '');
  $handler->override_option('block_caching', -1);
  $handler = $view->new_display('block', 'Club projects', 'block_2');
  $handler->override_option('relationships', array());
  $handler->override_option('arguments', array(
    'group_nid' => array(
      'default_action' => 'ignore',
      'style_plugin' => 'default_summary',
      'style_options' => array(),
      'wildcard' => 'all',
      'wildcard_substitution' => 'All',
      'title' => '',
      'breadcrumb' => '',
      'default_argument_type' => 'fixed',
      'default_argument' => '',
      'validate_type' => 'none',
      'validate_fail' => 'not found',
      'break_phrase' => 0,
      'not' => 0,
      'id' => 'group_nid',
      'table' => 'og_ancestry',
      'field' => 'group_nid',
      'validate_user_argument_type' => 'uid',
      'validate_user_roles' => array(
        '2' => 0,
        '3' => 0,
        '8' => 0,
        '7' => 0,
        '10' => 0,
        '13' => 0,
        '9' => 0,
        '5' => 0,
        '4' => 0,
        '11' => 0,
        '15' => 0,
        '14' => 0,
        '6' => 0,
        '12' => 0,
      ),
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
      'default_options_div_prefix' => '',
      'default_argument_fixed' => '',
      'default_argument_user' => 0,
      'default_argument_php' => '',
      'validate_argument_node_type' => array(
        'poll' => 0,
        'chatterbox' => 0,
        'reporter' => 0,
        'cause' => 0,
        'forum' => 0,
        '1in3_abuse_old' => 0,
        '301_redirects' => 0,
        '911_registration' => 0,
        'abc_family' => 0,
        'action_guide' => 0,
        'action_guide_submission' => 0,
        'api_key' => 0,
        'aspca_grant_app' => 0,
        'awards_archive' => 0,
        'bc_bio_form' => 0,
        'bc_financial_aid' => 0,
        'bc_financial_aid_grantalumni' => 0,
        'blank_page' => 0,
        'bootcampx' => 0,
        'boot_camp_app' => 0,
        'botb' => 0,
        'campaign_bfb_2011' => 0,
        'campaign_ebd_2011' => 0,
        'campaign_gys_2011' => 0,
        'campaign_shellproj' => 0,
        'campaign_tfj_2011' => 0,
        'canned_food' => 0,
        'cause_video' => 0,
        'celebrity_db' => 0,
        'celebs_gone_good' => 0,
        'club' => 0,
        'club_event' => 0,
        'club_materials' => 0,
        'college_survey' => 0,
        'consulting_program_alumni_form' => 0,
        'custom_voting' => 0,
        'disaster_grant' => 0,
        'ds101_action_kit' => 0,
        'dsaward_app' => 0,
        'dsaward_nomination' => 0,
        'dsaward_rec' => 0,
        'dsu_askprof' => 0,
        'dsu_guides' => 0,
        'dsu_materials' => 0,
        'ds_award_judging' => 0,
        'easy_idea' => 0,
        'ebd_signup' => 0,
        'editorial_notes' => 0,
        'editorial_project' => 0,
        'enviro_grant' => 0,
        'feedapi_node' => 0,
        'feed_the_need' => 0,
        'final_grant_update' => 0,
        'general_grant_app' => 0,
        'grammy_grant' => 0,
        'grant' => 0,
        'grants_database' => 0,
        'grant_alumni' => 0,
        'grant_alumni_update_form' => 0,
        'grant_application' => 0,
        'grant_judge' => 0,
        'gys_2011' => 0,
        'healthy_schools' => 0,
        'healthy_schools_report' => 0,
        'help_ticket' => 0,
        'hp_art' => 0,
        'ididthis' => 0,
        'increaseyourgreen_report' => 0,
        'increaseyourgreen_signup' => 0,
        'info_request' => 0,
        'issue' => 0,
        'iyg_2010' => 0,
        'iyg_judge' => 0,
        'iyg_kits' => 0,
        'jet_sweeptakes' => 0,
        'lost_found' => 0,
        'mdvoltage_application' => 0,
        'page' => 0,
        'pitch_grant' => 0,
        'plum_grant_app' => 0,
        'press' => 0,
        'project' => 0,
        'project_teaser' => 0,
        'project_update' => 0,
        'rant_rave' => 0,
        'save_our_music' => 0,
        'scholarships_att' => 0,
        'scroller' => 0,
        'sixflags_scholarships_app' => 0,
        'som_judge' => 0,
        'speed_catcher' => 0,
        'staff_blog' => 0,
        'staples_2011_signup' => 0,
        'staples_design' => 0,
        'story' => 0,
        'surge_scholarship' => 0,
        'tackle_hunger' => 0,
        'take_action_app' => 0,
        'teach_grants' => 0,
        'testimonial' => 0,
        'tfj_contest_signup' => 0,
        'throwaway_type' => 0,
        'thumb_wars_bumper_sticker' => 0,
        'thumb_wars_sock_signup' => 0,
        'thumb_wars_sticker_order' => 0,
        'tips_and_tools' => 0,
        'troop_letter' => 0,
        'ugc_tips_tools' => 0,
        'varsity' => 0,
        'webform' => 0,
        'whitehouse' => 0,
        'yacapp' => 0,
        'yac_app' => 0,
        'youth_act_fair_signup' => 0,
        'youth_grant_app' => 0,
      ),
      'validate_argument_node_access' => 0,
      'validate_argument_nid_type' => 'nid',
      'validate_argument_vocabulary' => array(
        '1' => 0,
        '9' => 0,
        '5' => 0,
        '6' => 0,
        '11' => 0,
        '18' => 0,
        '17' => 0,
        '15' => 0,
        '4' => 0,
        '16' => 0,
        '2' => 0,
        '3' => 0,
      ),
      'validate_argument_type' => 'tid',
      'validate_argument_transform' => 0,
      'validate_user_restrict_roles' => 0,
      'validate_argument_is_member' => 'OG_VIEWS_DO_NOT_VALIDATE_MEMBERSHIP',
      'validate_argument_group_node_type' => array(
        'club' => 0,
      ),
      'validate_argument_php' => '',
    ),
  ));
  $handler->override_option('filters', array(
    'status' => array(
      'operator' => '=',
      'value' => '1',
      'group' => '0',
      'exposed' => FALSE,
      'expose' => array(
        'operator' => FALSE,
        'label' => '',
      ),
      'id' => 'status',
      'table' => 'node',
      'field' => 'status',
      'relationship' => 'none',
      'override' => array(
        'button' => 'Use default',
      ),
    ),
    'type' => array(
      'operator' => 'in',
      'value' => array(
        'project' => 'project',
      ),
      'group' => '0',
      'exposed' => FALSE,
      'expose' => array(
        'operator' => FALSE,
        'label' => '',
      ),
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('items_per_page', 4);
  $handler->override_option('style_options', array(
    'grouping' => '',
  ));
  $handler->override_option('block_description', '');
  $handler->override_option('block_caching', -1);

  $views[$view->name] = $view;

  return $views;
}
