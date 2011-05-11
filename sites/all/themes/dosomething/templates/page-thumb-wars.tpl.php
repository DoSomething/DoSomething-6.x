<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/style.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/additional.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/block-editing.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/zen.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/drupal5-reference.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/tabs.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/nd/tw/tw.css" type="text/css">

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
  <!--[if lte IE 7]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script>
  <![endif]-->
  <?php print $scripts; ?>

  <script type="text/javascript" src="/nd/tw/jquery.mousewheel.js"></script>
  <script type="text/javascript" src="/nd/tw/jquery.em.js"></script>
  <script type="text/javascript" src="/nd/tw/jScrollPane.js"></script>
  <link rel="stylesheet" type="text/css" media="all" href="/nd/tw/jScrollPane.css" />
  <script type="text/javascript">
  $(document).ready(function() { 
    $('.scroll-pane').jScrollPane({scrollbarMargin:30,dragMaxHeight:250,showArrows:true});
  });
  </script>

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
        <div class="clear"></div>
    </div>

    <div id="container">

        <div id="twNav">
          <h2><a href="/thumb-wars">Thumb Wars</a></h2>
          <a class="sprint" target="_blank" href="http://www.sprint.com">The Sprint Foundation</a>
          <ul>
            <li class="start<?php if(arg(1) == 532469) { print ' active'; } ?>"><a href="/thumb-wars">Get Started</a></li>
            <li class="socks<?php if(arg(1) == 534289) { print ' active'; } ?>"><a href="/thumb-wars/thumb-socks">Thumb Socks</a></li>
            <li class="stickers<?php if(arg(1) == 534290) { print ' active'; } ?>"><a href="/thumb-wars/bumper-stickers">Bumper Stickers</a></li>
            <li class="pics<?php if(arg(1) == 534287) { print ' active'; } ?>"><a href="/thumb-wars/pics">Your Pics</a></li>
            <li class="action<?php if(arg(1) == 534237) { print ' active'; } ?>"><a href="/thumb-wars/take-action">Take Action</a></li>
          </ul>
        </div>


        <div id="social"><!-- start social -->
          <script type="text/javascript">var addthis_config = { username: "dosomething" }</script>
          <div class="addthis_toolbox addthis_default_style">
            <a class="addthis_button_facebook"></a>
            <a class="addthis_button_twitter"></a>
            <a class="addthis_button_myspace"></a>
            <a class="addthis_button_digg"></a>
            <a class="addthis_button_email"></a>
            <a class="addthis_button_print"></a>
          </div>
          <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
        </div><!-- end social -->

        <div id="styled-header">
<?php if (arg(1) == 532469) : ?><img src="/nd/tw/start_h.png" alt="Get Started" /><?php endif; ?>
<?php if (arg(1) == 534289) : ?><img src="/nd/tw/thumb_h.png" alt="Thumb Socks" /><?php endif; ?>
<?php if (arg(1) == 538665) : ?><img src="/nd/tw/thumb_h.png" alt="Thumb Socks" /><?php endif; ?>
<?php if (arg(1) == 534290) : ?><img src="/nd/tw/stickers_h.png" alt="Bumper Stickers" /><?php endif; ?>
<?php if (arg(1) == 582135) : ?><img src="/nd/tw/stickers_h.png" alt="Bumper Stickers" /><?php endif; ?>
<?php if (arg(1) == 582137) : ?><img src="/nd/tw/stickers_h.png" alt="Bumper Stickers" /><?php endif; ?>
<?php if (arg(1) == 534237) : ?><img src="/nd/tw/action_h.png" alt="Take Action" /><?php endif; ?>
<?php if (arg(1) == 538654) : ?><img src="/nd/tw/thanks_h.png" alt="Thanks" /><?php endif; ?>
<?php if (arg(1) == 575285) : ?><img src="/nd/tw/vote_h.png" alt="Vote Now" /><?php endif; ?>
        </div>

        <!-- begin main text -->
        <div id="main">
          <?php if ($messages): print $messages; endif; ?>
          <div class="holder sprint-bar">
            <div class="node <?=$node->type ?> scroll-pane">
              <?php print $content; ?>
            </div>
          </div>
          <div style="clear:both;"></div>
          <br />
        </div> <!-- end main text -->

          <?php print $tabs;?>
        <div class="clear"></div>

	</div>
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
