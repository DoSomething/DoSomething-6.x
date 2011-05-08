<?php if (!$page) : //Teaser ?>
	<div class="node <?=$node->type ?>">
    <h2><a href="/<?php print drupal_get_path_alias('node/'.$node->nid);?>"><?php print $node->title;?></a></h2>

    <?php if ($submitted): ?>
      <div class="submitted" style="padding-bottom:10px;">
        <?php print $submitted; ?>
      </div>
    <?php endif; ?>

    <?=$content;?>

    <p><?= l('Read More', 'node/'.$node->nid, array("class" => "more")); ?></p>
    <?= theme('cause_links', $node->nid); ?>
    <div style="height:0px;border-top:1px solid gray;margin:0.5em 0 0.25em;"></div> 
  
	</div>
  
<?php else: //Full view ?>
    
<div class="node <?=$node->type ?>">

  <h2 class='header-<?=$node->type ?>'>&nbsp;</h2>
  <h2><?=$title;?></h2>

  <?php if ($submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <?php print theme('addthis'); ?>
  <?= theme('cause_links', $node->nid); ?>
    
  <div class="content">
    <?php print $content; ?>
  </div>
    
  <?php if (count($taxonomy)): ?>
    <div class="taxonomy"><?php print t('Tags:') . $terms; ?></div>
  <?php endif; ?>

</div><!-- node -->

<?php endif; ?>
