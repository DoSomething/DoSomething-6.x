<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">

  <?php

    /* kind of awkward way to retrieve cause/issue info */

    $cause_name = arg(1);
    $cause_tid = db_result(db_query("SELECT td.tid FROM {term_data} td INNER JOIN {term_hierarchy} th ON td.tid = th.tid WHERE parent=0 AND vid=5 AND name='%s' LIMIT 1", $cause_name));
    if ($cause_tid) {
      $result = db_query("SELECT td.tid, name FROM {term_data} td INNER JOIN {term_hierarchy} th ON td.tid = th.tid WHERE parent=%d AND vid=5 AND name='%s' LIMIT 1", $cause_tid, trim($node->title));
      $issue_info = db_fetch_object($result);
      $issue_name = $issue_info->name;
      $issue_tid = $issue_info->tid;
    }

  ?>

  <a href="/whatsyourthing/<?php print str_replace(' ', '+', $cause_name.'/'.$issue_name); ?>"><h3><?php print $issue_name; ?></h3>
  <?php print $node->field_intro_text_photo[0]['view']; ?></a>
  <p><?php print node_teaser(strip_tags($node->field_intro_text[0]['value']), NULL, 120); ?></p>

<? if ($cause_name == 'Animal Welfare' ) { ?>
    <br style="clear:both">
    <script>utmx_section("<?=$issue_name;?>")</script>
    <a href='/issue_resources/<?=str_replace(' ', '+', $issue_name);?>'><img style="width: 80px; padding-top: 8px;" src='/nd/getthefacts.jpg'/ alt="Get the facts!"></a>
    <br style="clear:both">
    <a href='/issue_action_guides/<?=str_replace(' ', '+', $issue_name);?>'><img style="width: 70px; padding-top: 5px;" src='/nd/takeaction.jpg' alt="Take action!"/></a>
    </noscript>

<? } ?>


</div> <!-- /.node -->
