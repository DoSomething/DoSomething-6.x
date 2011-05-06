<?php

$current_path = drupal_get_path_alias(request_uri());

$nodePath = drupal_get_path_alias('node/'.$node->nid);
global $user;
$user = user_load(array('uid' => $user->uid));

$type = 'project';
if ($node->field_botb_video[0]['embed']) {
  $type = 'video';
}

$facebook_iframe = '';



$photos = $node->field_campaign_pictures;
if (!$page) {
  $teaser_image = '';
//print '<pre>'.print_r($node->field_botb_video[0],TRUE).'</pre>';
  if ($type == 'project') {
    if (sizeof($photos) > 0) {
      $teaser_image = '<a href="/'.$nodePath.'">'.theme('imagecache','projects_page_thumbnail',$photos[0]['filepath'],'','').'</a>';
    } elseif ($node->field_campaign_video[0]['embed']) {
      $teaser_image = $node->field_campaign_video[0]['view'];
    }
  } elseif ($node->field_botb_video[0]['embed']) {
      $teaser_image = $node->field_botb_video[0]['view'];
  }

  if (! $teaser_image) {
    $teaser_image = '<a href="/'.$nodePath.'">'.
                    '<img src="/nd/botb/bftb-badge.png" style="background: white;"></a>';
  }

  $teaser_txt = $node->field_campaign_essay_why[0]['value'];
  if (! $teaser_txt) {
    $teaser_txt = $node->field_campaign_essay_how[0]['value'];
  }
  $max_teaser_len = 250;
  if (strlen($teaser_txt) > $max_teaser_len) {
    $teaser_txt = substr($teaser_txt,0,250) . ' ' .l('...', 'node/'.$node->nid);
  }

?>
  <div class="video-teaser">
      <div class="title-and-share">
      <h3><?=l($title,'node/'.$node->nid);?></h3>
<iframe class="facebook" src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.dosomething.org/<?=urlencode($nodePath);?>&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=dark&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:83px;" allowTransparency="true"></iframe>
     </div>
      <div class="video"><?=$teaser_image;?></div>
    <p><?=$teaser_txt;?></p>
  </div>
<? } else {
drupal_add_js(path_to_theme().'/js/FB.Share', 'theme', 'footer', TRUE);
//Full view ?>
  <div class="node <?=$node->type ?> campaign project">
      <div id="topicons">
        <div class="campaignbadge">
        <a href="/battle/gallery" title="Battle for the Bands"><img class="badge" src="/nd/botb/bftb-badge.png"/></a>
        </div>
        <div class="share facebook">
              <div class="fb_button" style="float:right; padding: 0px 3px 3px 3px;">
                 <a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php">Share</a>
              </div>

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
    if (in_array('grant reviewer', array_values($user->roles))) { ?>
       <a href="#judging-form" style="color:red;">Jump to the judging form</a><br/>
  <? }

  if ($type == 'video') {
    $view = $node->field_botb_video[0]['view'];
    if ($view) {
      print $view;
    } else {
      print '<a target="_blank" href="'.$node->field_botb_video[0]['embed'].'">View this video</a>';
    }
  } else {
    if (sizeof($photos) > 0) {
      print theme('imagecache','project_highlighted_photo',$photos[0]['filepath'],'','');
    } else {
      print '<div style="text-align: center;">'.theme('imagecache','project_highlighted_photo','nd/botb/bftb-logo_01.png','','').'</div>';
    }
  }

     $fields = array(
       0 => array( 'f' => 'field_campaign_essay_why', 't' => 'Why is music education important to you?'),
       1 => array ('f' => 'field_campaign_essay_how','t' => ''),
       2 => array( 'f' => 'field_campaign_essay_challenge', 't' => 'What was the biggest challenge?'),
       3 => array ('f' => 'field_botb_other', 't' => 'Anything else we should know?'),
  );
  if ($type == 'video') {
    $fields[1] = array('f' => 'field_campaign_essay_how', 't' => 'How did your video come together?');
  } else {
    $fields[1] = array('f' => 'field_campaign_essay_how', 't' => 'Describe your project.  What was the best part?');
    $fields[] = array('f' => 'field_why_run_advocacy_project', 't' => 'Why did you choose to run this advocacy project?');
    $fields[] = array('f' => 'field_botb_other', 't' => 'Anything else we should know?');
  }
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
    if (in_array('grant reviewer', array_values($user->roles))) { ?>
<div id="judge-wrap" style="padding-top: 360px">
<iframe id="judging-form" src="https://spreadsheets.google.com/embeddedform?formkey=dFhkUC0yQmEtdWl1clNkSzBndFphSVE6MQ" width="760" height="1301" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</div>

<? }

?> 
 </div>
<? } ?>
