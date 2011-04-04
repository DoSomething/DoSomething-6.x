<?php

/**
 * Implementation of hook_ctools_plugin_api().
 */
function ds_projects_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => 1);
  }
}

/**
 * Implementation of hook_imagecache_default_presets().
 */
function ds_projects_imagecache_default_presets() {
  $items = array(
    'projects_page_thumbnail' => array(
      'presetname' => 'projects_page_thumbnail',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'action' => 'imagecache_deprecated_scale',
          'data' => array(
            'fit' => 'outside',
            'width' => '107',
            'height' => '107',
          ),
          'module' => 'imagecache',
        ),
        '1' => array(
          'weight' => '1',
          'action' => 'imagecache_crop',
          'data' => array(
            'width' => '107',
            'height' => '107',
            'xoffset' => 'center',
            'yoffset' => 'center',
          ),
          'module' => 'imagecache',
        ),
      ),
    ),
  );
  return $items;
}

/**
 * Implementation of hook_node_info().
 */
function ds_projects_node_info() {
  $items = array(
    'project' => array(
      'name' => t('Project'),
      'module' => 'features',
      'description' => t('A volunteer project.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => t('<ol>
<li>This section is for those <strong>25 and under</strong>.</li>
<li>If you want to recruit volunteers for your project, post your <a href="http://www.volunteermatch.org">volunteer opportunity</a> with our partner Volunteer Match. This section is for posting projects and volunteer experiences that you have participated in.</li>
<li>You cannot post personal information here, it will be removed. Instead please direct people to your personal project website or facebook page.</li>
<li>If you want to share your opinions, please go to our <a href="/forum">Forums</a> section.</li>
</ol>'),
    ),
    'project_update' => array(
      'name' => t('Project Update'),
      'module' => 'features',
      'description' => t('An update for an existing project'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Update'),
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}

/**
 * Implementation of hook_views_api().
 */
function ds_projects_views_api() {
  return array(
    'api' => '2',
  );
}
