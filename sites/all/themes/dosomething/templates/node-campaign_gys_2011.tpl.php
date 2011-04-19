<?php

$current_path = drupal_get_path_alias(request_uri());
$signup_node = node_load($node->field_signup_nid[0]['value']);
$school_page_link = '/green-your-school/browse-schools?name='.$title.'&zip='.$signup_node->locations[0]['postal_code'];

$nodePath = drupal_get_path_alias('node/'.$node->nid);

if (!$page) {//Teaser
  $teaser_image = '';
  if (isset($node->field_campaign_pictures[0])) {
    $teaser_image = '<a href="/'.$nodePath.'">'.
                    theme('imagecache','projects_page_thumbnail',$node->field_campaign_pictures[0]['filepath'],'','').
                    '</a>';
  } elseif ($node->field_campaign_video[0]['embed']) {
    $teaser_image = $node->field_campaign_video[0]['view'];
  } else {
    $teaser_image = '<a href="/'.$nodePath.'">'.
                    '<img src="/nd/projects/campaign_badges/'.$node->type.'.png"/>'.
                    '</a>';
  }
?>
  <div class="node <?=$node->type;?> teaser">
      <?=$teaser_image;?><a href="/<?=$nodePath;?>"><h2><?=$title;?></h2></a>
    <? //print print_r($node->field_campaign_essay_how,TRUE);?>
    <?
  //print '<pre>'.print_r ($node->field_campaign_photos,TRUE).'</pre>';
  //

?>
    <p><?=substr($node->field_campaign_essay_how[0]['value'],0,175).'...';?></p>
  </div>
<? } else {//Full view ?>
  <link rel="stylesheet" href="/nd/projects/campaign_projects.css" type="text/css" media="all" />
  <div class="node <?=$node->type ?> campaign project">
      <a href="<?=$school_page_link;?>"><h2 class="title"><?=$title;?></h2></a>
      <div id="topicons">
      <div class="campaignbadge">
      <a href="<?=$school_page_link;?>"><img class="badge" src="/nd/iyg-2011/logo.png"/></a>
      </div>
     <div class="share facebook"> <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.dosomething.org<?=urlencode($current_path);?>&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:65px;" allowTransparency="true"></iframe> </div>
<div class="share twitter"> <a href="http://twitter.com/share" class="twitter-share-button" data-text="Vote for my Green Your School Challenge project on DoSomething.org !  #GreenYourSchool" data-count="vertical" data-related="dosomething:Using the power of online to get teens to do good stuff offline.">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> </div>
     </div>
<?
  $photos = $node->field_campaign_pictures;
  if (sizeof($photos) > 0) {
    print theme('imagecache','project_highlighted_photo',$photos[0]['filepath'],'','');
  } else {
    print theme('imagecache','project_highlighted_photo','nd/iyg-2011/free-fb-large.png','','');
  }
  $fields = array(
       'field_campaign_essay_how' => 'How did your project unfold?',
       'field_campaign_essay_why' => 'Why is greening your school important to you?',
       'field_iyg_technology' => 'How did you use technology to green your school?',
       'field_campaign_essay_challenge' => 'What was the biggest challenge?',
   );
  foreach ($fields as $field => $heading) {
    $text = $node->{$field}[0]['value'];
    if ($text) {
      print '<div class="blue box">';
      print '<h2>'.$heading.'</h2>';
      print '<div class="essay">'.check_markup($text,1,FALSE).'</div></div>';
    }
  }
  foreach ($node->field_campaign_video as $i => $video) {
    print $video['view'];
  }
?> 
<?
//print '<pre>'.print_r ($node,TRUE).'</pre>';
?>
 </div>
<? } ?>
