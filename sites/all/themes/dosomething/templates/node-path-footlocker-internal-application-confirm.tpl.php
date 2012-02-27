<?php
    $wf_nid = '739245';
    $rec_nid = '739273';
    
    $sid = $_GET['sid'];
    
    module_load_include('inc', 'webform', 'includes/webform.submissions');
    $submission = webform_get_submission($wf_nid, $sid);
    
	$recommendations = webform_get_submissions($rec_nid);
	// find webforms for this submission, and set ${recommendation_type} = TRUE
	$valid_recs = array();
	foreach ($recommendations as $rec) {
    if ($rec->data[1]['value'][0] == $sid) {
      $character = TRUE;
    }
  }
    
	
    $yes = '<div class="yes-box"></div> Recommendation received';
    $no = '<div class="no-box"></div> Recommendation not yet received';
?>

<div class="node">

<h2 class="title"><?=$title;?></h2>
<fieldset style="text-align: center; padding-left: 0;">
<?=$content;?>
<p><div class="button-wrap" style="width: 500px;"><?=l('Review your scholarship application', "node/$wf_nid/submission/$sid", array('attributes' => array('class' => 'funky-button arial-mini')));?></div></p>
</fieldset>
<fieldset>
<legend>Recommendation Status</legend>
<ul>
<li>Recommendation: <?=$submission->data[26]['value'][0];?> (<?=$submission->data[27]['value'][0]; ?>)
    <br /><?=$character?$yes:$no;?></li>
</ul>
</fieldset>
</div>
