<?php

/**
 * Implementation of hook_views_default_views().
 */
function ds_epic_views_default_views() {
  $views = array();

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
