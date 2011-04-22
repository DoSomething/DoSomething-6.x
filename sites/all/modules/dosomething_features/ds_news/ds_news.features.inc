<?php

/**
 * Implementation of hook_imagecache_default_presets().
 */
function ds_news_imagecache_default_presets() {
  $items = array(
    '111' => array(
      'presetname' => '111',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'action' => 'imagecache_deprecated_scale',
          'data' => array(
            'fit' => 'outside',
            'width' => '111',
            'height' => '111',
          ),
          'module' => 'imagecache',
        ),
        '1' => array(
          'weight' => '1',
          'action' => 'imagecache_crop',
          'data' => array(
            'width' => '111',
            'height' => '111',
            'xoffset' => 'center',
            'yoffset' => 'center',
          ),
          'module' => 'imagecache',
        ),
      ),
    ),
    'preview' => array(
      'presetname' => 'preview',
      'actions' => array(
        '0' => array(
          'weight' => '0',
          'action' => 'imagecache_deprecated_scale',
          'data' => array(
            'fit' => 'inside',
            'width' => '640',
            'height' => '640',
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
function ds_news_node_info() {
  $items = array(
    'chatterbox' => array(
      'name' => t('Chatterbox'),
      'module' => 'features',
      'description' => t('A Chatterbox blog entry'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Body'),
      'min_word_count' => '0',
      'help' => t('<h2>Hey Content Loader!</h2>
Thanks for updating the site, here are some guidelines for uploading: <br>
Don\'t insert pictures or embed videos in the first paragraph and a half, it now happens automatically.<br>
Tag this post with all relevant issues (hold down control to select more than one. <br>
Us  <strong>P</strong> tags around all paragraphs.'),
    ),
    'reporter' => array(
      'name' => t('Reporter'),
      'module' => 'features',
      'description' => t('Information about contributing authors.'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'has_body' => '1',
      'body_label' => t('Blurb'),
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}

/**
 * Implementation of hook_views_api().
 */
function ds_news_views_api() {
  return array(
    'api' => '2',
  );
}
