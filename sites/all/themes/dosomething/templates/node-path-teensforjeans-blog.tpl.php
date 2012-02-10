<div class="node <?=$node->type ?>">
  <div class="tfj-blog">
  <div id="tfj-blog-img">
  <?php print theme('imagecache', '200_by_200', $node->field_picture[0]['filepath']); ?>
  </div> 
  <?php print $node->content['body']['#value']; ?>
  </div>
</div>