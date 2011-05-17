<?php

/**
 * Implementation of hook_views_default_views().
 */
function ds_news_views_default_views() {
  $views = array();

  // Exported view: Newsbox
  $view = new view;
  $view->name = 'Newsbox';
  $view->description = 'News';
  $view->tag = 'News';
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
      'label' => '',
      'link_to_node' => TRUE,
    ),
    'body' => array(
      'id' => 'body',
      'table' => 'node_revisions',
      'field' => 'body',
      'label' => '',
    ),
  ));
  $handler->override_option('sorts', array(
    'created' => array(
      'id' => 'created',
      'table' => 'node',
      'field' => 'created',
      'order' => 'DESC',
      'granularity' => 'second',
    ),
  ));
  $handler->override_option('arguments', array(
    'vocid' => array(
      'id' => 'vocid',
      'table' => 'vocabulary',
      'field' => 'vid',
      'default_action' => 'ignore',
    ),
    'taxletter' => array(
      'id' => 'taxletter',
      'table' => 'term_data',
      'field' => 'name',
      'default_action' => 'ignore',
    ),
    'username' => array(
      'id' => 'username',
      'table' => 'users',
      'field' => 'name',
      'default_action' => 'ignore',
    ),
  ));
  $handler->override_option('filters', array(
    'type' => array(
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'value' => array(
        '0' => 'chatterbox',
      ),
      'operator' => 'in',
    ),
    'status' => array(
      'id' => 'status',
      'table' => 'node',
      'field' => 'status',
      'value' => '1',
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
  $handler->override_option('title', 'News Box');
  $handler->override_option('header', '<img src="/files/Images/newsbox.header.jpg" alt="News Box" border="0px" />
<div class="block blue" style="padding: 15px;">
<p>Welcome to the place where we talk about what\'s up with cause news and stuff going on at Do Something. </p>

<p>We want to know what YOU think! Click on a headline to make comments on a story and join the conversation.</p>

<p>Learn more about us on the <a href="/about/team/staff" target="_blank">staff page</a>.</p>
</div>      ');
  $handler->override_option('header_format', '3');
  $handler->override_option('footer_format', '3');
  $handler->override_option('empty', 'Sorry, no chatter box entries are available under that category.');
  $handler->override_option('empty_format', '1');
  $handler->override_option('items_per_page', '6');
  $handler->override_option('use_pager', '1');
  $handler->override_option('use_more', '0');
  $handler->override_option('row_plugin', 'node');
  $handler->override_option('row_options', array(
    'teaser' => TRUE,
    'links' => TRUE,
  ));
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->override_option('path', 'news');
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
  $handler = $view->new_display('block', 'Block', 'block_1');
  $handler->override_option('title', 'Newsbox');
  $handler->override_option('items_per_page', '1');
  $handler->override_option('use_pager', FALSE);
  $handler->override_option('style_plugin', 'list');
  $handler->override_option('style_options', array(
    'type' => 'ul',
  ));
  $handler->override_option('row_plugin', 'fields');
  $handler->override_option('block_description', '');
  $handler->override_option('block_caching', -1);

  $views[$view->name] = $view;

  // Exported view: field_reporter
  $view = new view;
  $view->name = 'field_reporter';
  $view->description = 'Field Reporter';
  $view->tag = 'news';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('fields', array(
    'field_reporter_photo_fid' => array(
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
      'format' => 'image_plain',
      'multiple' => array(
        'group' => TRUE,
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_reversed' => FALSE,
      ),
      'exclude' => 0,
      'id' => 'field_reporter_photo_fid',
      'table' => 'node_data_field_reporter_photo',
      'field' => 'field_reporter_photo_fid',
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
      'link_to_node' => 0,
      'exclude' => 0,
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'relationship' => 'none',
    ),
    'field_reporter_twitter_handle_value' => array(
      'label' => '',
      'alter' => array(
        'alter_text' => 1,
        'text' => '@[field_reporter_twitter_handle_value]',
        'make_link' => 1,
        'path' => 'http://twitter.com/[field_reporter_twitter_handle_value]',
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
      'format' => 'plain',
      'multiple' => array(
        'group' => TRUE,
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_reversed' => FALSE,
      ),
      'exclude' => 0,
      'id' => 'field_reporter_twitter_handle_value',
      'table' => 'node_data_field_reporter_twitter_handle',
      'field' => 'field_reporter_twitter_handle_value',
      'relationship' => 'none',
    ),
    'body' => array(
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
      'exclude' => 0,
      'id' => 'body',
      'table' => 'node_revisions',
      'field' => 'body',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('arguments', array(
    'field_reporter_user_uid' => array(
      'default_action' => 'not found',
      'style_plugin' => 'default_summary',
      'style_options' => array(),
      'wildcard' => 'all',
      'wildcard_substitution' => 'All',
      'title' => '',
      'breadcrumb' => '',
      'default_argument_type' => 'fixed',
      'default_argument' => '',
      'validate_type' => 'user',
      'validate_fail' => 'not found',
      'break_phrase' => 0,
      'not' => 0,
      'id' => 'field_reporter_user_uid',
      'table' => 'node_data_field_reporter_user',
      'field' => 'field_reporter_user_uid',
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
  ));
  $handler->override_option('filters', array(
    'type' => array(
      'operator' => 'in',
      'value' => array(
        'reporter' => 'reporter',
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

  $views[$view->name] = $view;

  return $views;
}
