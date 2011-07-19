<?php
// $Id: node.tpl.php,v 1.10 2009/11/02 17:42:27 johnalbin Exp $


 if (is_numeric(arg(1)) && arg(0) == 'node') {
				$n = node_load(arg(1));
				$tax = taxonomy_get_tree('5','0','-1',1);
				foreach($tax as $junk=>$parent) {
					$parents[$parent->tid] = $parent->name;
				}
				foreach ($n->taxonomy as $tid=>$term) {
					if ($term->vid == 5) {//We're good to go
						if(in_array($term->name,$parents)) {//Parent term. set active cause.
							$active_cause = $term->name;
						} else {//Child term? Making assumptions here...
							$active_issue = $term->name;
						}
					}
				}
			}
      if (!$active_cause) { $active_cause = 'Animal Welfare'; }
      if (!$active_issue) { $active_issue = 'Animal Homelessness'; }
			
			
			
			$pic_rendered = FALSE;
			
			//Get node for active issue.
			$issue_node_q = db_fetch_object(db_query("SELECT nid FROM node where title = '%s'",$active_issue));
			if ($issue_node_q->nid) {
				if(sizeof($issue->field_intro_text_photo))
					$pic_path = $issue->field_intro_text_photo[0]['filepath'];
				if(sizeof($node->field_picture))
					$pic_path = $node->field_picture[0]['filepath'];
				$pic_html = theme('imagecache','111',$pic_path,'Photo','Photo',array('class' => 'alignleft', 'width' => '111', 'height' => '111'));
			
				$pic_rendered = TRUE;
			
				$issue = node_load($issue_node_q->nid);
      }
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">

  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <?php print theme_addthis(); ?>

  <div class="content">
    <?php print $node->content['body']['#value']; ?>
  </div>
  
  <br />

  <div style="background-color: rgb(255, 245, 222) ! important; position: relative;" class="box ididthis gainlayout">
            <h2>Take Action</h2>

<?php $total = db_result(db_query("SELECT COUNT(*) AS total FROM {content_type_ididthis} WHERE field_did_nid_value = $node->nid")); ?>
<div style="position: absolute; right: 10px; top: 10px; margin: 0px; padding: 0px;" class="box gainlayout">
<div id="counter" style="width: 116px; height: 36px; margin-bottom: 0.5em;">
<?=dosomething_numberc($total, true, 4);?>
</div>
  <p><?php 
        if ($total > 0) {
          print format_plural($total, "person has", "people have")." done this&hellip;";
        } else { 
          print "people have done this&hellip;<br />Be the first!";
        }
     ?>
  </p>
<div class="clear:both;"></div>
</div>

<ol class="big-blue"> 
    <li><span class="not-so-big-blue">Let us know if you're going to do this... 		<?php print drupal_get_form('ididthis_form', $node->nid); ?>
 </span></li>
  <li><span class="not-so-big-blue"><?=l('Email a friend','forward',array('query' => 'path=node/'.arg(1))).' about this idea.';?></span></li>
 <li><span class="not-so-big-blue">Find more info on other causes:</span></li>
			 				        <div>
				  
				 <p style="margin: 1em 0;"><a href="/whatsyourthing/<?=$active_cause;?>/<?=$active_issue;?>"><?=$active_issue;?></a>: <?=$issue->field_intro_text[0]['value'];?></p>
				          <div class="clearfix"></div></div>

				    </ol>
		</div>  
  <?php print $cause_links; ?>

</div> <!-- /.node -->
