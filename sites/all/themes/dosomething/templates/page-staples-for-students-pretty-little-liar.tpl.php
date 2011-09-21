<?php
  $styles.= '<link type="text/css" rel="stylesheet" media="all" href="/'.$ds_micro.'/sfs/pll.css" />';
  
  $currPath = drupal_get_path_alias(str_replace('/edit', '', $_GET['q']));
  $endPath = explode('/', $currPath);
  $girl = $endPath[count($endPath)-1];
  $tax = array('ashley' => 9247, 'lucy' => 9248, 'shay' => 9250, 'troian' => 9249);
  
  $sql = "SELECT COUNT(*) FROM {webform_submitted_data} WHERE nid=650471 AND cid=1 AND data='$girl' GROUP BY data";
  $count = db_result(db_query($sql));
  
  $q = "SELECT nid FROM {node} WHERE type='staples_reason' AND nid IN
        (SELECT nid FROM term_node WHERE tid={$tax[$girl]})";
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
<?php include_once 'staples-header.php'; ?>

<div id="home-main" class="<?=$girl;?> liar shadow rounded clearfix">
  <div id="pll-wrapper">
  <div id="content-wrapper">
    <img src="/<?=$ds_micro;?>/sfs/girls/<?=$girl;?>-tagline.png" id="tagline" />
    
    <div id="girl-count" style="background-image: url('/<?=$ds_micro;?>/sfs/pll-<?=$girl;?>-<?=($count <= 2500) ? 'raised' : 'members';?>.png');">
     <?=($count <= 2500) ? '$' : ''; ?><?= $count;?>
    </div>
    <img src="/<?=$ds_micro;?>/sfs/girls/<?=$girl;?>-find-out.png" id="" />
    <div id="girl-sticky">
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
    <div id="you-share">
      <a href="#" onclick="javascript:return girl_popup(false);"><img src="/<?=$ds_micro;?>/sfs/girls/<?=$girl;?>-you-share.png" /></a>
    </div>
  </div>
  </div>
  <div id="products">
    <a href="/<?=$ds_micro;?>/sfs/<?=$girl;?>_PLL_PDF.pdf"><img src="/<?=$ds_micro;?>/sfs/girls/<?=$girl;?>-print.png" alt="print my list" /></a>
  </div>
  <div class="clearfix">
    <?php print $content; ?>
  </div>
  
  <div id="pll-home-footer"></div>
</div>

<?php include_once 'staples-bottom.php'; ?>
<div style="display: none;">
<?php
  $node = node_load(650471);
  $node->title = '';
  $node->webform['components'][1]['value'] = $girl;
  $submission = array();
  $enabled = TRUE;
  $preview = FALSE;
  $form = drupal_get_form('webform_client_form_650471', $node, $submission, $enabled, $preview);
  $pattern = '/action="(.*?)"/';
  $form = preg_replace($pattern, 'action="'.url($_GET['q']).'#popup"', $form);
  print $form;
?>
</div>
<div id="share-reason-form">
  <img src="/<?=$ds_micro;?>/sfs/pll-thanks-for-joining.png" alt="Tell the world!" id="img-donated" />
  <img src="/<?=$ds_micro;?>/sfs/popup-header.png" alt="Tell the world!" id="img-no-donated" />
  <?php
    module_load_include('inc', 'node', 'node.pages');
    $node = new stdClass();
    $node ->type = 'staples_reason';
    $node ->name = $user->name;
    $node ->taxonomy = array($tax[$girl] => taxonomy_get_term($tax[$girl]));
    print drupal_get_form('staples_reason_node_form', $node);
  ?>
</div>
<div style="display: none;" id="sb-hidden-title">
<img src="/<?=$ds_micro;?>/sfs/girls/<?=$girl;?>.png" style="position: relative; left: -225px;" />
</div>
<?php include_once 'staples-footer.php'; ?>
