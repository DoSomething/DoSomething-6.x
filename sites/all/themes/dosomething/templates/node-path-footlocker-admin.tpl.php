<?php
if (!$is_admin) {
  echo 'y u no admin?';
  return;
}

  $wf_nid = '688464';
  $rec_nid = '688536';
  $judge_nid = '711581';

  module_load_include('inc', 'webform', 'includes/webform.submissions');
  if (($cache = cache_get('footlocker_applications')) && !empty($cache->data) && ($incomplete = cache_get('footlocker_incomplete_applications')) && !empty($incomplete->data)) {
    $applications = $cache->data;
    $incompletes = $incomplete->data;
  }
  else {
    $applications = webform_get_submissions(array('nid' => $wf_nid, 'is_draft' => 0));
    $recommendations = webform_get_submissions($rec_nid);

    $character = array();
    $athletic = array();
    
    foreach ($recommendations as $rec) {
      if (preg_match('/character/i', $rec->data[16]['value'][0]))
        $character[] = $rec->data[15]['value'][0];
      else if (preg_match('/athletic/i', $rec->data[16]['value'][0]))
        $athletic[] = $rec->data[15]['value'][0];
    }

    $missing_rec = array();
    foreach ($applications as $key=>$app) {
      if (!in_array($app->sid, $character) || !in_array($app->sid, $athletic)) {
        $missing_rec[] = $key;
      }
    }
    $final_cache = array();
    foreach ($applications as $app) {
      $final_cache[$app->sid] = TRUE;
    }
    cache_set('footlocker_incomplete_applications', $missing_rec, 'cache', CACHE_TEMPORARY);
    cache_set('footlocker_applications', $final_cache, 'cache', CACHE_TEMPORARY);
    $applications = $final_cache;
  }

  $judgments = webform_get_submissions($judge_nid);

  if (!isset($_GET['cat'])) $cat = 'unjudged';
  else $cat = $_GET['cat'];

  $yes = array();
  $no = array();
  $maybe = array();

  foreach ($judgments as $j) {
    if (isset($applications[$j->data[1]['value'][0]])) {
      ${$j->data[2]['value'][0]}[] = $j->data[1]['value'][0];
      unset($applications[$j->data[1]['value'][0]]);
    }
  }

  $out = '';
  $total = 'over 9000';
  switch ($cat) {
    case 'unjudged':
      $groups = 3;
      $out .= '<a href="#g2">Group 2</a> | <a href="#g3">Group 3</a>';
      $out .= '<h2 id="g1">Group 1</h2>';
      $out1 = $out2 = '';
      foreach ($applications as $key=>$app) {
        $app = l($key, "node/$wf_nid/submission/$key", array('query' => 'destination=footlocker/admin?cat=unjudged'));
        if (in_array($key, $incompletes)) $app.='(missing rec)';
        if ($key % $groups == 0)
          $out .= $app . '<br />';
        else if ($key % $groups == 1)
          $out1 .= $app . '<br />';
        else 
          $out2 .= $app . '<br />';
      }
      $out .= '<h2 id="g2">Group 2</h2>' . $out1;
      $out .= '<h2 id="g3">Group 3</h2>' . $out2;
      $total = count($applications);
      break;
    case 'yes':
      foreach ($yes as $y) {
        $write = l($y, "node/$wf_nid/submission/$y", array('query' => 'destination=footlocker/admin?cat=yes'));
        if (in_array($key, $incompletes)) $out.='(missing rec)';
        $out .= $write . '<br />';
      }
      $total = count($yes);
      break;
    case 'no':
      foreach ($no as $n) {
        $write = l($n, "node/$wf_nid/submission/$n", array('query' => 'destination=footlocker/admin?cat=no'));
        if (in_array($key, $incompletes)) $out.='(missing rec)';
        $out .= $write . '<br />';
      }
      $total = count($no);
      break;
    case 'maybe':
      foreach ($maybe as $m) {
        $write = l($m, "node/$wf_nid/submission/$m", array('query' => 'destination=footlocker/admin?cat=maybe'));
        if (in_array($key, $incompletes)) $out.='(missing rec)';
        $out .= $write . '<br />';
      }
      $total = count($maybe);
      break;
  }



?>

<div class="node">

<h2 class="title"><?=$title;?>: <?=$cat;?></h2>
<div><a href="/footlocker/admin">Unjudged</a> | <a href="/footlocker/admin?cat=yes">Yes</a> | <a href="/footlocker/admin?cat=no">No</a> | <a href="/footlocker/admin?cat=maybe">Maybe</a></div>

<div style="margin-top: 20px;">
<?=$out;?>
</div>

<div style="margin-top: 20px; font-weight: bold; border-top: 1px solid white;">Total: <?=$total;?></div>
</div>
