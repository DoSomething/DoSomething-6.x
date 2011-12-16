
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
      $form_state['value']['submitted'][$key] = $val;
    }

    drupal_execute('webform_client_form_'.$webform_id, $form_state, $node);
    
    $err = drupal_get_messages();
    if (!empty($err['error'])) {
      return dosomething_api_error($err['error']);
    }
    return array(
      'success' => 'true',
      'call' => 'signup',
    );
  }
}

function _dosomething_api_call_report($content_type) {
  return array(
    'success' => 'true',
    'call' => 'report',
  );
}


