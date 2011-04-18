<?php

$current_path = drupal_get_path_alias(request_uri());

$nodePath = drupal_get_path_alias('node/'.$node->nid);

$facebook_iframe = '';

$photos = $node->field_campaign_pictures;
if (!$page) {
  $teaser_image = '';
  if (sizeof($photos) > 0) {
    $teaser_image = '<a href="/'.$nodePath.'">'.
                    theme('imagecache','projects_page_thumbnail',$photos[0]['filepath'],'','').
                    '</a>';
  } elseif ($node->field_campaign_video[0]['embed']) {
    $teaser_image = $node->field_campaign_video[0]['view'];
  }

  if (! $teaser_image) {
    $teaser_image = '<a href="/'.$nodePath.'">'.
                    '<img src="/nd/projects/campaign_badges/'.$node->type.'.png"></a>';
  }

  $teaser_txt = $node->field_campaign_essay_why[0]['value'];  //why is <cause> important to you
  if (! $teaser_txt) {
    $teaser_txt = $node->field_campaign_essay_how[0]['value']; //best part
  }
  $max_teaser_len = 250;
  if (strlen($teaser_txt) > $max_teaser_len) {
    $teaser_txt = substr($teaser_txt,0,250) . ' ' .l('...', 'node/'.$node->nid);
  }

?>
  <div class="node project project-teaser <?=$zebra;?>">
      <div class="project-photo"><?=$teaser_image;?></div>
      <h3><?=l($title,'node/'.$node->nid,NULL,NULL,NULL,FALSE,TRUE);?></h3>
    <p><?=$teaser_txt;?></p>
    <div class="clear"></div>
  </div>
<? } else {//Full view ?>
  <div class="node <?=$node->type ?> campaign project">
      <h2 class="title"><?=$title;?></h2>
      <div id="topicons">
        <div class="campaignbadge">
        <a href="/epic-book-drive/gallery" title="Epic Book Drive">
        <img class="badge" src="/nd/projects/campaign_badges/<?=$node->type;?>.png"/>
        </a>
        </div>
        <div class="share facebook">
        <!--<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="" show_faces="true" width="200" font=""></fb:like>-->
        <!--<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.dosomething.org<?=urlencode($current_path);?>&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:65px;" allowTransparency="true"></iframe>-->
        <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.dosomething.org<?=urlencode($current_path);?>&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:83px;" allowTransparency="true"></iframe>
        </div>
        <div class="share twitter">
<a href="http://twitter.com/share" class="twitter-share-button" data-text="Help save music and vote for <?=$node->title;?> on DoSomething.org !  #BattleForTheBands" data-count="vertical" data-related="dosomething:Using the power of online to get teens to do good stuff offline.">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        </div>
      </div>
  <div style="clear:both"></div>
  <link rel="stylesheet" href="/nd/projects/campaign_projects.css" type="text/css" media="all" />
<?

    if (sizeof($photos) > 0) {
      print theme('imagecache','project_highlighted_photo',$photos[0]['filepath'],'','');
    }/* else {
      print '<div style="text-align: center;">'.theme('imagecache','project_highlighted_photo','nd/ebd/epic-logo.png','','').'</div>';
    }*/

     $fields = array(
       0 => array( 'f' => 'field_campaign_essay_why', 't' => 'Why is educational equality important to you?'),
       1 => array ('f' => 'field_campaign_essay_how','t' => 'How did your book drive come together?'),
       2 => array( 'f' => 'field_campaign_essay_challenge', 't' => 'What was the biggest challenge?'),
       3 => array('f' => 'field_campaign_anything_else', 't' => 'Anything else awesome we should know?'),
  );
  foreach ($fields as $i => $farray) {
    $field = $farray['f'];
    $heading = $farray['t'];
    $text = $node->{$field}[0]['value'];
    if ($text) {
      print '<div class="blue box">';
      print '<h2>'.$heading.'</h2>';
      print '<div class="essay">'.check_markup($text,1,FALSE).'</div></div>';
    }
  }

  foreach ($node->field_campaign_video as $video) {
    print $video['view'];
  }
?> 
<?
//print '<pre>'.print_r ($node,TRUE).'</pre>';
?>
 </div>
<? } ?>
