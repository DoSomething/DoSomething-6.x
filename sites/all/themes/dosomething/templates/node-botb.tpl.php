<?php if (!$page) { //Teaser ?>
  <div class="video-teaser">
    <h3><?=$node->title;?></h3>
    <div class="video"><?=$node->field_botb_video[0]['view'];?></div>
    <p><?=neat_trim($node->field_botb_music_education[0]['view'], 250, ' '.l("...", 'node/'.$node->nid));?></p>
  </div>
<? } else { //Full view ?>

	<div class="botbBody botbEntry">
    <div class="video"><?=$node->field_botb_video[0]['view'];?></div>
    <h2 style="margin: 0px;"><?=$node->field_campaign_group[0]['view'];?></h2>
    <?php global $user; if ($user->uid == $node->uid) : ?>
      <p style="font-size: 0.9em;"><?php print l('[Edit]', 'node/'.$node->nid.'/edit'); ?></p>
    <?php endif; ?>
    <p style="margin-top: 0px;"><?=$node->field_campaign_city[0]['view'].', '.$node->field_campaign_state[0]['view'];?></p>
    <div class="info">
    <p><span class="question">How did you spread the word about your Battle of the Bands video?</span> <?=$node->field_botb_outreach[0]['view'];?></p>
    <p><span class="question">Did you use social media to get more eyes on your video? How?</span> <?=$node->field_botb_social_media[0]['view'];?></p>
    <p><span class="question">Why is music education important to you?</span> <?=$node->field_botb_music_education[0]['view'];?></p>
    <p><span class="question">Tell us more about the group or type of musical performance in your video:</span> <?=$node->field_botb_performance[0]['view'];?></p>
    <p><span class="question">Anything else we should know about your Battle of the Bands video project?</span> <?=$node->field_botb_other[0]['view'];?></p>
    </div>
    <div style="clear: both;"></div>
    <?php //print $node->content['fivestar_widget']['#value'];?>
    <?php if(false) : //user_access('administer grant applications')) : ?>
      <div class="judging form" style="width: 600px; margin: 0.5em auto; padding: 10px; background-color:white;">
        <iframe src="http://spreadsheets.google.com/embeddedform?formkey=dFhkUC0yQmEtdWl1clNkSzBndFphSVE6MQ" width="600" height="1500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
      </div>
    <?php endif; ?>
	</div>

<?php } ?>
