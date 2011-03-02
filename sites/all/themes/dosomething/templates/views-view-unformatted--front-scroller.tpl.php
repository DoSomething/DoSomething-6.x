<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<?php

  drupal_add_js(path_to_theme().'/js/jquery.cycle/jquery.cycle.all.min.js', 'theme');
  drupal_add_js(path_to_theme().'/js/scroller_front.js', 'theme');

  $thumbnails = '<div id="profiler-thumbnails">';
  $main = '<div id="profiler-main">';

  foreach ($view->style_plugin->rendered_fields as $id => $row) {
    $thumbnails .= "<div class='row-$id'>{$row['field_picture_fid']}</div>";
    $main .= "<div class='row-$id slide'>{$row['field_picture_fid_1']}<div class='text'><h2>{$row['title']}</h2>{$row['field_description_value']}</div></div>";
  }

  print $thumbnails.'</div>'.$main.'</div>';
