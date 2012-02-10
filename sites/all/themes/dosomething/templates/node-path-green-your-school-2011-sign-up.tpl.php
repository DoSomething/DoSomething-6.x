<?php if (!$page) {//Teaser?>
  <div class="node <?=$node->type ?>">
      <h2><?=l($title,'node/'.$node->nid);?></h2>
    <?=$content;?>
  </div>
<? } else {//Full view ?>
  <div class="node <?=$node->type ?>">
      <h2 class="title"><?=$title;?></h2>
    <?=$node->content['body']['#value'];?>
  </div>
<? } ?>
