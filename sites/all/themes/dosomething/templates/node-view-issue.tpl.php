<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">

  <div class="issue-intro">
    <?php print theme('imagecache', '111', $node->field_intro_text_photo[0]['filepath']); ?>
    <h2><?php print $title; ?></h2>
    <p><?php print $node->field_intro_text[0]['value']; ?></p>
  </div>

  <?php
    $nids = array();
    foreach ($node->field_featured_items as $item) {
      $nids[] = $item['safe']['nid'];
    }
    print dosomething_dhtml_slider($nids, NULL);
  ?>

  <div class="blue learn">
    <?php print theme('imagecache', '207x138', $node->field_learn_photo[0]['filepath']); ?>
    <h3>Top Resources</h3>
    <ol class="learn">
      <?php foreach ($node->field_learn_items as $item) : 
              if ($item['safe']['status'] == 1) { ?> 
        <li><span><?php print l($item['safe']['title'], 'node/'.$item['safe']['nid']); ?></span></li>
      <?php   }
            endforeach; ?>
    </ol>
    <p><a href="/issue_resources/<?=str_replace(' ','+',arg(2));?>" class="more">More resources</a></p>
  </div>

  <div class="blue actnow">
    <?php print theme('imagecache', '207x138', $node->field_act_now_photo[0]['filepath']); ?>
    <h3>Top Ways To Take Action</h3>
    <ol class="act now">
      <?php foreach ($node->field_act_now_items as $item) : 
              if ($item['safe']['status'] == 1) { ?>
        <li><span><?php print l($item['safe']['title'], 'node/'.$item['safe']['nid']); ?></span></li>
      <?php   }
            endforeach; ?>
    </ol>
    <p><a href="/issue_action_guides/<?=str_replace(' ','+',arg(2));?>" class="more">More ways to make a difference</a></p>
  </div>

</div> <!-- /.node -->
