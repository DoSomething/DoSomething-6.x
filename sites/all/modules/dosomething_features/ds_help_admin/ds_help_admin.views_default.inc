<?php

/**
 * Implementation of hook_views_default_views().
 */
function ds_help_admin_views_default_views() {
  $views = array();

  // Exported view: help_list
  $view = new view;
  $view->name = 'help_list';
  $view->description = '';
  $view->tag = '';
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
      'label' => 'Title',
      'link_to_node' => TRUE,
    ),
    'name' => array(
      'id' => 'name',
      'table' => 'users',
      'field' => 'name',
      'label' => 'User',
    ),
    'comment' => array(
      'id' => 'comment',
      'table' => 'comments',
      'field' => 'comment',
      'label' => 'Comment',
    ),
    'created' => array(
      'id' => 'created',
      'table' => 'node',
      'field' => 'created',
      'label' => '',
      'date_format' => 'small',
    ),
    'field_problem_type_value' => array(
      'id' => 'field_problem_type_value',
      'table' => 'node_data_field_problem_type',
      'field' => 'field_problem_type_value',
      'label' => 'Problem Type',
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
        '0' => 'help_ticket',
      ),
      'operator' => 'in',
    ),
    'created' => array(
      'id' => 'created',
      'table' => 'node',
      'field' => 'created',
      'value' => array(
        'type' => 'date',
        'value' => '10-1-2010',
      ),
      'operator' => '>',
    ),
    'keys' => array(
      'operator' => 'required',
      'value' => '',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'keys_op',
        'identifier' => 'keys',
        'label' => 'Search:',
        'optional' => 1,
        'remember' => 0,
      ),
      'id' => 'keys',
      'table' => 'search_index',
      'field' => 'keys',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('access', array(
    'type' => 'role',
    'role' => array(
      '3' => '3',
      '11' => '11',
    ),
    'perm' => '',
  ));
  $handler->override_option('cache', array(
    'type' => 'none',
  ));
  $handler->override_option('title', 'Help List');
  $handler->override_option('header', '<h2>FAQ</h2>
<p>1in3 bracelets send them here: 
http://www.dosomething.org/actnow/actionguide/how-create-awareness-bracelets </p>
<h4><?php 
$num_nodes = $GLOBALS[\'pager_total_items\'][0];
echo "We\'ve received (and hopefully helped) $num_nodes requests!";
 ?></h4> ');
  $handler->override_option('header_format', '2');
  $handler->override_option('footer_format', '1');
  $handler->override_option('empty_format', '1');
  $handler->override_option('items_per_page', '0');
  $handler->override_option('use_pager', '0');
  $handler->override_option('style_plugin', 'table');
  $handler->override_option('style_options', array(
    'columns' => array(),
    'default' => 'created',
    'info' => array(
      'title' => array(
        'sortable' => TRUE,
      ),
      'name' => array(
        'sortable' => TRUE,
      ),
      'created' => array(
        'sortable' => TRUE,
      ),
      'field_problem_type_value' => array(
        'sortable' => TRUE,
      ),
    ),
    'override' => FALSE,
    'order' => 'asc',
  ));
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->override_option('path', 'help/admin');
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

  return $views;
}
