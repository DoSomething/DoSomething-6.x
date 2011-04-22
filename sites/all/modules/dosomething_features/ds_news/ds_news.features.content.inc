<?php

/**
 * Implementation of hook_content_default_fields().
 */
function ds_news_content_default_fields() {
  $fields = array();

  // Exported field: field_embedded_video
  $fields['chatterbox-field_embedded_video'] = array(
    'field_name' => 'field_embedded_video',
    'type_name' => 'chatterbox',
    'display_settings' => array(
      'weight' => '4',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'hidden',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'emvideo',
    'required' => '0',
    'multiple' => '1',
    'module' => 'emvideo',
    'active' => '1',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'embed' => '',
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'video_width' => '425',
      'video_height' => '350',
      'video_autoplay' => 0,
      'preview_width' => '425',
      'preview_height' => '350',
      'preview_autoplay' => 0,
      'thumbnail_width' => '120',
      'thumbnail_height' => '90',
      'thumbnail_default_path' => '',
      'providers' => array(
        'bliptv' => 'bliptv',
        'brightcove' => 'brightcove',
        'google' => 'google',
        'metacafe' => 'metacafe',
        'revver' => 'revver',
        'veoh' => 'veoh',
        'vimeo' => 'vimeo',
        'youtube' => 'youtube',
        'dailymotion' => 0,
        'guba' => 0,
        'imeem' => 0,
        'jumpcut' => 0,
        'lastfm' => 0,
        'livevideo' => 0,
        'myspace' => 0,
        'sevenload' => 0,
        'spike' => 0,
        'tudou' => 0,
        'zzz_custom_url' => 0,
      ),
      'label' => 'Video (optional)',
      'weight' => '4',
      'description' => '',
      'type' => 'emvideo_textfields',
      'module' => 'emvideo',
    ),
  );

  // Exported field: field_news_category
  $fields['chatterbox-field_news_category'] = array(
    'field_name' => 'field_news_category',
    'type_name' => 'chatterbox',
    'display_settings' => array(
      'weight' => 0,
      'parent' => '',
      'label' => array(
        'format' => 'above',
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => 'Breaking News
Inspiring Organizations
Inspiring People
Interviews
Reviews
Snapshots
Studies
Video',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'label' => 'news_category',
      'weight' => 0,
      'description' => '',
      'type' => 'optionwidgets_select',
      'module' => 'optionwidgets',
    ),
  );

  // Exported field: field_photo_credit
  $fields['chatterbox-field_photo_credit'] = array(
    'field_name' => 'field_photo_credit',
    'type_name' => 'chatterbox',
    'display_settings' => array(
      'weight' => 0,
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => 'hidden',
        'exclude' => 0,
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'rows' => '1',
      'label' => 'photo credit',
      'weight' => 0,
      'description' => 'photo credit shows beneath the photo',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_picture
  $fields['chatterbox-field_picture'] = array(
    'field_name' => 'field_picture',
    'type_name' => 'chatterbox',
    'display_settings' => array(
      'weight' => '1',
      'parent' => '',
      'label' => array(
        'format' => 'hidden',
      ),
      'teaser' => array(
        'format' => '111_linked',
        'exclude' => 1,
      ),
      'full' => array(
        'format' => 'preview_default',
        'exclude' => 1,
      ),
    ),
    'widget_active' => '1',
    'type' => 'filefield',
    'required' => '0',
    'multiple' => '1',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => '0',
    'list_default' => '1',
    'description_field' => '0',
    'widget' => array(
      'max_resolution' => '0',
      'image_path' => 'pictures/actionguide',
      'custom_alt' => 1,
      'custom_title' => 1,
      'teaser_preset' => NULL,
      'body_preset' => NULL,
      'file_path' => 'pictures/actionguide',
      'use_default_image' => 0,
      'file_extensions' => NULL,
      'max_filesize_per_file' => NULL,
      'max_filesize_per_node' => NULL,
      'label' => 'Picture',
      'weight' => '1',
      'description' => '580px by 580px max',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Exported field: field_reporter_photo
  $fields['reporter-field_reporter_photo'] = array(
    'field_name' => 'field_reporter_photo',
    'type_name' => 'reporter',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
      ),
      'full' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
      'teaser' => array(
        'format' => 'image_plain',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'filefield',
    'required' => '0',
    'multiple' => '0',
    'module' => 'filefield',
    'active' => '1',
    'list_field' => '0',
    'list_default' => '1',
    'description_field' => '0',
    'widget' => array(
      'max_resolution' => '0',
      'max_filesize' => '0',
      'max_number_images' => '0',
      'image_path' => 'reporter',
      'file_extensions' => 'jpg jpeg png gif',
      'custom_alt' => 0,
      'custom_title' => 0,
      'default_image' => NULL,
      'use_default_image' => 0,
      'file_path' => 'reporter',
      'max_filesize_per_file' => NULL,
      'max_filesize_per_node' => NULL,
      'label' => 'Reporter photo',
      'weight' => 0,
      'description' => '',
      'type' => 'imagefield_widget',
      'module' => 'imagefield',
    ),
  );

  // Exported field: field_reporter_twitter_handle
  $fields['reporter-field_reporter_twitter_handle'] = array(
    'field_name' => 'field_reporter_twitter_handle',
    'type_name' => 'reporter',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'text',
    'required' => '0',
    'multiple' => '0',
    'module' => 'text',
    'active' => '1',
    'text_processing' => '0',
    'max_length' => '',
    'allowed_values' => '',
    'allowed_values_php' => '',
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'value' => '',
        ),
      ),
      'default_value_php' => '',
      'rows' => '1',
      'label' => 'Reporter\'s Twitter Handle',
      'weight' => 0,
      'description' => '',
      'type' => 'text_textfield',
      'module' => 'text',
    ),
  );

  // Exported field: field_reporter_user
  $fields['reporter-field_reporter_user'] = array(
    'field_name' => 'field_reporter_user',
    'type_name' => 'reporter',
    'display_settings' => array(
      'label' => array(
        'format' => 'above',
      ),
      'full' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
      'teaser' => array(
        'format' => 'default',
        'exclude' => 0,
      ),
    ),
    'widget_active' => '1',
    'type' => 'userreference',
    'required' => '0',
    'multiple' => '0',
    'module' => 'userreference',
    'active' => '1',
    'referenceable_roles' => array(
      '3' => 0,
      '2' => 0,
      '8' => 0,
      '7' => 0,
      '10' => 0,
      '13' => 0,
      '9' => 0,
      '5' => 0,
      '4' => 0,
      '11' => 0,
      '6' => 0,
      '12' => 0,
    ),
    'referenceable_status' => 1,
    'widget' => array(
      'default_value' => array(
        '0' => array(
          'uid' => '',
          'error_field' => 'field_reporter_user][0][user_name',
        ),
      ),
      'default_value_php' => '',
      'reverse_link' => '0',
      'label' => 'Reporter\'s DoSomething.org username',
      'weight' => 0,
      'description' => '',
      'type' => 'userreference_autocomplete',
      'module' => 'userreference',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Picture');
  t('Reporter photo');
  t('Reporter\'s DoSomething.org username');
  t('Reporter\'s Twitter Handle');
  t('Video (optional)');
  t('news_category');
  t('photo credit');

  return $fields;
}
