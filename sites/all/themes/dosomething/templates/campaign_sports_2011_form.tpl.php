<?php

    print drupal_render($form['title']);
    print drupal_render($form['field_zip_campaign']);
    print drupal_render($form['field_campaign_number_of_people']);
    print drupal_render($form['field_campaign_pictures']);
    print drupal_render($form['field_campaign_essay']);
    print drupal_render($form['field_anything_else']);
    print drupal_render($form['field_participant_emails']);
    print drupal_render($form['buttons']['submit']);
?>

<div style="display:none">
  <?php print drupal_render($form);?>
</div>