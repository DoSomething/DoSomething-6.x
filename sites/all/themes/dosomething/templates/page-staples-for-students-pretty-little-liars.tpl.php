<?php
  $sql = "SELECT data, COUNT(data) as c FROM {webform_submitted_data} WHERE nid=650471 AND cid=1 GROUP BY data";
  $results = db_query($sql);
  $counts = array();
  while ($row = db_fetch_object($results))
    $counts[$row->data] = $row->c;
?>

<?php include_once 'staples-header.php'; ?>
<?php
  // load in 10 random "why you care"
  $q = "SELECT nid FROM {node} WHERE type='staples_reason' AND nid NOT IN
        (SELECT nid FROM term_node)";
  $result = db_query($q);
  $nodes = array();
  while ($nid = db_result($result))
    $nodes[] = $nid;
  $max = (count($nodes) < 10) ? count($nodes) : 10;
  $return = array();
  for ($i = 0; $i < $max; $i++)
  {
    $pos = rand(0, count($nodes)-1);
    $return[] = $nodes[$pos];
    unset($nodes[$pos]);
    $nodes = array_values($nodes);
  }
  $nodes = array();
  foreach ($return as $nid)
    $nodes[] = node_load($nid);
  $quotes = array();
  foreach ($nodes as $node) {
    $title = '"'.$node->title.'"';
    $name = '';
    $name_f = $node->field_name_f[0]['value'];
    $name_l = $node->field_name_l[0]['value'];
    $state = $node->field_where_from[0]['value'];
    
    if ($name_f != '')
      $name .= $name_f;
    if ($name_f != '' && $name_l != '')
      $name .= ' ' . substr($name_l, 0, 1) . '.';
    if ($name_f != '' && $state != '')
      $name .= ', ';
    if ($state)
      $name .= $state;
    $quotes[] = '<div class="quote">'.$title.'</div><div class="attribution">- '.$name.'</div>';
  }
?>
<div id="home-main" class="orange-gradient shadow rounded clearfix floral-bg">
  
  <img src="/<?=$ds_micro;?>/sfs/pll-header.png" alt="Join a pretty little liar. Team up to help kids in need." width="759" height="107" />
  <div class="clearfix">
    <?php print $content; ?>
  </div>
  <div id="pll-stickies">
    <a href="/staples-for-students/pretty-little-liar/ashley"><img
      src="/<?=$ds_micro;?>/sfs/pll-ashley.png" alt="Join Ashley" /><img
      src="/<?=$ds_micro;?>/sfs/pll-lucy.png" alt="Join Lucy" /><img
      src="/<?=$ds_micro;?>/sfs/pll-troian.png" alt="Join Troian" /><img
      src="/<?=$ds_micro;?>/sfs/pll-shay.png" alt="Join Shay" /><div id="pll-hovers"><a
        href="/staples-for-students/pretty-little-liar/ashley"><img
        src="/<?=$ds_micro;?>/sfs/hover-ashley.png" id="hover-ashley" /></a><a href="/staples-for-students/pretty-little-liar/lucy"><img
        src="/<?=$ds_micro;?>/sfs/hover-lucy.png" id="hover-lucy" /></a><a href="/staples-for-students/pretty-little-liar/troian"><img
        src="/<?=$ds_micro;?>/sfs/hover-troian.png" id="hover-troian" /></a><a href="/staples-for-students/pretty-little-liar/shay"><img
        src="/<?=$ds_micro;?>/sfs/hover-shay.png" id="hover-shay" /></a>
      </div>
  </div>
  <div id="pll-join">
    <a href="/staples-for-students/pretty-little-liar/ashley"><img
      src="/<?=$ds_micro;?>/sfs/pll-ashley-join<?=($counts['ashley'] <= 2500) ? '' : '-member';?>.png" alt="Join Ashley" /></a><a href="/staples-for-students/pretty-little-liar/lucy"><img
      src="/<?=$ds_micro;?>/sfs/pll-lucy-join<?=($counts['lucy'] <= 2500) ? '' : '-member';?>.png" alt="Join Lucy" /></a><a href="/staples-for-students/pretty-little-liar/troian"><img
      src="/<?=$ds_micro;?>/sfs/pll-troian-join<?=($counts['troian'] <= 2500) ? '' : '-member';?>.png" alt="Join Troian" /></a><a href="/staples-for-students/pretty-little-liar/shay"><img
      src="/<?=$ds_micro;?>/sfs/pll-shay-join<?=($counts['shay'] <= 2500) ? '' : '-member';?>.png" alt="Join Shay" /></a>
  </div><div id="pll-raised">
    <div style="background-image: url('/<?=$ds_micro;?>/sfs/pll-ashley-<?=($counts['ashley'] <= 2500) ? 'raised' : 'members';?>.png'); width:208px;">
      <?=($counts['ashley'] <= 2500) ? '$' : '';?><?=$counts['ashley'];?>
    </div><div style="background-image: url('/<?=$ds_micro;?>/sfs/pll-lucy-<?=($counts['lucy'] <= 2500) ? 'raised' : 'members';?>.png'); width:205px;">
      <?=($counts['lucy'] <= 2500) ? '$' : '';?><?=$counts['lucy'];?>
    </div><div style="background-image: url('/<?=$ds_micro;?>/sfs/pll-troian-<?=($counts['troian'] <= 2500) ? 'raised' : 'members';?>.png'); width:203px;">
      <?=($counts['troian'] <= 2500) ? '$' : '';?><?=$counts['troian'];?>
    </div><div style="background-image: url('/<?=$ds_micro;?>/sfs/pll-shay-<?=($counts['shay'] <= 2500) ? 'raised' : 'members';?>.png'); width:206px;">
      <?=($counts['shay'] <= 2500) ? '$' : '';?><?=$counts['shay'];?>
    </div>
  </div>
  <img src="/<?=$ds_micro;?>/sfs/pll-paper-callout.png" style="margin-left: -18px; padding-top: 20px;" />
  
  <div id="pll-share">
    <div id="pll-share-your-reason">
      <img src="/<?=$ds_micro;?>/sfs/pll-why-care-text.png" /><br/>
      <a href="#" id="share-your-reason"><img src="/<?=$ds_micro;?>/sfs/pll-why-care-share.png" /></a>
    </div><div id="pll-share-stickies">
      <div id="pll-why-you-care">
        <?php 
      $first = true;
      foreach ($quotes as $quote) : ?>
        <div class="why-you-care-quote <?php if ($first) echo 'visible'; ?>">
          <?=$quote?>
        </div>
    <?php 
        $first = false;
      endforeach; ?>
      <a href="#" onClick="javascript:return flipQuote();" id="flip-quote"></a>
      </div>
      <div id="pll-why-she-cares">
        <a id="sticky-changer-g" href="#"></a>
        <img src="/<?=$ds_micro;?>/sfs/pll-why-pll-cares.png" />
      </div>
      
    </div>
  </div>
  <div id="pll-enter-win">
    <div id="pll-enter-win-sub">
      <img src="/<?=$ds_micro;?>/sfs/pll-etw-sticky.png" style="position: absolute; left: -20px; top: 10px;" />
      <a href="/staples-for-students/pretty-little-liars/sweeps" style="position:absolute; left: 450px; top: 225px;"><img src="/<?=$ds_micro;?>/sfs/pll-etw-button.png" /></a>
    </div>
  </div>
  <div id="pll-home-footer"></div>
</div>

<?php include_once 'staples-bottom.php'; ?>
<div id="share-reason-form">
  <img src="/<?=$ds_micro;?>/sfs/popup-header.png" alt="Tell the world!" />
  <?php
    module_load_include('inc', 'node', 'node.pages');
    $node = new stdClass();
    $node ->type = 'staples_reason';
    $node ->name = $user->name;
    print drupal_get_form('staples_reason_node_form', $node);
  ?>
</div>
<?php include_once 'staples-footer.php'; ?>
