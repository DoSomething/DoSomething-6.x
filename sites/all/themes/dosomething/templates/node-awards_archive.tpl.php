<?php if (!$page): ?>

	<div class="node project project-teaser <?php print $zebra;?>">
			<?php
			$url = '/' . drupal_get_path_alias('node/'.$nid);
			?>
			<?php if(isset($node->field_picture[0])):?>
				<div class="project-photo"><a href="<?php print $url;?>"><?php print theme('imagecache','project_thumbnail',$node->field_picture[0]['filepath'],'','');?></a></div>
			<?php endif;?>
			
			<h2><a href="<?php print $url;?>"><?php print $title;?></a></h2>
			<div class="submitted"><?php print $submitted;?></div>

			<?php print $node->field_description[0]['view'];?>
			
			
			<div style="clear:right"></div>

	</div>

<? else: ?>
    <a href="/awards/alumni">&laquo; Back to Do Something Awards Alumni</a>
	<div class="node project grant-alumni">


    <br />
   		<div class="box blue gainlayout">
    <h2><?php print $title;?></h2>		

		<?php
			if(sizeof($node->field_picture))
			{
				$pic_path = $node->field_picture[0]['filepath'];
				$pic_html = theme('imagecache','111',$pic_path,'Photo','Photo',array('class' => 'alignleft', 'width' => '111', 'height' => '111'));
			}
		?>
		
			<?php if(strlen($pic_html)):?><div ><?php print $pic_html;?></div><?php endif;?>

<?php
  $sec = time() - $node->field_recipient_birthdate[0]['value'];
  $years = floor($sec/60/60/24/365.25);
?>
			<?php if(strlen($node->field_recipient_birthdate[0]['value']) && $years <= 25 && $years >= 5):?><p><strong>Age:</strong>&nbsp;<?php print $years;?></p><?php endif;?>
			<?php if(strlen($node->field_state_plain[0]['value'])):?><p><strong>State:</strong>&nbsp;<?php print $node->field_state_plain[0]['value'];?></p><?php endif;?>
			<?php if(strlen($node->field_year_awarded[0]['value'])):?><p><strong>Year Awarded:</strong>&nbsp;<?php print $node->field_year_awarded[0]['value'];?></p><?php endif;?>
          <p><?php print $node->field_dsaward_description[0]['value'];?></p>
            
			<?php if(strlen($node->field_alumni_project[0]['view'])):?><p><strong>Do Something Project:</strong>&nbsp;<?php print $node->field_alumni_project[0]['view'];?></p><?php endif;?>
			<br style="clear: both;" />

			
			

			</div>

				
			<?php if(strlen($node->content['body']['#value'])):?><h3>Updates</h3><p><?php print $node->content['body']['#value'];?></p><?php endif;?>


    <?php if(strlen($node->field_embedded_video[0]['embed'])):?>
			<h3>Video</h3>
			<?php  print $node->field_embedded_video[0]['view'];?>
			<?php endif;?>


	<?php if(strlen($node->field_alumni_action[0]['value'])):?><h3>Ways to take action</h3><p><?php print $node->field_alumni_action[0]['value'];?></p><?php endif;?>




            <?php if(sizeof($node->taxonomy)):
            
                $terms = array();
                foreach($node->taxonomy as $term)
                    $terms[] = $term->name;
                $terms = implode(', ',$terms);                
            ?>
                                 
            
            <div class="project-links">
			<?php print $links; ?>
			<div class="clear"></div>
		</div>

  <?= theme('cause_links', $node->nid); ?>
            
            <?php endif;?>
            
            <p><a href="/awards/alumni">&laquo; Back to Do Something Awards Alumni</a></p>

	</div>
<? endif; ?>
