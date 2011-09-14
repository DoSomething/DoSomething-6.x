<?php
    $wf_nid = '688464';
    $rec_nid = '688536';
    
    $sid = $_GET['sid'];
    
    module_load_include('inc', 'webform', 'includes/webform.submissions');
    $submission = webform_get_submission($wf_nid, $sid);
    
    $q = "SELECT sid FROM {webform_submitted_data} WHERE cid=1 AND data=$sid";
    $rs = db_query($q);
    $rec_q = '';
    while ($rec = db_fetch_array($rs))
        $req_q.= $rec['sid'].',';
    $req_q = rtrim($req_q, ',');
    
    $q = "SELECT sid FROM {webform_submitted_data} WHERE nid=$rec_nid AND cid=2 AND data='character' AND sid IN ($req_q)";
    $rs = db_query($q);
    $character = (mysql_num_rows($rs) > 0);
    
    $q = "SELECT sid FROM {webform_submitted_data} WHERE nid=$rec_nid AND cid=2 AND data='athletic' AND sid IN ($req_q)";
    $rs = db_query($q);
    $athletic = (mysql_num_rows($rs) > 0);
    
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