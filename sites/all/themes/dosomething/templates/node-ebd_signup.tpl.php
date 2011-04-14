<?php

$box_count = $node->field_what_is_your_goal_number_[0]['value'];

if (!$page) {//Teaser?>
  <div class="node <?=$node->type ?>">
      <h3><?=l($title,'node/'.$node->nid,NULL,NULL,NULL,FALSE,TRUE);?>
      <? if ($box_count) { ?>
      <span class="box-count">(<?=$box_count;?> boxes)</span>
      <? } ?>
      </h3>
      <p><?=trim(substr(preg_replace('/<[^>]*?>/', '', $node->content['body']['#value']),0,250)).'...';?><p>
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
<? } ?>
