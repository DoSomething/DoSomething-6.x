<?php
  global $dsu_guide;
  $dsu_guide = true;
?>

<?php if (!$page) : // teaser ?>

  <div class="node <?=$node->type?> <?=$zebra?>">
    <div class="guide-teaser">
      <?php if (!empty($node->field_dsu_picture[0]['filepath'])) {
        print theme('imagecache', 'dsu_guide_teaser', $node->field_dsu_picture[0]['filepath']);
      } else {
        print '<img src="/nd/dsu/u.jpg" />';
      } ?>
    </div>
    <h2><?=l($node->title, 'node/'.$node->nid)?></h2>
    <div class="guide-teaser-body">
      <?=theme('echoditto_teaser', $node->content['body']['#value'], 150, 150)?>
    </div>
    <div style="clear: both;"></div>
  </div>

<?php else: // full page view ?>

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
    <div id="sharing"><?=theme('addthis', 'addthis_32x32_style')?></div>
  </div>

  <div class="node <?=$node->type ?> <?=str_replace(' ', '-', $node->field_dsu_guide_type[0]['value'])?>">

    <h2><?=$node->title?></h2>
    
    <div id="guide-share">
<!--
      <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
      <iframe src="http://www.facebook.com/plugins/like.php?href=<?=rawurlencode('http://www.dosomething.org/'.drupal_get_path_alias('node/'.$node->nid))?>&amp;layout=button_count&amp;show_faces=true&amp;width=200&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe>
-->
    </div>

    <?php if ($node->field_dsu_guide_type[0]['value'] != 'video') : ?>

      <div class="guide-image">
        <?php if (!empty($node->field_dsu_picture[0]['filepath'])) {
          print theme('imagecache', 'dsu_guide_teaser', $node->field_dsu_picture[0]['filepath']);
        } else {
          print '<img src="/nd/dsu/u.jpg" />';
        } ?>
      </div>

    <?php else: ?>

      <div class="guide-video">
        <?= $node->field_dsu_video[0]['view'] ?>
      </div>
      <a href="http://dosomethingu.blip.tv/">
         <img src="/nd/dsu/blip.gif" style="float:right; padding: 0px 10px;"/>
      </a>
      <a href="http://www.youtube.com/user/DoSomethingU?feature=mhum">
         <img src="/nd/dsu/youtube.gif" style="float:right; padding: 0px 6px;"/>
      </a>
      <a href="http://itunes.apple.com/us/podcast/dosomethingu/id407097154">
         <img src="/nd/dsu/itunes.gif" style="float:right;"/>
      </a>
      <a href="/u/video">See more videos</a>

      <div style="clear:both"></div>
    <?php endif; ?>

    <div class="guide-body">
      <?=$node->content['body']['#value']?>
    </div>

  </div>

<?php endif; ?>
