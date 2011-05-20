<?php
  $badges = dosomething_badge_check($node);
  drupal_add_js(path_to_theme() . '/js/jcarousel/lib/jquery.jcarousel.min.js');
  drupal_add_js(path_to_theme() . '/js/project.js');
  drupal_add_css(path_to_theme() . '/js/jcarousel/style.css');
  drupal_add_css(path_to_theme() . '/js/jcarousel/skins/dosomething/skin.css');
?>

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

  <?php if ($display_submitted) : ?>
    <div class="meta">
        <span class="submitted"><?php print $updated; ?></span>
    </div>
  <?php endif; ?>

  <div class="content">
    <?=theme('badges',$badges);?>
    <div class="project-media">
    <?php if ($field_project_photo && $field_project_photo[0]['filepath']):
       $first_photo = array_shift($field_project_photo);
       $full_size = image_get_info('/var/www/html/'.$first_photo['filepath']);
       $resized_path = imagecache_create_path('project_highlighted_photo', $first_photo['filepath']);
       $resized = image_get_info('/var/www/html/'.$resized_path);
       $full_size['file_size'] = 0;
       $resized['file_size'] = 0;
       //$main_photo = $first_photo['filepath'];
       //if (! array_identical($full_size, $resized)) {
       //  $main_photo = $resized_path;
       //}
       $main_photo = $resized_path;
       /*dpm($first_photo);
       dpm($resized_path);
       dpm($resized);
       dpm($full_size);*/
       ?>
       <a class="project-photo-wrapper" rel="lightbox[projectphotos]" title="<?=$first_photo['title'];?>" href="/<?=$first_photo['filepath'];?>">
         <img src="/<?=$main_photo;?>"/></a>
      <? if (sizeof($field_project_photo)): ?>
      <ul id="project-carousel" class="jcarousel-skin-dosomething">
        <?php foreach($field_project_photo as $photo) : ?>
          <li><?php print $photo['view']; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; endif; ?>
    </div>

    <?php if ($field_embedded_video[0]['embed']):?>
    <br/><a href="#video">Check out our videos!</a>
    <?php endif;?>


    <div class="box blue">
      <h2>the problem:</h2>
      <?php print check_markup($field_essay_see_it[0]['value']); ?>
    </div>

    <div id="stats" class="box blue">
      <h2>vital stats:</h2>
      <p>people impacted:</p>
      <span class="number"><?=number_format($field_num_people_impacted[0]['value']);?></span>
      <p>people involved:</p>
      <span class="number"><?=number_format($field_num_people_involved[0]['value']);?></span>
      <br/>
    </div>
    <div id="map_canvas"></div>

    <div style="clear:both"></div>

    <div class="box">
    <h2>why it's important:</h2>
      <?php print check_markup($field_essay_believe_it[0]['value']); ?>
    </div>

    <div class="box">
    <h2>the plan of action:</h2>
      <?php print check_markup($field_essay_build_it[0]['value']); ?>
    </div>

    <div class="box">
    <h2>how you can get involved:</h2>
      <?php print check_markup($field_others_involved[0]['value']); ?>
    </div>
    <h2>project updates:</h2>
    <div class="box">
      <?php print views_embed_view('project_updates', 'block_1', $nid); ?>
    </div>

    <div class="box">
      <?php print views_embed_view('project_updates', 'default', $nid); ?>
    </div>

     <?php
        if ($field_embedded_video && $field_embedded_video[0]['embed']) { ?>
          <div class="box">
          <h2 id="video">videos:</h2>
        <?
          foreach ($field_embedded_video as $video) {
            if ($video['view']) {
              print $video['view'];
            } else {
              print '<a target="_blank" href="'.$video['embed'].'">'.$video['embed'].'</a>';
            }
          } ?>
        </div>
    <?  } ?>


  </div>

  <?php print $links; ?>

</div> <!-- /.node -->
