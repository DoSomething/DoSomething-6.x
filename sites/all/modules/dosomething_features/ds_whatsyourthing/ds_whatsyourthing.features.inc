<?php

/**
 * Implementation of hook_imagecache_default_presets().
 */
function ds_whatsyourthing_imagecache_default_presets() {
  $items = array(
    '115' => array(
      'presetname' => '115',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'action' => 'imagecache_deprecated_scale',
          'data' => array(
            'fit' => 'outside',
            'width' => '115',
            'height' => '115',
          ),
          'module' => 'imagecache',
        ),
        '1' => array(
          'weight' => '0',
          'action' => 'imagecache_crop',
          'data' => array(
            'width' => '115',
            'height' => '115',
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
function ds_whatsyourthing_node_info() {
  $items = array(
    'cause' => array(
      'name' => t('Cause'),
      'module' => 'features',
      'description' => t('A Cause, related to a parent taxonomy term for issues/causes'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}

/**
 * Implementation of hook_views_api().
 */
function ds_whatsyourthing_views_api() {
  return array(
    'api' => '2',
  );
}
