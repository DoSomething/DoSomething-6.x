<div class="node <?=$node->type ?>">
<?
//drupal_set_message('<pre>'.print_r($node,TRUE).'</pre>');
?>
  <h2 class="abcdefg" id="title"><?=$title;?></h2>
  <?php print $node->content['body']['#value']; ?>
</div>
