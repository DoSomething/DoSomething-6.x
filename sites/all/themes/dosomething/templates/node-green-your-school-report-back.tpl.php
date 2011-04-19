<div class="node <?=$node->type ?>">
  <div class="node-gys">
<img src='/nd/iyg-2011/report-back.png'/>
<?php
 global $user;
if (!$user->uid):
  $current_path = preg_replace('/^\//', '', drupal_get_path_alias(request_uri()));
  $urlencode_current_path = urlencode($current_path);
?>

  <p>Please <a href="/user/login?destination=<?=$urlencode_current_path;?>">login</a> or <a href="/user/register?destination=<?=$urlencode_current_path;?>">register</a> to report back on your school's progress.</p>


<?php
 else:

 $node = new stdClass();
 $node->type = 'campaign_gys_2011';
 print drupal_get_form('campaign_gys_2011_node_form', $node);
 endif;
?>

  </div>
</div>
