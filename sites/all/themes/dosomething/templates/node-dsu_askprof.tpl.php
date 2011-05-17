<?php
  $terms = taxonomy_node_get_terms($node->nid);
  $list = array();
  foreach($terms as $term) {
    if ($term->vid == 18) {
      $list[] = '<a href="/u/majors/'.str_replace(' ', '+', $term->name).'">'.$term->name.'</a>';
    }
  }
?>

<div id="guide-top">
  <div id="breadcrumbs"><a href="/u">Home</a> &gt; <?= implode(' | ', $list)?></div>
  <div id="sharing"><?=theme('addthis')?></div>
</div>

<div class="node <?=$node->type ?>">
  <h2>Question</h2>
  <p><?=$node->title?></p>
  <?=$node->content['fivestar_widget']['#value']?>
</div>
