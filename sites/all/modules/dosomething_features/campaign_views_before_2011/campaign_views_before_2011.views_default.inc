<?php

/**
 * Implementation of hook_views_default_views().
 */
function campaign_views_before_2011_views_default_views() {
  $views = array();

  // Exported view: att_scholarship
  $view = new view;
  $view->name = 'att_scholarship';
  $view->description = '';
  $view->tag = '';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('sorts', array(
    'created' => array(
      'id' => 'created',
      'table' => 'node',
      'field' => 'created',
      'order' => 'DESC',
      'granularity' => 'second',
    ),
  ));
  $handler->override_option('filters', array(
    'type' => array(
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'value' => array(
        '0' => 'scholarships_att',
      ),
      'operator' => 'in',
    ),
    'status' => array(
      'id' => 'status',
      'table' => 'node',
      'field' => 'status',
      'value' => '1',
    ),
    'word' => array(
      'id' => 'word',
      'table' => 'search_index',
      'field' => 'keys',
      'exposed' => TRUE,
      'expose' => array(
        'identifier' => 'filter0',
        'label' => '',
        'operator' => 'op0',
        'optional' => '0',
        'single' => '0',
      ),
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
  $handler->override_option('header_format', '1');
  $handler->override_option('footer_format', '1');
  $handler->override_option('empty', '<p>Oops, we did not find any results!</p>');
  $handler->override_option('empty_format', '1');
  $handler->override_option('items_per_page', '10');
  $handler->override_option('use_pager', '1');
  $handler->override_option('style_plugin', 'grid');
  $handler->override_option('style_options', array(
    'columns' => '2',
    'alignment' => 'horizontal',
    'fill_single_line' => 1,
  ));
  $handler->override_option('row_plugin', 'node');
  $handler->override_option('row_options', array(
    'teaser' => TRUE,
    'links' => TRUE,
  ));
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->override_option('path', 'att/gallery/results');
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
  $handler->override_option('block_description', '');
  $handler->override_option('block_caching', -1);
  $handler = $view->new_display('views_data_export', 'Data export', 'views_data_export_1');
  $handler->override_option('fields', array(
    'value_5' => array(
      'id' => 'value_5',
      'table' => 'profile_values_profile_fname',
      'field' => 'value',
    ),
    'value_6' => array(
      'id' => 'value_6',
      'table' => 'profile_values_profile_lname',
      'field' => 'value',
    ),
    'value_4' => array(
      'id' => 'value_4',
      'table' => 'profile_values_profile_bday',
      'field' => 'value',
    ),
    'value_1' => array(
      'id' => 'value_1',
      'table' => 'profile_values_profile_address1',
      'field' => 'value',
    ),
    'value' => array(
      'id' => 'value',
      'table' => 'profile_values_profile_city',
      'field' => 'value',
    ),
    'value_2' => array(
      'id' => 'value_2',
      'table' => 'profile_values_profile_state',
      'field' => 'value',
    ),
    'value_3' => array(
      'id' => 'value_3',
      'table' => 'profile_values_profile_zip',
      'field' => 'value',
    ),
    'mail' => array(
      'id' => 'mail',
      'table' => 'users',
      'field' => 'mail',
    ),
    'value_7' => array(
      'id' => 'value_7',
      'table' => 'profile_values_profile_cell',
      'field' => 'value',
    ),
    'field_scholarship_att_video_embed' => array(
      'label' => 'Video',
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
      'label_type' => 'custom',
      'format' => 'video_url',
      'multiple' => array(
        'group' => TRUE,
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_reversed' => FALSE,
      ),
      'exclude' => 0,
      'id' => 'field_scholarship_att_video_embed',
      'table' => 'node_data_field_scholarship_att_video',
      'field' => 'field_scholarship_att_video_embed',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'field_scholarship_att_song_value' => array(
      'label' => 'What’s your favorite song to rock out to?',
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
      'label_type' => 'widget',
      'format' => 'default',
      'multiple' => array(
        'group' => TRUE,
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_reversed' => FALSE,
      ),
      'exclude' => 0,
      'id' => 'field_scholarship_att_song_value',
      'table' => 'node_data_field_scholarship_att_song',
      'field' => 'field_scholarship_att_song_value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'field_scholarship_att_rec_value' => array(
      'label' => 'Who can we contact for a recommendation?',
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
      'label_type' => 'widget',
      'format' => 'default',
      'multiple' => array(
        'group' => TRUE,
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_reversed' => FALSE,
      ),
      'exclude' => 0,
      'id' => 'field_scholarship_att_rec_value',
      'table' => 'node_data_field_scholarship_att_rec',
      'field' => 'field_scholarship_att_rec_value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'field_scholarship_att_crush_value' => array(
      'label' => 'Who\'s your celebrity crush?',
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
      'label_type' => 'widget',
      'format' => 'default',
      'multiple' => array(
        'group' => TRUE,
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_reversed' => FALSE,
      ),
      'exclude' => 0,
      'id' => 'field_scholarship_att_crush_value',
      'table' => 'node_data_field_scholarship_att_crush',
      'field' => 'field_scholarship_att_crush_value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'field_scholarship_att_whyyou_value' => array(
      'label' => 'Why you should be chosen',
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
      'label_type' => 'widget',
      'format' => 'default',
      'multiple' => array(
        'group' => TRUE,
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_reversed' => FALSE,
      ),
      'exclude' => 0,
      'id' => 'field_scholarship_att_whyyou_value',
      'table' => 'node_data_field_scholarship_att_whyyou',
      'field' => 'field_scholarship_att_whyyou_value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('filters', array(
    'type' => array(
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'value' => array(
        '0' => 'scholarships_att',
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
    'type' => 'role',
    'role' => array(
      '3' => 3,
    ),
  ));
  $handler->override_option('items_per_page', '0');
  $handler->override_option('style_plugin', 'views_data_export_csv');
  $handler->override_option('style_options', array(
    'mission_description' => FALSE,
    'description' => '',
  ));
  $handler->override_option('row_plugin', '');
  $handler->override_option('row_options', array());
  $handler->override_option('path', 'att/data-pull2');
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
  $handler->override_option('displays', array());
  $handler->override_option('sitename_title', FALSE);
  $handler->override_option('use_batch', TRUE);

  $views[$view->name] = $view;

  // Exported view: botb_entries
  $view = new view;
  $view->name = 'botb_entries';
  $view->description = 'Battle of the Bands Entries';
  $view->tag = '';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('sorts', array(
    'value' => array(
      'id' => 'value',
      'table' => 'votingapi_cache_vote_percent_average',
      'field' => 'value',
      'order' => 'DESC',
    ),
  ));
  $handler->override_option('filters', array(
    'status' => array(
      'id' => 'status',
      'table' => 'node',
      'field' => 'status',
      'value' => '1',
    ),
    'type' => array(
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'value' => array(
        '0' => 'botb',
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
  $handler->override_option('header', '<h2 style="text-align:center;">2010 Contest Submissions</h2>
<p style="text-align:center;">Check out last year\'s videos for inspiration!</p>');
  $handler->override_option('header_format', '2');
  $handler->override_option('footer_format', '2');
  $handler->override_option('empty_format', '1');
  $handler->override_option('items_per_page', '10');
  $handler->override_option('use_pager', '1');
  $handler->override_option('distinct', TRUE);
  $handler->override_option('style_plugin', 'grid');
  $handler->override_option('style_options', array(
    'columns' => '2',
    'alignment' => 'horizontal',
    'fill_single_line' => 1,
  ));
  $handler->override_option('row_plugin', 'node');
  $handler->override_option('row_options', array(
    'teaser' => TRUE,
    'links' => TRUE,
  ));
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->override_option('path', 'battle/gallerydev2010');
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

  // Exported view: botb_entries_2011
  $view = new view;
  $view->name = 'botb_entries_2011';
  $view->description = 'Battle of the Bands Entries';
  $view->tag = '';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('sorts', array(
    'created' => array(
      'id' => 'created',
      'table' => 'node',
      'field' => 'created',
      'order' => 'DESC',
      'granularity' => 'second',
    ),
  ));
  $handler->override_option('filters', array(
    'status' => array(
      'id' => 'status',
      'table' => 'node',
      'field' => 'status',
      'value' => '1',
    ),
    'type' => array(
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'value' => array(
        '0' => 'campaign_bfb_2011',
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
  $handler->override_option('header', '<h2 style="text-align:center;">Contest Submissions</h2>');
  $handler->override_option('header_format', '2');
  $handler->override_option('footer_format', '2');
  $handler->override_option('empty', '<h2 style="text-align:center;">Contest Submissions</h2>
<p style="text-align:center;">No <?=$_GET[\'type\'];?> submissions were found.  Be the first to <a href="/battle/submit?type=<?=$_GET[\'type\'];?>">submit one</a>!</p>');
  $handler->override_option('empty_format', '2');
  $handler->override_option('items_per_page', '10');
  $handler->override_option('use_pager', '1');
  $handler->override_option('distinct', TRUE);
  $handler->override_option('style_plugin', 'grid');
  $handler->override_option('style_options', array(
    'columns' => '2',
    'alignment' => 'horizontal',
    'fill_single_line' => 1,
  ));
  $handler->override_option('row_plugin', 'node');
  $handler->override_option('row_options', array(
    'teaser' => TRUE,
    'links' => TRUE,
  ));
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->override_option('path', 'battle/gallerydev');
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

  // Exported view: ebd_2011_projects
  $view = new view;
  $view->name = 'ebd_2011_projects';
  $view->description = 'Epic Book Drive 2011 Campaign Projects';
  $view->tag = 'epic';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('fields', array(
    'field_campaign_anything_else_value' => array(
      'id' => 'field_campaign_anything_else_value',
      'table' => 'node_data_field_campaign_anything_else',
      'field' => 'field_campaign_anything_else_value',
    ),
    'field_campaign_next_year_yesno_value' => array(
      'id' => 'field_campaign_next_year_yesno_value',
      'table' => 'node_data_field_campaign_next_year_yesno',
      'field' => 'field_campaign_next_year_yesno_value',
    ),
    'field_campaign_essay_how_value' => array(
      'id' => 'field_campaign_essay_how_value',
      'table' => 'node_data_field_campaign_essay_how',
      'field' => 'field_campaign_essay_how_value',
    ),
    'field_campaign_number_of_people_value' => array(
      'id' => 'field_campaign_number_of_people_value',
      'table' => 'node_data_field_campaign_number_of_people',
      'field' => 'field_campaign_number_of_people_value',
    ),
    'field_campaign_essay_challenge_value' => array(
      'id' => 'field_campaign_essay_challenge_value',
      'table' => 'node_data_field_campaign_essay_challenge',
      'field' => 'field_campaign_essay_challenge_value',
    ),
    'field_campaign_essay_why_value' => array(
      'id' => 'field_campaign_essay_why_value',
      'table' => 'node_data_field_campaign_essay_why',
      'field' => 'field_campaign_essay_why_value',
    ),
    'field_campaign_why_participate_value' => array(
      'id' => 'field_campaign_why_participate_value',
      'table' => 'node_data_field_campaign_why_participate',
      'field' => 'field_campaign_why_participate_value',
    ),
    'field_your_cell_phone_notrequir_value' => array(
      'id' => 'field_your_cell_phone_notrequir_value',
      'table' => 'node_data_field_your_cell_phone_notrequir',
      'field' => 'field_your_cell_phone_notrequir_value',
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
  $handler->override_option('filters', array(
    'status' => array(
      'id' => 'status',
      'table' => 'node',
      'field' => 'status',
      'value' => '1',
    ),
    'type' => array(
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'value' => array(
        '0' => 'campaign_ebd_2011',
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
  $handler->override_option('header_empty', 0);
  $handler->override_option('footer_format', '2');
  $handler->override_option('empty', '<h2 style="text-align:center;">Contest Submissions</h2>
<p style="text-align:center;">No <?=$_GET[\'type\'];?> submissions were found.  Be the first to <a href="/battle/submit?type=<?=$_GET[\'type\'];?>">submit one</a>!</p>');
  $handler->override_option('empty_format', '2');
  $handler->override_option('items_per_page', '10');
  $handler->override_option('use_pager', '1');
  $handler->override_option('distinct', TRUE);
  $handler->override_option('row_plugin', 'node');
  $handler->override_option('row_options', array(
    'teaser' => TRUE,
    'links' => TRUE,
  ));
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->override_option('path', 'epic/gallerydev');
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
  $handler = $view->new_display('views_data_export', 'Data export', 'views_data_export_1');
  $handler->override_option('fields', array(
    'name' => array(
      'label' => 'Name',
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
      'link_to_user' => 0,
      'overwrite_anonymous' => 0,
      'anonymous_text' => '',
      'exclude' => 0,
      'id' => 'name',
      'table' => 'users',
      'field' => 'name',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'mail' => array(
      'label' => 'E-mail',
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
      'link_to_user' => '0',
      'exclude' => 0,
      'id' => 'mail',
      'table' => 'users',
      'field' => 'mail',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'value_9' => array(
      'label' => 'Subscriptions: Cell Phone',
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
      'link_to_user' => 0,
      'exclude' => 0,
      'id' => 'value_9',
      'table' => 'profile_values_profile_cell',
      'field' => 'value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'value_6' => array(
      'label' => 'Personal Information: First Name',
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
      'link_to_user' => 0,
      'exclude' => 0,
      'id' => 'value_6',
      'table' => 'profile_values_profile_fname',
      'field' => 'value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'value_8' => array(
      'label' => 'Personal Information: Last Name',
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
      'link_to_user' => 0,
      'exclude' => 0,
      'id' => 'value_8',
      'table' => 'profile_values_profile_lname',
      'field' => 'value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'value_5' => array(
      'label' => 'Personal Information: Birthdate',
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
      'link_to_user' => 0,
      'exclude' => 0,
      'id' => 'value_5',
      'table' => 'profile_values_profile_bday',
      'field' => 'value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'value_1' => array(
      'label' => 'Location: Mailing Address 1',
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
      'link_to_user' => 0,
      'exclude' => 0,
      'id' => 'value_1',
      'table' => 'profile_values_profile_address1',
      'field' => 'value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'value_2' => array(
      'label' => 'Location: Mailing Address 2',
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
      'link_to_user' => 0,
      'exclude' => 0,
      'id' => 'value_2',
      'table' => 'profile_values_profile_address2',
      'field' => 'value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'value' => array(
      'label' => 'Location: City',
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
      'link_to_user' => 0,
      'exclude' => 0,
      'id' => 'value',
      'table' => 'profile_values_profile_city',
      'field' => 'value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'value_3' => array(
      'label' => 'Location: State/Province',
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
      'id' => 'value_3',
      'table' => 'profile_values_profile_state',
      'field' => 'value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'value_4' => array(
      'label' => 'Location: Zipcode',
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
      'link_to_user' => 0,
      'exclude' => 0,
      'id' => 'value_4',
      'table' => 'profile_values_profile_zip',
      'field' => 'value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'field_campaign_anything_else_value' => array(
      'label' => 'Anything else awesome we should know?',
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
      'label_type' => 'widget',
      'format' => 'default',
      'multiple' => array(
        'group' => TRUE,
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_reversed' => FALSE,
      ),
      'exclude' => 0,
      'id' => 'field_campaign_anything_else_value',
      'table' => 'node_data_field_campaign_anything_else',
      'field' => 'field_campaign_anything_else_value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'field_campaign_next_year_yesno_value' => array(
      'id' => 'field_campaign_next_year_yesno_value',
      'table' => 'node_data_field_campaign_next_year_yesno',
      'field' => 'field_campaign_next_year_yesno_value',
    ),
    'field_campaign_essay_how_value' => array(
      'id' => 'field_campaign_essay_how_value',
      'table' => 'node_data_field_campaign_essay_how',
      'field' => 'field_campaign_essay_how_value',
    ),
    'field_campaign_number_of_people_value' => array(
      'id' => 'field_campaign_number_of_people_value',
      'table' => 'node_data_field_campaign_number_of_people',
      'field' => 'field_campaign_number_of_people_value',
    ),
    'field_campaign_essay_challenge_value' => array(
      'id' => 'field_campaign_essay_challenge_value',
      'table' => 'node_data_field_campaign_essay_challenge',
      'field' => 'field_campaign_essay_challenge_value',
    ),
    'field_campaign_essay_why_value' => array(
      'id' => 'field_campaign_essay_why_value',
      'table' => 'node_data_field_campaign_essay_why',
      'field' => 'field_campaign_essay_why_value',
    ),
    'field_campaign_why_participate_value' => array(
      'id' => 'field_campaign_why_participate_value',
      'table' => 'node_data_field_campaign_why_participate',
      'field' => 'field_campaign_why_participate_value',
    ),
    'field_your_cell_phone_notrequir_value' => array(
      'label' => 'Friend\'s mobile number',
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
      'label_type' => 'custom',
      'format' => 'default',
      'multiple' => array(
        'group' => TRUE,
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_reversed' => FALSE,
      ),
      'exclude' => 0,
      'id' => 'field_your_cell_phone_notrequir_value',
      'table' => 'node_data_field_your_cell_phone_notrequir',
      'field' => 'field_your_cell_phone_notrequir_value',
      'override' => array(
        'button' => 'Use default',
      ),
      'relationship' => 'none',
    ),
    'value_7' => array(
      'id' => 'value_7',
      'table' => 'profile_values_profile_gender',
      'field' => 'value',
    ),
  ));
  $handler->override_option('access', array(
    'type' => 'role',
    'role' => array(
      '3' => 3,
    ),
  ));
  $handler->override_option('items_per_page', '0');
  $handler->override_option('style_plugin', 'views_data_export_csv');
  $handler->override_option('style_options', array(
    'mission_description' => FALSE,
    'description' => '',
    'attach_text' => 'CSV',
    'provide_file' => 1,
    'filename' => '%view.csv',
    'help' => '',
    'parent_sort' => 0,
    'separator' => ',',
    'quote' => 1,
    'trim' => 0,
    'header' => 1,
  ));
  $handler->override_option('row_plugin', '');
  $handler->override_option('row_options', array());
  $handler->override_option('path', 'epic-book-drive/projects-export');
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
  $handler->override_option('displays', array());
  $handler->override_option('sitename_title', FALSE);
  $handler->override_option('use_batch', TRUE);

  $views[$view->name] = $view;

  // Exported view: ebd_2011_signup
  $view = new view;
  $view->name = 'ebd_2011_signup';
  $view->description = 'Epic Book Drive 2011 Plans';
  $view->tag = 'epic';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('sorts', array(
    'created' => array(
      'id' => 'created',
      'table' => 'node',
      'field' => 'created',
      'order' => 'DESC',
      'granularity' => 'second',
    ),
  ));
  $handler->override_option('filters', array(
    'status' => array(
      'id' => 'status',
      'table' => 'node',
      'field' => 'status',
      'value' => '1',
    ),
    'type' => array(
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'value' => array(
        '0' => 'ebd_signup',
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
  $handler->override_option('header_empty', 0);
  $handler->override_option('footer_format', '2');
  $handler->override_option('empty', '<h2 style="text-align:center;">Contest Submissions</h2>
<p style="text-align:center;">No <?=$_GET[\'type\'];?> submissions were found.  Be the first to <a href="/battle/submit?type=<?=$_GET[\'type\'];?>">submit one</a>!</p>');
  $handler->override_option('empty_format', '2');
  $handler->override_option('items_per_page', '10');
  $handler->override_option('use_pager', '1');
  $handler->override_option('distinct', TRUE);
  $handler->override_option('row_plugin', 'node');
  $handler->override_option('row_options', array(
    'teaser' => TRUE,
    'links' => TRUE,
  ));
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->override_option('path', 'epic/gallerydevsignup');
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
  $handler->override_option('block_description', '');
  $handler->override_option('block_caching', -1);

  $views[$view->name] = $view;

  return $views;
}
