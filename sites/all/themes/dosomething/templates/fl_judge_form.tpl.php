<?php
    print drupal_render($form['field_fl_sportsmanship']);
    print drupal_render($form['field_fl_passion']);
    print drupal_render($form['field_fl_role_model']);
    print drupal_render($form['field_fl_diversity']);
    print drupal_render($form['field_fl_material']);
    print drupal_render($form['field_fl_academics']);
    print drupal_render($form['field_fl_comments']);
    print drupal_render($form['buttons']['submit']);
?>

<div style="display:none">
  <?php print drupal_render($form);?>
</div>
