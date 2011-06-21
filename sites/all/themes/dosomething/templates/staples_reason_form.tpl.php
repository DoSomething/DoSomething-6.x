<?php
  $form['title']['#type'] = 'textarea';
  $form['title']['#resizable'] = FALSE;
  unset($form['title']['#title']);
  $form['title']['#attributes'] = array('onkeyup' => 'if (this.value.length > 100) this.value = this.value.substring(0, 100)',
                                        'class' => 'sticky');
  $form['buttons']['submit']['#value'] = 'submit';
  $form['buttons']['submit']['#attributes'] = array('class' => 'shadow rounded');
  print drupal_render($form['title']);
  print '';
  print drupal_render($form['field_name_f']);
  print drupal_render($form['field_name_l']);
  print drupal_render($form['field_where_from']);
  print drupal_render($form['field_thirteen']);
  print '<div style="clear:both;"></div>';
  
  $currPath = drupal_get_path_alias(str_replace('/edit', '', $_GET['q']));
  $endPath = explode('/', $currPath);
  if ($endPath[count($endPath)-2] == 'pretty-little-liar')
  {
    $hasGirl = true;
    $img = 'girls/'.$endPath[count($endPath)-1].'-node-submit.png';
  }
  else
    $img = 'popup-submit-text.png';
?>
  <img src="/sites/all/micro/sfs/<?=$img;?>" style="display: block; margin: 0 auto;" />
<?php
  print drupal_render($form['buttons']['submit']);
  if ($hasGirl) :
?>
  <input type="button" value="maybe later" class="form-submit shadow rounded" onClick="Shadowbox.close();" />
<?php endif; ?>
<div style="display:none">
  <?php print drupal_render($form);?>
</div>