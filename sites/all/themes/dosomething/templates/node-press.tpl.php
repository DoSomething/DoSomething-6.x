<?php if (!$page) { //Teaser?>
	<div class="node <?=$node->type ?>">
  	    <strong><?=l($title,'node/'.$node->nid);?></strong>, <?php print $node->content['field_publication_date']['#value']; ?>
        </div>
<? } else { //Full view ?>

<?php if ($node->field_press_type[0]['value'] == 'Release') { ?>
	<div class="node <?=$node->type ?>">
	  <a href="/about/press/releases">&lt;&lt; back to all press releases</a>
      <div style="background-color: #def3f9; width: 100%; padding: 10px;">
	      <p><?php print $node->content['body'] ['#value']; ?></p>
	   </div>
	</div>
<?php } else { ?>
	<div class="node <?=$node->type ?>">
		<h2>Press Room</h2>
	  <a href="/about/press/in-the-news">&lt;&lt; back to all press</a>
      <div style="background-color: #def3f9; width: 100%; padding: 10px;">
	      <p><h3>Title: "<?php print $node->field_article [0]['value']; ?>"</h3>
        <strong>Publication: <?=$title;?></strong>
          <?php print $node->content['field_publication_date']['#value']; ?> <br />

		  <?php print $node->content['body'] ['#value']; ?></p>
	   </div>
	   <p><?php print $node->content['field_related_campaign']['#value']; ?> 
     <?php print $node->content['field_press_type']['#value']; ?></p>
    
      <?php if (user_access('administer nodes')) {
                print $node->content['field_impressions']['#value'];
			}
      ?>
	</div>
  <?php } } ?>
