<? drupal_set_html_head('<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>');?>

<?
if ($node->locations[0]) {
  $lat_lng_str = $node->locations[0]['latitude'].','.$node->locations[0]['longitude'];
?>
  <script type="text/javascript"> 
    function initialize() {
      var myLatlng = new google.maps.LatLng(<?=$lat_lng_str;?>);
      var myOptions = {
        zoom: 4,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
      
      var marker = new google.maps.Marker({
          position: myLatlng, 
          map: map,
          title:"<?=$title;?>"
      });   
    }
    $(document).ready(function() {
      initialize();
    });
  </script> 
<? } ?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">

  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <div class="content clear-block">
    <?php print $field_club_picture[0]['view']; ?>
    <?php print $cause_links; ?>
    <? if (user_access('administer nodes')) { ?>
<div class="social-share">
<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=152294931506668&amp;xfbml=1"></script><fb:like href="" send="false" width="200" show_faces="true" font=""></fb:like>
<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="dosomething">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
</div>

<? } ?>
    <strong>Location: </strong><?=$field_club_city[0]['view'].', '.$field_club_state[0]['view']; ?>
    <p><?php print $node->og_description; ?></p>
    <h3>Projects</h3>
    <?=views_embed_view('projects_search', 'block_2', $node->nid);?>
    <h3>Location</h3>
    <div id="map_canvas"></div>
  </div>

  <?php //print $content; ?>

  <?php print $links; ?>

</div> <!-- /.node -->
