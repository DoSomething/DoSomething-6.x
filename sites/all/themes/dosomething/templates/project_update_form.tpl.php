<?

$form['title']['#default_value'] = 'Project Update - ' . date('m/j/y');
$form['title']['#prefix'] = '<div class="hide-me">';
$form['title']['#suffix'] = '</div>';

if(isset($_GET['nid']))
{
  $project_node = node_load(array('nid' => intval($_GET['nid'])));
  if($project_node->type=='project')
  {
    $form['title']['#default_value'] = 'Project Update - ' . $node->title;
    $form['field_project']['nids']['#default_value'] = array(0 => intval($_GET['nid']));
  }
}

$form['#validate']['_dosomething_forms_project_update_node_form_validate'] = array();

print drupal_render($form);

?>
