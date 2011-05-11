<?php if (!$page) {//Teaser?>
  <div class="node <?=$node->type ?>">
    <a rel="lightbox" href="<?php print '/'.$node->field_bumper_sticker_design[0]['filepath']; ?>"><?php print theme('imagecache','bumper_sticker',$node->field_bumper_sticker_design[0]['filepath'],'','');?></a>
    <?php $fivestarwidget = fivestar_widget_form($node); print $fivestarwidget; ?>
    <?php //print '<pre>'.print_r($node, TRUE).'</pre>'; ?>
  </div>
<? } else {//Full view ?>
  <div class="node <?=$node->type ?>">
      <h2><?=$title;?></h2>
    <?=$content;?>
  </div>
    <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>
<? } ?>
