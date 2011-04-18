<?php if (arg(1) == '29050' && arg(0) == 'node') { print $content; } else { ?>
<?php if (!$page) {//Teaser?>
  <div class="node <?=$node->type ?>">
      <h2><?=l($title,'node/'.$node->nid);?></h2>
    <?=$content;?>
  </div>
<? } else {//Full view ?>
  <div class="node <?=$node->type ?>">
      <h2><?=$title;?></h2>
<? if (user_access('administer nodes')) {
  print '<pre>'.print_r($node,TRUE).'</pre>';
}
?>
    <?=$content;?>
  </div>
    <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>
<? } }?>
