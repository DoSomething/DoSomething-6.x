<?php

/**
 * Implementation of hook_views_default_views().
 */
function ds_grants_database_views_default_views() {
  $views = array();

  // Exported view: grant_database
  $view = new view;
  $view->name = 'grant_database';
  $view->description = 'Grants Database';
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
    ),
    'field_type_of_award_value' => array(
      'label' => 'Award Type',
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
        'group' => 1,
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_reversed' => 0,
      ),
      'exclude' => 0,
      'id' => 'field_type_of_award_value',
      'table' => 'node_data_field_type_of_award',
      'field' => 'field_type_of_award_value',
      'relationship' => 'none',
    ),
    'field_award_focus_value' => array(
      'id' => 'field_award_focus_value',
      'table' => 'node_data_field_award_focus',
      'field' => 'field_award_focus_value',
    ),
    'field_rolling_value' => array(
      'label' => 'Status',
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
      'id' => 'field_rolling_value',
      'table' => 'node_data_field_rolling',
      'field' => 'field_rolling_value',
      'relationship' => 'none',
    ),
    'field_application_deadline_2_value' => array(
      'label' => 'Deadline',
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
        'multiple_number' => '',
        'multiple_from' => '',
        'multiple_to' => '',
        'group' => '',
      ),
      'repeat' => array(
        'show_repeat_rule' => 'show',
      ),
      'fromto' => array(
        'fromto' => 'both',
      ),
      'exclude' => 0,
      'id' => 'field_application_deadline_2_value',
      'table' => 'node_data_field_application_deadline_2',
      'field' => 'field_application_deadline_2_value',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('filters', array(
    'type' => array(
      'operator' => 'in',
      'value' => array(
        'grants_database' => 'grants_database',
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
    'keys' => array(
      'operator' => 'optional',
      'value' => '',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'keys_op',
        'identifier' => 'keys',
        'label' => 'Keyword',
        'optional' => 1,
        'remember' => 0,
      ),
      'id' => 'keys',
      'table' => 'search_index',
      'field' => 'keys',
      'relationship' => 'none',
    ),
    'field_award_focus_value_many_to_one' => array(
      'operator' => 'or',
      'value' => array(),
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'field_award_focus_value_many_to_one_op',
        'identifier' => 'focus',
        'label' => 'Award Focus',
        'optional' => 1,
        'single' => 0,
        'remember' => 0,
        'reduce' => 0,
      ),
      'id' => 'field_award_focus_value_many_to_one',
      'table' => 'node_data_field_award_focus',
      'field' => 'field_award_focus_value_many_to_one',
      'relationship' => 'none',
      'reduce_duplicates' => 1,
    ),
    'field_type_of_award_value_many_to_one' => array(
      'operator' => 'or',
      'value' => array(),
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'field_type_of_award_value_many_to_one_op',
        'identifier' => 'type',
        'label' => 'Award Type',
        'optional' => 1,
        'single' => 0,
        'remember' => 0,
        'reduce' => 0,
      ),
      'id' => 'field_type_of_award_value_many_to_one',
      'table' => 'node_data_field_type_of_award',
      'field' => 'field_type_of_award_value_many_to_one',
      'relationship' => 'none',
      'reduce_duplicates' => 1,
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
  $handler->override_option('use_pager', '0');
  $handler->override_option('distinct', 1);
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->override_option('header', '<style type="text/css">
#views-filters table
{
  width: 100%;
  margin-bottom: 20px;
}


#views-filters table td select
{
  height: 70px;
}

#views-filters table td,
#views-filters table th
{
  padding: 3px;
  vertical-align: top;
}

.view-content-grant-alumni table
{
  width: 100%;
}

.view-content-grant-alumni table td,
.view-content-grant-alumni table th
{
  padding: 2px;
}

</style>
<img src="http://www.dosomething.org/files/layout/GRANTS.jpg" alt="grants">
<h3><?php 
$num_nodes = $GLOBALS[\'pager_total_items\'][0];
echo "There are $num_nodes grants for you!";
 ?></h3> 
<p>Here is a database of available resources for entrepreneurs. We now allow YOU to add resources! <a href="/node/add/grants-database" target="blank">Submit an award or grant listing</a>.</p>
');
  $handler->override_option('header_format', '2');
  $handler->override_option('header_empty', 0);
  $handler->override_option('empty', '<style type="text/css">
#views-filters table
{
  width: 100%;
  margin-bottom: 20px;
}


#views-filters table td select
{
  height: 70px;
}

#views-filters table td,
#views-filters table th
{
  padding: 3px;
  vertical-align: top;
}

.view-content-grant-alumni table
{
  width: 100%;
}

.view-content-grant-alumni table td,
.view-content-grant-alumni table th
{
  padding: 2px;
}

</style>
<h3>We did not find that kind of grant.  Sorry!  Try searching again.</h3>
');
  $handler->override_option('empty_format', '2');
  $handler->override_option('items_per_page', 20);
  $handler->override_option('use_pager', '1');
  $handler->override_option('style_plugin', 'table');
  $handler->override_option('style_options', array(
    'grouping' => '',
    'override' => 1,
    'sticky' => 0,
    'order' => 'desc',
    'columns' => array(
      'title' => 'title',
      'field_type_of_award_value' => 'field_type_of_award_value',
      'field_award_focus_value' => 'field_award_focus_value',
      'field_rolling_value' => 'field_rolling_value',
      'field_application_deadline_value' => 'field_application_deadline_value',
    ),
    'info' => array(
      'title' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'field_type_of_award_value' => array(
        'separator' => '',
      ),
      'field_award_focus_value' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'field_rolling_value' => array(
        'sortable' => 1,
        'separator' => '',
      ),
      'field_application_deadline_value' => array(
        'sortable' => 1,
        'separator' => '',
      ),
    ),
    'default' => 'field_rolling_value',
  ));
  $handler->override_option('path', 'grants/database');
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
