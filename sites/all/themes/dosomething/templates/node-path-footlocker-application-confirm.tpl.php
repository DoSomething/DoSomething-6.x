<?php
    $wf_nid = '688464';
    $rec_nid = '688536';
    
    $sid = $_GET['sid'];
    
    module_load_include('inc', 'webform', 'includes/webform.submissions');
    $submission = webform_get_submission($wf_nid, $sid);
    
	$recommendations = webform_get_submissions($rec_nid);
	// find webforms for this submission, and set ${recommendation_type} = TRUE
	$valid_recs = array();
	foreach ($recommendations as $rec)
		if ($rec->data[15]['value'][0] == $sid)
			${$rec->data[16]['value'][0]} = TRUE;
	
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
<li>Character Recommendation: <?=$submission->data[32]['value'][0];?> (<?=$submission->data[35]['value'][0]; ?>)
    <br /><?=$character?$yes:$no;?></li>
<li>Athletic Recommendation: <?=$submission->data[36]['value'][0]; ?> (<?=$submission->data[39]['value'][0]; ?>)
<br /><?=$athletic?$yes:$no;?></li>
</ul>
</fieldset>
</div>