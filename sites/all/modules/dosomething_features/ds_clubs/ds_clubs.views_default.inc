<?php

/**
 * Implementation of hook_views_default_views().
 */
function ds_clubs_views_default_views() {
  $views = array();

  // Exported view: clubs_directory
  $view = new view;
  $view->name = 'clubs_directory';
  $view->description = 'Clubs Directory';
  $view->tag = 'clubs';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('fields', array(
    'title' => array(
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'label' => 'Club',
      'link_to_node' => TRUE,
    ),
    'description' => array(
      'id' => 'description',
      'table' => 'og',
      'field' => 'description',
      'label' => 'Purpose',
    ),
    'field_club_state_value' => array(
      'id' => 'field_club_state_value',
      'table' => 'node_data_field_club_state',
      'field' => 'field_club_state_value',
      'label' => 'State',
    ),
    'field_club_city_value' => array(
      'id' => 'field_club_city_value',
      'table' => 'node_data_field_club_city',
      'field' => 'field_club_city_value',
      'label' => 'City',
      'format' => 'default',
      'multiple' => array(
        'group' => 1,
      ),
    ),
  ));
  $handler->override_option('arguments', array(
    'province' => array(
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
      'id' => 'province',
      'table' => 'location',
      'field' => 'province',
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
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
      'default_options_div_prefix' => '',
      'default_argument_fixed' => '',
      'default_argument_user' => 0,
      'default_argument_php' => '',
      'validate_argument_node_type' => array(
        'poll' => 0,
        'club' => 0,
        'club_event' => 0,
        'club_materials' => 0,
        'grant' => 0,
        'grant_alumni' => 0,
        'grant_alumni_update_form' => 0,
        'grant_judge' => 0,
        'project' => 0,
        'project_update' => 0,
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
        'chatterbox' => 0,
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
        'grants_database' => 0,
        'grant_application' => 0,
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
        'project_teaser' => 0,
        'rant_rave' => 0,
        'reporter' => 0,
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
  ));
  $handler->override_option('filters', array(
    'status' => array(
      'id' => 'status',
      'table' => 'node',
      'field' => 'status',
      'value' => '1',
    ),
    'directory' => array(
      'id' => 'directory',
      'table' => 'og',
      'field' => 'directory',
      'value' => '1',
    ),
    'type' => array(
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'value' => array(
        '0' => 'club',
      ),
      'operator' => 'in',
    ),
  ));
  $handler->override_option('access', array(
    'type' => 'none',
    'role' => array(),
    'perm' => '',
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
  $handler->override_option('header_format', '2');
  $handler->override_option('footer_format', '1');
  $handler->override_option('empty_format', '1');
  $handler->override_option('items_per_page', '10');
  $handler->override_option('use_pager', '1');
  $handler->override_option('style_plugin', 'table');
  $handler->override_option('style_options', array(
    'columns' => array(),
    'default' => '',
    'info' => array(
      'title' => array(
        'sortable' => TRUE,
      ),
      'field_club_state_value' => array(
        'sortable' => TRUE,
      ),
      'field_club_city_value' => array(
        'sortable' => TRUE,
      ),
    ),
    'override' => FALSE,
    'order' => 'asc',
  ));
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->override_option('path', 'clubs/directory');
  $handler->override_option('menu', array(
    'type' => 'none',
    'title' => '',
    'description' => '',
    'weight' => 0,
    'name' => 'navigation',
  ));
  $handler->override_option('tab_options', array(
    'type' => 'none',
    'title' => '',
    'description' => '',
    'weight' => 0,
    'name' => 'navigation',
  ));

  $views[$view->name] = $view;

  // Exported view: clubs_slider
  $view = new view;
  $view->name = 'clubs_slider';
  $view->description = 'Clubs Slider';
  $view->tag = 'clubs';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('relationships', array(
    'nodequeue_rel' => array(
      'label' => 'queue',
      'required' => 1,
      'limit' => 1,
      'qids' => array(
        '37' => 37,
        '1' => 0,
        '2' => 0,
        '24' => 0,
        '3' => 0,
        '4' => 0,
        '23' => 0,
        '5' => 0,
        '6' => 0,
        '7' => 0,
        '8' => 0,
        '9' => 0,
        '10' => 0,
        '11' => 0,
        '12' => 0,
        '13' => 0,
        '14' => 0,
        '15' => 0,
        '16' => 0,
        '17' => 0,
        '18' => 0,
        '19' => 0,
        '20' => 0,
        '21' => 0,
        '22' => 0,
        '25' => 0,
        '26' => 0,
        '27' => 0,
        '28' => 0,
        '29' => 0,
        '30' => 0,
        '31' => 0,
        '32' => 0,
        '33' => 0,
        '34' => 0,
        '35' => 0,
        '36' => 0,
        '38' => 0,
        '40' => 0,
        '41' => 0,
        '42' => 0,
        '43' => 0,
        '44' => 0,
        '45' => 0,
        '46' => 0,
        '47' => 0,
        '48' => 0,
        '49' => 0,
        '50' => 0,
        '51' => 0,
        '52' => 0,
        '53' => 0,
        '54' => 0,
        '55' => 0,
        '56' => 0,
        '57' => 0,
        '58' => 0,
        '59' => 0,
        '60' => 0,
        '61' => 0,
        '62' => 0,
        '63' => 0,
        '64' => 0,
        '65' => 0,
      ),
      'id' => 'nodequeue_rel',
      'table' => 'node',
      'field' => 'nodequeue_rel',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('fields', array(
    'nid' => array(
      'label' => 'Nid',
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
      'exclude' => 0,
      'id' => 'nid',
      'table' => 'node',
      'field' => 'nid',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('sorts', array(
    'random' => array(
      'id' => 'random',
      'table' => 'views',
      'field' => 'random',
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
    'delta' => array(
      'operator' => 'not empty',
      'value' => array(
        'value' => '',
        'min' => '',
        'max' => '',
      ),
      'group' => '0',
      'exposed' => FALSE,
      'expose' => array(
        'operator' => FALSE,
        'label' => '',
      ),
      'id' => 'delta',
      'table' => 'node_data_field_picture',
      'field' => 'delta',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('access', array(
    'type' => 'none',
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
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
  $handler->override_option('argument_input', array());
  $handler->override_option('link_to_view', 0);
  $handler->override_option('inherit_panels_path', 0);

  $views[$view->name] = $view;

  return $views;
}
