<div class="node <?=$node->type ?>">
  <div class="tfj-blog">
  <div id="tfj-blog-img">
  <?php
	if (isset($node->field_picture[0]['filepath']))
		print theme('imagecache', '200_by_200', $node->field_picture[0]['filepath']);
  ?>
  </div> 
  <?php
        if ($node->field_embedded_video[0]['embed']) {
            $field_type = 'field_embedded_video';
            $system_types = _content_type_info();
            $field = $system_types['fields'][$field_type];
            print theme('emvideo_video_video', $field, $node->field_embedded_video[0], 'emvideo_embed', $node);            
        }
?>
  <?php print $node->content['body']['#value']; ?>
  </div>
</div>