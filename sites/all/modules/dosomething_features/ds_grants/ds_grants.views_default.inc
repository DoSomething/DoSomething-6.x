<?php

/**
 * Implementation of hook_views_default_views().
 */
function ds_grants_views_default_views() {
  $views = array();

  // Exported view: grant_alumni
  $view = new view;
  $view->name = 'grant_alumni';
  $view->description = '';
  $view->tag = '';
  $view->view_php = '';
  $view->base_table = 'node';
  $view->is_cacheable = FALSE;
  $view->api_version = 2;
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */
  $handler = $view->new_display('default', 'Defaults', 'default');
  $handler->override_option('fields', array(
    'field_picture_fid' => array(
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
      'format' => '50x50_linked',
      'multiple' => array(
        'group' => 1,
        'multiple_number' => '1',
        'multiple_from' => '0',
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
      'label' => 'Name',
      'link_to_node' => TRUE,
    ),
    'field_state_plain_value' => array(
      'label' => 'State',
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
      'id' => 'field_state_plain_value',
      'table' => 'node_data_field_state_plain',
      'field' => 'field_state_plain_value',
      'relationship' => 'none',
    ),
    'field_year_awarded_value' => array(
      'label' => 'Year',
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
      'id' => 'field_year_awarded_value',
      'table' => 'node_data_field_year_awarded',
      'field' => 'field_year_awarded_value',
      'relationship' => 'none',
    ),
    'field_grant_type_value' => array(
      'label' => 'Grant Type',
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
      'id' => 'field_grant_type_value',
      'table' => 'node_data_field_grant_type',
      'field' => 'field_grant_type_value',
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('filters', array(
    'word' => array(
      'operator' => 'optional',
      'value' => '',
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 1,
        'operator' => 'search',
        'identifier' => 'search-term',
        'label' => 'Name or keyword',
        'optional' => 1,
        'remember' => 0,
      ),
      'id' => 'word',
      'table' => 'search_index',
      'field' => 'keys',
      'relationship' => 'none',
    ),
    'tid_1' => array(
      'operator' => 'or',
      'value' => array(),
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'tid_1_op',
        'identifier' => 'tid_1',
        'label' => 'By cause',
        'optional' => 1,
        'single' => 1,
        'remember' => 0,
        'reduce' => 0,
      ),
      'type' => 'select',
      'limit' => TRUE,
      'vid' => '5',
      'id' => 'tid_1',
      'table' => 'term_node',
      'field' => 'tid',
      'hierarchy' => 1,
      'relationship' => 'none',
      'reduce_duplicates' => 1,
    ),
    'field_state_plain_value_many_to_one' => array(
      'operator' => 'or',
      'value' => array(),
      'group' => '0',
      'exposed' => TRUE,
      'expose' => array(
        'use_operator' => 0,
        'operator' => 'field_state_plain_value_many_to_one_op',
        'identifier' => 'field_state_plain_value_many_to_one',
        'label' => 'By state',
        'optional' => 1,
        'single' => 1,
        'remember' => 0,
        'reduce' => 0,
      ),
      'id' => 'field_state_plain_value_many_to_one',
      'table' => 'node_data_field_state_plain',
      'field' => 'field_state_plain_value_many_to_one',
      'relationship' => 'none',
      'reduce_duplicates' => 1,
    ),
    'type' => array(
      'id' => 'type',
      'table' => 'node',
      'field' => 'type',
      'value' => array(
        '0' => 'grant_alumni',
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
  $handler->override_option('title', 'Grant Alumni');
  $handler->override_option('header', '<style type="text/css">
#views-filters table
{
  width: 505px !important;
  margin-bottom: 20px;
}


#views-filters table td select
{
  height: 22px;
}


#views-filters table td,
#views-filters table th
{
  padding: 3px;
  vertical-align: top;
}

.view-content-grant-alumni table
{
  width: 505px;
}

.view-content-grant-alumni table td,
.view-content-grant-alumni table th
{
  padding: 2px;
}

.form-text div input { width: 20px !important !important !important; }
</style>
<img src="/files/layout/GrantAlum.jpg" style="margin-top: -45px;">
<h3><?php 
$num_nodes = $GLOBALS[\'pager_total_items\'][0];
echo " There are $num_nodes alumni for you to check out!";
 ?> </h3>
');
  $handler->override_option('header_format', '2');
  $handler->override_option('footer_format', '1');
  $handler->override_option('empty', 'No grant alumni matched your search!');
  $handler->override_option('empty_format', '1');
  $handler->override_option('items_per_page', '20');
  $handler->override_option('use_pager', '1');
  $handler->override_option('distinct', TRUE);
  $handler->override_option('style_plugin', 'table');
  $handler->override_option('style_options', array(
    'columns' => array(),
    'default' => 'title',
    'info' => array(
      'title' => array(
        'sortable' => TRUE,
      ),
      'field_state_plain_value' => array(
        'sortable' => TRUE,
      ),
      'field_year_awarded_value' => array(
        'sortable' => TRUE,
      ),
      'field_grant_type_value' => array(
        'sortable' => TRUE,
      ),
    ),
    'override' => FALSE,
    'order' => 'asc',
  ));
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->override_option('path', 'grants/alumni');
  $handler->override_option('menu', array(
    'type' => 'normal',
    'title' => 'Grant Alumni',
    'description' => '',
    'weight' => 0,
    'name' => 'navigation',
  ));
  $handler->override_option('tab_options', array(
    'type' => 'none',
    'title' => '',
    'description' => '',
    'weight' => '0',
    'name' => 'navigation',
  ));

  $views[$view->name] = $view;

  // Exported view: grants_slider
  $view = new view;
  $view->name = 'grants_slider';
  $view->description = 'Grants Slider';
  $view->tag = 'grants';
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
        '3' => 0,
        '4' => 0,
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
        '23' => 0,
        '24' => 0,
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
        '66' => 0,
      ),
      'id' => 'nodequeue_rel',
      'table' => 'node',
      'field' => 'nodequeue_rel',
      'override' => array(
        'button' => 'Override',
      ),
      'relationship' => 'none',
    ),
  ));
  $handler->override_option('fields', array(
    'nid' => array(
      'id' => 'nid',
      'table' => 'node',
      'field' => 'nid',
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
    'type' => array(
      'operator' => 'in',
      'value' => array(
        'grant_alumni' => 'grant_alumni',
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
