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
