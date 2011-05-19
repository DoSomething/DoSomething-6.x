<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php
  $rownum = 1;
  $numrows = count($rows);
  foreach ($rows as $id => $row):
    $middle = '';
    if ($rownum != 1 && $rownum != $numrows) {
      $middle = 'views-row-middle';
    }
  ?>
  <div class="<?php print $classes[$id].' '.$middle; ?> clearfix">
    <?php print $row; $rownum++; ?>
  </div>
<?php endforeach; ?>
