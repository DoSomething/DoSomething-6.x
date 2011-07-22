<?php
  drupal_add_js(path_to_theme() . '/js/jcarousel/lib/jquery.jcarousel.min.js');
  drupal_add_css(path_to_theme() . '/js/jcarousel/style.css');
  drupal_add_css(path_to_theme() . '/js/jcarousel/skins/dosomething/skin.css');
?>
<script type="text/javascript">
$(document).ready(function() {
  $('#project-carousel').jcarousel();
});
</script>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">
  <h3><?=$field_campaign_project_type[0]['value'];?></h3>
  <a href="/scavenger-hunt/leaderboard?team_name=<?=$title;?>&zip=<?=$location['postal_code'];?>"><img src="/sites/all/micro/hunt/logo.jpg" style="height: 75px;"/>&lt;&lt; Back to our team page</a>
  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <div class="content">
    <div class="project-media">
    <?php if ($field_campaign_pictures && $field_campaign_pictures[0]['filepath']):
       $first_photo = array_shift($field_campaign_pictures);
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
      <? if (sizeof($field_campaign_pictures)): ?>
      <ul id="project-carousel" class="jcarousel-skin-dosomething">
        <?php foreach($field_campaign_pictures as $photo) : ?>
          <li><?php print $photo['view']; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; endif; ?>
    </div>

    <?php if ($field_campaign_video[0]['embed']):?>
    <br/><a href="#video">Check out our videos!</a>
    <?php endif;?>

    <? if ($field_campaign_essay_how[0]['value']): ?>
    <div class="box blue">
      <h2>how we tackled the challenge:</h2>
      <?php print check_markup($field_campaign_essay_how[0]['value']); ?>
    </div>
    <? endif; ?>

    <? if ($field_campaign_essay_why[0]['value']): ?>
      <div class="box">
      <h2>why it's important:</h2>
        <?php print check_markup($field_campaign_essay_why[0]['value']); ?>
      </div>
    <? endif; ?>

    <? if ($field_campaign_essay_challenge[0]['value']): ?>
    <div class="box">
    <h2>the biggest challenge:</h2>
      <?php print check_markup($field_campaign_essay_challenge[0]['value']); ?>
    </div>
    <? endif; ?>

     <?php
        if ($field_campaign_video && $field_campaign_video[0]['embed']) { ?>
          <div class="box">
          <h2 id="video">videos:</h2>
          <b>Youtube user:</b> <?=$field_youtube_username[0]['value'];?><br><br>
        <?
          foreach ($field_campaign_video as $video) {
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
