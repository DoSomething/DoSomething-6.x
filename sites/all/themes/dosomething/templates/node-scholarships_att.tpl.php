<?php

global $user;
$photos = $node->field_scholarship_att_pic;
$url = drupal_get_path_alias('node/'.$node->nid);

if (!$page) {//Teaser?>
  <div class="node-teaser <?=$node->type ?>">
      <h3 class="highlight title"><a href="/<?=$url;?>"><?=ucwords($title);?></a></h3><br/>
      <div class="photo-and-essay">
      <?
         print '<a href="/'.$url.'">';
         if (sizeof($photos) > 0 && $photos[0]['filepath']) {
           print theme('imagecache','project_thumbnail',$photos[0]['filepath'],'','');
         } elseif ($node->field_scholarship_att_video[0]['embed']) {
           print $node->field_scholarship_att_video[0]['view'];
         } else {
           print '<img class="default" src="/nd/att/heart.png"/>';
         }
         print '</a>';

        $teaser_txt = $node->field_scholarship_att_whyyou[0]['value'];
        $max_teaser_len = 250;
        if (strlen($teaser_txt) > $max_teaser_len) {
          $teaser_txt = substr($teaser_txt,0,250) . ' ' .l('...', 'node/'.$node->nid);
        }
        print '<span class="highlight">Why me? </span>';
        print '<p>'.$teaser_txt.'</p>';
        print '</div>';
       if ($node->field_scholarship_att_song[0]['value']) {
         print '<span class="highlight">Favorite song: </span>';
         print $node->field_scholarship_att_song[0]['value'];
       } 
       if ($node->field_scholarship_att_crush[0]['value']) {
         print '<br/><span class="highlight">Celeb crush: </span>';
         print $node->field_scholarship_att_crush[0]['value'];
       }
     ?>
  </div>
<? } else {//Full view ?>
  <div class="node <?=$node->type ?>">

<div class="border2 photos first blue-trans relative">
<img class="header-icon tail" src="/nd/att/header-orange-tail.png"/>
<div class="textbox2">
<h2 id="applicant-name"><?=ucwords($title);?>
<img class="header-icon cloud" src="/nd/att/header-icon-cloud.png"/>
</h2>

<?
if (sizeof($photos) > 0) {
  print theme('imagecache','project_highlighted_photo',$photos[0]['filepath'],'','');
  for ($i = 1; $i < sizeof($photos); $i++) {
    $photo = $photos[$i];
    print theme('imagecache','project_thumbnail',$photo['filepath'],'','');
  }
}
if ($user->uid && $user->uid == $node->uid) {
  print '<a href="/node/'.$node->nid.'/edit" class="edit-link">EDIT APPLICATION</a>';
}

?>

<h3>Why me?</h3>
<?=check_markup($node->field_scholarship_att_whyyou[0]['value'],1,FALSE);?>
<? if ($node->field_scholarship_att_song[0]['value']) {?>
<h3>My favorite song to rock out to is...</h3>
<?=check_markup($node->field_scholarship_att_song[0]['value'],1,FALSE);?>
<? } ?>
<? if ($node->field_scholarship_att_crush[0]['value']) {?>
<h3>My celebrity crush is DEFINITELY:</h3>
<?=check_markup($node->field_scholarship_att_crush[0]['value'],1,FALSE);?>
<? } ?>
<? if ($node->field_scholarship_att_video[0]['embed']) {
     print '<h3>My video</h3>';
     print $node->field_scholarship_att_video[0]['view'];
   }
?>
<? if (user_access('administer nodes')):?>
<h3>Recommendation? <span style="color:red">(admin only)</span></h3>
<?=check_markup($node->field_scholarship_att_rec[0]['value'],1,FALSE);?>
<br/><br/>
<h3>User information <span style="color:red">(admin only)</span></h3>
<?
  $u = user_load(array('uid' => $node->uid));
  print l($node->name,'user/'.$node->uid).'<br/>';
  print '<br/>';
  print $u->profile_fname.' '.$u->profile_lname.'<br/>';
  print $u->profile_address1.'<br/>';
  if ($u->profile_address2)
    print $u->profile_address2.'<br/>';
  print $u->profile_city.', '.$u->profile_state.' '.$u->profile_zip.'<br/>';
  print '<br/>';
  print $u->profile_mail.'<br/>';
  print 'cell: '.$u->profile_cell.'<br/>';
  print 'bday: '.$u->profile_bday.'<br/>';



endif;?>

</div>
</div>

  <div id="att-contact" class="bottom">
    <a target="_blank" href="http://www.att.com"><img id="presented" src='/nd/att/check-out-att.png'/></a>
    <br/>
    <a target="_blank" href="http://www.facebook.com/att"><img class="media first" src="/nd/att/facebook-small.png"/></a>
    <a target="_blank" href="http://www.twitter.com/att"><img class="media" src="/nd/att/twitter-small.png"/></a>
    <a target="_blank" href="http://www.youtube.com/shareatt"><img class="media" src="/nd/att/youtube-small.png"/></a>
  </div>


  </div>
<?

} ?>
