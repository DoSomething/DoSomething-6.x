<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>

  <link rel="stylesheet" href="/nd/hp_art/hp_art.css" type="text/css" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/style.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/additional.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/block-editing.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/zen.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/drupal5-reference.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/tabs.css';?>" type="text/css" media="all" />


  <!--[if IE]>
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/fixes_msie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory ?>/fixes_msie.css" type="text/css">
    <?php endif; ?>
  <![endif]-->
  <!--[if lte IE 6]>
  	<?php if ($subtheme_directory && file_exists($subtheme_directory .'/fixes_msie6.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory ?>/fixes_msie6.css" type="text/css">
  	<?php endif; ?>
  <![endif]-->
  <?php print $scripts; ?>
  <script type="text/javascript" src="/sites/all/micro/dsu/jquery.cycle.lite.1.0.min.js"></script>
  <script type="text/javascript">$(function() { $('#slides').cycle(); });</script>
</head>

<?php /* different classes allow for separate theming of the home page */ ?>
<?php

//Variables available to us:
/*
$body_classes
$search_box
$logo
$subtheme_directory
$base_path
$site_name
$site_slogan
$primary_links //needs theme('links',$primary_links);
$secondary_links //needs theme('links', $secondary_links);
$breadcrumb
$mission
$title
$tabs
$help
$messages
$content
$feed_icons
$footer_message
$closure
///////
$header //Header block region
$sidebar_right //Right sidebar region
$content_top //Content Top region
$content_bottom //Content Bottom region
$closure_region //Closure Region block
$top_right
*/
?>

<body>
<div id="wrapper">
    <div id="header">
           <h1><a href="/"><img src="<?=$base_path.$subtheme_directory;?>/images/logo.png" width="197" height="156" alt="DoSomething.org" /></a></h1>
        <div class="col_left">
            <div id="primary">
				<!--Begin Primary Links-->
				<?=theme('primary_links');?>
				<!--End Primary Links-->

            </div>
        </div>
<?php if ($top_right) { ?>
        <div class="col_right">
			<!--Begin Top Right Block Section-->
			<?=$top_right;?>
			<!--End Top Right Block Section-->
        </div>
<?php } ?>
        <div class="col_top">DoSomething.org, HP and AMD know that art is critical to a complete education. Art programs are being cut nationwide. We know you're passionate about keeping art in schools. Show us. <strong>Make Art. Save Art.</strong></div>
        <div class="clear"></div>
    </div>

    <div id="container">

        <div id="nav">
          <ul>
          <li class="home"> <a<?php if (arg(1) === '582847') { print ' class="active"'; } ?> href="/make-art-save-art-2010">Home</a> </li>
            <li class="art-ed"> <a<?php if (arg(1) === '583277') { print ' class="active"'; } ?> href="/make-art-save-art-2010/art-ed">Art Ed</a> </li>
            <li class="submit"> <a<?php if (arg(1) === '583242') { print ' class="active"'; } ?> href="/make-art-save-art-2010/submit">Submit</a> </li>
            <li class="gallery"> <a<?php if (arg(1) === 'gallery') { print ' class="active"'; } ?> href="/make-art-save-art-2010/gallery">Gallery</a> </li>
        </div>
        <!-- begin main text -->
        <div id="main" class="<?=arg(1)?>">
        
				<?php if ($messages): print $messages; endif; ?>
        
		   
        <?php if(!$node && arg(0) != 'user'){ print '<h2>' . $title . '</h2>'; }?>
        
        <?php if(($help)&&(arg(0)=='node')&&(arg(1)=='add')): print $help; endif;?>
			<?php print $content_top;?>
			<?php print $content; ?>
        			<?php print $content_bottom;?>
			<div style="clear:both;"></div>
<br />

					
					
					
        </div>
        <!-- end main text -->

        <div class="clear"></div>
	</div>
<?php print $tabs;?>
    <div id="footer">
		<!--Begin Footer-->
		<?=$footer_message;?>
		<!--End Footer-->
        <form action="" method="post" id="search"><p>
			<input type="hidden" name="form_token" id="edit-search-theme-form-form-token" value="<?=drupal_get_token('search_theme_form');?>"  />
			<input type="hidden" name="form_id" id="edit-search-theme-form" value="search_theme_form"  />
            <input type="text" id="qsearch" name="search_theme_form_keys" value="..." maxlength="" class="styled" onClick="if(this.value == '...') { this.value=''; } "/>
            <input type="image" src="<?=$base_path.$subtheme_directory;?>/images/form_submit_search_footer.png" name="op" value="Search" alt="search" class="submit" />
        </form>
    </div>
</div>

<?php print $closure;?>

<script type="text/javascript">
  $("#question-answer a").next().hide();
  $("#question-answer a").click(function() {
    if ($(this).next().is(":hidden")) {
      $(this).next().slideDown('fast');
    } else {
      $(this).next().slideUp('fast');
    }
  });
</script>

<!-- Start Quantcast tag -->
<script type="text/javascript">
_qoptions={ qacct:"p-37AYE1veo7k5c" };
</script>
<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>
<noscript>
<img src="http://pixel.quantserve.com/pixel/p-37AYE1veo7k5c.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
</noscript>
<!-- End Quantcast tag -->

</body>
</html>
