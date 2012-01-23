<?php

function _dosomething_api_call_signup($webform_id) {
  if (!is_numeric($webform_id)) {
    return dosomething_api_error('Signup needs to be called with a webform NID');
  }

  module_load_include('inc', 'webform', 'includes/webform.submissions');

  if ($node = node_load($webform_id)) {
    $form_state = array(
      'values' => array(
        'submitted' => array(),
        'op' => t('Submit'),
        'form_id' => 'webform_client_form_'.$webform_id,
      )
    );

    foreach ($_POST as $key => $val) {
      if (is_array($val)) {
        foreach ($val as $key2 => $val2) {
          $form_state['values']['submitted'][$key][$key2] = $val2;
        }
      }
      else {
        $form_state['values']['submitted'][$key] = $val;
      }
    }

    drupal_execute('webform_client_form_'.$webform_id, $form_state, $node);
    
    return dosomething_api_complete('signup');
  }
}

function _dosomething_api_call_report($content_type) {
  module_load_include('inc', 'node', 'node.pages');
  $node = new StdClass();
  $node->type = $content_type;

  $form_state = array();
  $form_id = $content_type.'_node_form';

  $form = drupal_retrieve_form($form_id, $form_state, $node);
  drupal_prepare_form($form_id, $form, $form_state);

  $form_state['values'] = array(
    'title' => ucwords(str_replace('_', ' ', $content_type.' report back')),
    'op' => t('Save'),
  );

  foreach ($_POST as $key => $val) {
    if ($key == 'title' || $key == 'body') {
      $form_state['values'][$key] = $val;
    }
    else {
      switch ($form['#field_info'][$key]['type']) {
        case 'emvideo':
          $type = 'embed';
          break;
        default:
          $type = 'value';
          break;
      }

      $form_state['values'][$key] = _dosomething_api_wrap_text_field($val, $type);
    }
  }

  drupal_execute($form_id, $form_state, $node);

  return dosomething_api_complete('report');
}


