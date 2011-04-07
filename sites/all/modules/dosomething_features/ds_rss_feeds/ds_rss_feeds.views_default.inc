<?php

/**
 * Implementation of hook_views_default_views().
 */
function ds_rss_feeds_views_default_views() {
  $views = array();

  // Exported view: RSS_frontpage
  $view = new view;
  $view->name = 'RSS_frontpage';
  $view->description = 'Homepage alerts from DoSomething.org';
  $view->tag = 'rss';
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
        '2' => 2,
        '1' => 0,
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
        '37' => 0,
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
    'field_description_value' => array(
      'id' => 'field_description_value',
      'table' => 'node_data_field_description',
      'field' => 'field_description_value',
      'label' => 'description',
    ),
    'field_picture_fid' => array(
      'label' => 'Picture',
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
      'format' => '111_linked',
      'multiple' => array(
        'group' => 1,
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_reversed' => 0,
      ),
      'exclude' => 0,
      'id' => 'field_picture_fid',
      'table' => 'node_data_field_picture',
      'field' => 'field_picture_fid',
      'relationship' => 'none',
    ),
    'title' => array(
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'label' => 'title',
      'link_to_node' => TRUE,
    ),
    'field_link_url' => array(
      'label' => 'Link',
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
      'format' => 'url',
      'multiple' => array(
        'group' => TRUE,
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_reversed' => FALSE,
      ),
      'exclude' => 0,
      'id' => 'field_link_url',
      'table' => 'node_data_field_link',
      'field' => 'field_link_url',
      'relationship' => 'none',
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
  $handler->override_option('title', 'News on DoSomething.org programs');
  $handler->override_option('header_format', '1');
  $handler->override_option('footer_format', '1');
  $handler->override_option('empty_format', '1');
  $handler->override_option('items_per_page', '11');
  $handler->override_option('use_pager', '1');
  $handler = $view->new_display('feed', 'Feed', 'feed_1');
  $handler->override_option('style_plugin', 'rss');
  $handler->override_option('style_options', array(
    'mission_description' => FALSE,
    'description' => '',
  ));
  $handler->override_option('row_plugin', 'node_rss');
  $handler->override_option('row_options', array(
    'relationship' => 'none',
    'item_length' => 'default',
  ));
  $handler->override_option('path', 'rss/dosomething');
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

  $views[$view->name] = $view;

  // Exported view: RSS_grant_winner
  $view = new view;
  $view->name = 'RSS_grant_winner';
  $view->description = 'Grant winners from DoSomething.org';
  $view->tag = 'rss';
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
        '41' => 41,
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
        '37' => 0,
        '38' => 0,
        '40' => 0,
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
    'title' => array(
      'id' => 'title',
      'table' => 'node',
      'field' => 'title',
      'label' => 'title',
      'link_to_node' => TRUE,
    ),
    'field_city_2_value' => array(
      'id' => 'field_city_2_value',
      'table' => 'node_data_field_city_2',
      'field' => 'field_city_2_value',
      'label' => 'description',
    ),
    'field_description_value' => array(
      'id' => 'field_description_value',
      'table' => 'node_data_field_description',
      'field' => 'field_description_value',
      'label' => 'description',
    ),
    'field_picture_fid' => array(
      'id' => 'field_picture_fid',
      'table' => 'node_data_field_picture',
      'field' => 'field_picture_fid',
      'label' => 'description',
      'format' => '111',
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
  $handler->override_option('title', 'Grant winners from DoSomething.org programs');
  $handler->override_option('header_format', '1');
  $handler->override_option('footer_format', '1');
  $handler->override_option('empty_format', '1');
  $handler->override_option('items_per_page', '11');
  $handler->override_option('use_pager', '1');
  $handler = $view->new_display('feed', 'Feed', 'feed_1');
  $handler->override_option('style_plugin', 'rss');
  $handler->override_option('style_options', array(
    'mission_description' => FALSE,
    'description' => '',
  ));
  $handler->override_option('row_plugin', 'node_rss');
  $handler->override_option('row_options', array(
    'relationship' => 'none',
    'item_length' => 'default',
  ));
  $handler->override_option('path', 'rss/grants');
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

  $views[$view->name] = $view;

  // Exported view: celebs_gone_good_feed
  $view = new view;
  $view->name = 'celebs_gone_good_feed';
  $view->description = 'Celebs Gone Good page feed';
  $view->tag = 'rss';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('fields', array(
    'type' => array(
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'label' => '',
    ),
    'body' => array(
      'id' => 'body',
      'table' => 'node_revisions',
      'field' => 'teaser',
      'label' => '',
    ),
    'all_files' => array(
      'id' => 'all_files',
      'table' => 'node',
      'field' => 'upload_fid',
      'label' => '',
      'link_to_file' => TRUE,
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
    'type' => array(
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'value' => array(
        '0' => 'celebs_gone_good',
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
  $handler->override_option('title', 'Celebs Gone Good');
  $handler->override_option('header_format', '1');
  $handler->override_option('footer_format', '1');
  $handler->override_option('empty_format', '1');
  $handler->override_option('items_per_page', '10');
  $handler->override_option('use_pager', '1');
  $handler = $view->new_display('feed', 'Feed', 'feed_1');
  $handler->override_option('style_plugin', 'rss');
  $handler->override_option('style_options', array(
    'mission_description' => FALSE,
    'description' => '',
  ));
  $handler->override_option('row_plugin', 'node_rss');
  $handler->override_option('row_options', array(
    'relationship' => 'none',
    'item_length' => 'default',
  ));
  $handler->override_option('path', 'blog/celebsgonegood/feed');
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

  $views[$view->name] = $view;

  // Exported view: chatterbox_feed
  $view = new view;
  $view->name = 'chatterbox_feed';
  $view->description = 'Celebs Gone Good page feed';
  $view->tag = 'rss';
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
        '0' => 'chatterbox',
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
  $handler->override_option('title', 'Chatterbox');
  $handler->override_option('header_format', '1');
  $handler->override_option('footer_format', '1');
  $handler->override_option('empty_format', '1');
  $handler->override_option('items_per_page', '10');
  $handler->override_option('use_pager', '1');
  $handler->override_option('row_plugin', 'node');
  $handler->override_option('row_options', array(
    'relationship' => 'none',
    'build_mode' => 'teaser',
    'links' => 1,
    'comments' => 0,
  ));
  $handler = $view->new_display('feed', 'Feed', 'feed_1');
  $handler->override_option('style_plugin', 'rss');
  $handler->override_option('style_options', array(
    'mission_description' => FALSE,
    'description' => '',
  ));
  $handler->override_option('row_plugin', 'node_rss');
  $handler->override_option('row_options', array(
    'relationship' => 'none',
    'item_length' => 'default',
  ));
  $handler->override_option('path', 'blog/chatterbox/feed');
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

  $views[$view->name] = $view;

  // Exported view: feed_pod
  $view = new view;
  $view->name = 'feed_pod';
  $view->description = 'Project of the Day RSS Feed';
  $view->tag = 'rss';
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
        '34' => 34,
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
        '35' => 0,
        '36' => 0,
        '37' => 0,
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
  $handler->override_option('sorts', array(
    'position' => array(
      'order' => 'ASC',
      'id' => 'position',
      'table' => 'nodequeue_nodes',
      'field' => 'position',
      'relationship' => 'nodequeue_rel',
    ),
  ));
  $handler->override_option('filters', array(
    'type' => array(
      'operator' => 'in',
      'value' => array(
        'editorial_project' => 'editorial_project',
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
  ));
  $handler->override_option('access', array(
    'type' => 'none',
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
  $handler->override_option('row_plugin', 'node');
  $handler->override_option('row_options', array(
    'relationship' => 'none',
    'build_mode' => 'teaser',
    'links' => 1,
    'comments' => 0,
  ));
  $handler = $view->new_display('feed', 'Feed', 'feed_1');
  $handler->override_option('style_plugin', 'rss');
  $handler->override_option('style_options', array(
    'mission_description' => FALSE,
    'description' => '',
  ));
  $handler->override_option('row_plugin', 'node_rss');
  $handler->override_option('row_options', array(
    'relationship' => 'none',
    'item_length' => 'default',
  ));
  $handler->override_option('path', 'rss/featured-project');
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
  $handler->override_option('displays', array(
    'default' => 0,
  ));
  $handler->override_option('sitename_title', FALSE);

  $views[$view->name] = $view;

  return $views;
}
