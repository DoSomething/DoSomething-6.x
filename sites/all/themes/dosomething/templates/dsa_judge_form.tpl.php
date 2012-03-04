<?php
  for ($i = 1; $i <= 10; $i++) {
    print drupal_render($form['field_dsa_'.$i]);
  }
  print drupal_render($form['field_dsa_comments']);
  print drupal_render($form['buttons']['submit']);
?>

<div style="display:none">
  <?php print drupal_render($form);?>
</div>
