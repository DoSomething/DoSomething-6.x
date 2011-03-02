<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">

  <?php $the_cause = reset($node->taxonomy)->name; ?>
  <h3><a href="/whatsyourthing/<?php print str_replace(' ', '+', $the_cause); ?>"><?php print $the_cause; ?></a></h3>
  <div class="content">
    <?php print $content; ?>
  </div>

</div> <!-- /.node -->
