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

  return $views;
}
