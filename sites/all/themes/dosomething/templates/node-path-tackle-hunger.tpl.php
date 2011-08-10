<div class="node <?=$node->type ?>">
  <h2><?=substr($title, 0, strpos($title, ' |'));?></h2>
<?php
       $enc_fullurl = urlencode('http://www.dosomething.org/'.$node->path);
       $suffix = '...#tacklehunger ';
       $description = $node->body;
       $description = preg_replace('/<[^>]*>/','',$description);
       $all_text = substr($description,0,100-strlen($suffix)).$suffix;
       $all_text = str_replace('"','&quot;',$all_text);
?>
  <?php drupal_add_js(path_to_theme().'/js/FB.Share', 'theme', 'footer', TRUE);?>
  <?php
  drupal_add_js(

    'function rewriteFB() {
      $'."('a[name=fb_share]').attr('href','http://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=".$enc_fullurl."&username=dosomething');
      }
  window.onload=rewriteFB;
  ",'inline','footer',TRUE);
  ?>
  <script type="text/javascript">
    var addthis_config = {"data_track_clickback":true};
    </script>
  <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=dosomething"></script>
  <?php print theme('addthis'); ?>

    <div class="twitter_button" style="float:right; padding: 0px 0px 0px 10px;">
       <a class="addthis_button_tweet" tw:count="vertical" tw:related="dosomething:DoSomething.org" tw:via="dosomething" tw:text="<?=$all_text?>"></a>
    </div>
    <div class="fb_button" style="float:right; padding: 0px 3px 3px 3px;">
       <a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php">Share</a>
    </div>
  <?php //print '<pre>'.print_r($node, TRUE).'</pre>'; ?>
  <?php print $node->body; ?>
</div>
