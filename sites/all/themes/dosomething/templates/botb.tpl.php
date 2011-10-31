<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">

<head>
  <title><?php print $head_title; ?></title>
<meta property="og:image" content="http://www.dosomething.org/nd/botb/bftb-logo_01.png" />
<meta property="og:site_name" content="DoSomething.org"/>
<meta property="og:description" content="Do Something to Save the Music! Join the Battle for the Bands campaign."/>

  <?php print $head; ?>
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/style.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/additional.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/block-editing.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/zen.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/drupal5-reference.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/tabs.css';?>" type="text/css" media="all" />
  <!--[if lte IE 7]>
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/fixes_msie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory ?>/fixes_msie.css" type="text/css">
    <?php endif; ?>
    <link rel="stylesheet" href="/nd/botb/botb-ie7.css" type="text/css">
  <![endif]-->
  <!--[if lte IE 6]>
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/fixes_msie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory ?>/fixes_msie6.css" type="text/css">
    <?php endif; ?>
  <![endif]-->
  <!--[if IE 7]>
  <script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script>
  <![endif]-->
  <link rel="stylesheet" href="/nd/botb/botb.css" type="text/css">
  <!--[if IE 6]>
  <link rel="stylesheet" href="/nd/botb/botb-ie6.css" type="text/css">
  <![endif]-->
  <?php print $scripts; ?>
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
        <div class="col_right">
			<!--Begin Top Right Block Section-->
       <?=$top_right;?>
			<!--End Top Right Block Section-->
        </div>
        <div class="clear"></div>
    </div>

    <div id="container">

      <div id="botbHeader">
        <div id="botbLogo">
          <a href="/bands">Battle of the Bands</a>
        </div>
        <div id="botbNav">
          <ul>
          <li class="start<?php print arg(1) == 634121 ? " start-active" : ""; ?>"><a href="/battle/get-started">Getting Started</a></li>
            <li class="videos<?php print arg(1) == 640036 ? " videos-active" : ""; ?>"><a href="/battle/gallery">Video Gallery</a></li>
            <li class="tips<?php print arg(1) == 634352 ? " tips-active" : ""; ?>"><a href="/battle/celeb-gallery">Tips</a></li>
            <li class="register<?php print arg(1) == 638555 ? " register-active" : ""; ?>"><a href="/battle/submit">Register Your Video</a></li>
          </ul>
        </div>
      </div>

        <div id="botbTop"></div>
		
        <div id="botbMain">
        
				<?php if ($messages): print $messages; endif; ?>
        
        <?php if(($help)&&(arg(0)=='node')&&(arg(1)=='add')): print $help; endif;?>
        <?php print $content_top;?>
        
		<?php print $content; ?>
        <?php print $content_bottom;?>

        <div style="clear: both;"></div>
        <?php if(user_access('administer nodes')) { print $tabs; } ?>
    <div id="footer">
		<!--Begin Footer-->
		<?=$footer_message;?>
		<!--End Footer-->
        <form action="" method="post" id="search"><p>
			<input type="hidden" name="form_token" id="edit-search-theme-form-form-token" value="<?=drupal_get_token('search_theme_form');?>"  />
			<input type="hidden" name="form_id" id="edit-search-theme-form" value="search_theme_form"  />
            <input type="text" id="qsearch" name="search_theme_form_keys" value="..." maxlength="" class="styled" onClick="if(this.value == '...') { this.value=''; } "/>
            <input type="image" src="<?=$base_path.$subtheme_directory;?>/images/form_submit_search_footer_black.png" name="op" value="Search" alt="search" class="submit" />
        </form>
    </div>



			<div style="clear:both;"></div>
        </div>
        <!-- end main text -->

        <div class="clear"></div>

	</div>
</div>

<?php print $closure;?>

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
