<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">

<?
$nodePath = drupal_get_path_alias('node/'.$node->nid);

?>

<head>
  <meta property="og:title" content="<?=$head_title;?>"/>
  <meta property="fb:admins" content="508145411,603061,630191494" />
  <meta property="fb:app_id" content="93836527897" />
  <meta property="og:type" content="non_profit"/>
  <meta property="og:image" content="http://www.dosomething.org/<?=$ds_micro;?>/ebd/epic-logo.png" />
  <meta property="og:site_name" content="DoSomething.org"/>
  <meta property="og:description" content="Help restock New Orleans school libraries.  @Do Something and @BWBooks will show you how to send them FREE!"/>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <link rel="stylesheet" href="/<?=$ds_micro.'/ebd/ebd.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/style.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/additional.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/block-editing.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/zen.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/drupal5-reference.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/tabs.css';?>" type="text/css" media="all" />
  <!--[if IE 7]>
          <link rel="stylesheet" type="text/css" href="/<?=$ds_micro;?>/ebd/ie7.css">
  <![endif]-->
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

    <?=$scripts;?>
    <script type="text/javascript" src="/<?=$ds_micro;?>/ebd/jquery.cycle.2-99.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.liveprofile-instructions').hide();
        $('input#update-profile').hide();
        $('div.plans-scroller .plans .child').not(':first-child').hide();
        $('div.plans-scroller div.controls').show();
        $('div.plans-scroller .plans').cycle({
          containerResize: 1,
          cleartype: true,
          cleartypeNoBg: true,
          pause: 1,
          prev: '#prev',
          next: '#next'
        });
        $('div#ebd-form form#node-form').submit(function() { return updateProfile(this); });
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
        <div class="col_right">
			<!--Begin Top Right Block Section-->
       <?=$top_right;?>
			<!--End Top Right Block Section-->
        </div>
        <div class="clear"></div>
				<?php if ($messages): print $messages; endif;
              print $tabs.'<div style="clear:both"></div>'; ?>
    </div>

    <div id="container">

      <a href="/epic-book-drive"><img class="logo" src="/<?=$ds_micro;?>/ebd/logo_02.jpg"></a>
        <div class="top-description"></div>
        <a target="_blank" href="http://www.betterworldbooks.com/"><div class="bwb-logo"></div></a>
        <div class="top-navholder">
          <div class="relative">
          <ul id="subnav">
            <li class="home"><a class="<? if (arg(1)==640419) {print 'active';}?>" href="/epic-book-drive#">Home</a></li>
            <li class="run"><a class="<? if (arg(1)==641847) {print 'active';}?>" href="/epic-book-drive/run-your-drive#">Run Your Drive</a></li>
            <li class="submit"><a class="<? if (arg(1)==641850) {print 'active';}?>" href="/epic-book-drive/submit#">Submit</a></li>
            <li class="gallery"><a class="<? if (arg(1)==641852) {print 'active';}?>" href="/epic-book-drive/gallery#">Gallery</a></li>
            <li class="faq"><a class="<? if (arg(1)==641553) {print 'active';}?>" href="/epic-book-drive/faq#">FAQ</a></li>
          </ul>
          </div>
        </div>
        <!-- begin main text -->
        <div id="bg-top"></div>
        <div id="main">
        <div class="relative">
         <div class="social">
          <ul>
          <li class="first"><a class="twitter" href="http://www.twitter.com/dosomething">Twitter</a></li>
          <li><a class="facebook" href="http://www.facebook.com/dosomething">Facebook</a></li>
          <li><a class="digg" href="http://www.digg.com/dosomething">Digg</a></li>
          <li><a class="email" href="mailto:epic@dosomething.org">E-mail</a></li>
          </ul>
        </div>
          <div class="fb-twitter-counts">
            <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
              <div class="share-buttons">
              <div class="twitter_button" style="float:right; padding: 0px 0px 0px 10px;">
                 <a class="addthis_button_tweet" tw:count="vertical" tw:related="dosomething:DoSomething.org" tw:via="." tw:text="Help restock New Orleans school libraries.  @DoSomething and @BWBooks will show you how to send them FREE!"></a>
              </div>
              <div class="fb_button" style="float:right; padding: 0px 3px 3px 3px;">
                 <a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php">Share</a>
              </div>
              </div>
          </div>
        
        <?php if(!$node && arg(0) != 'user'){ print '<h2>' . $title . '</h2>'; }?>
        
        <?php if(($help)&&(arg(0)=='node')&&(arg(1)=='add')): print $help; endif;?>

      <?php print $content_top;?>
         <div id="node-bg-container">
          <div id="node-top"></div>
      <?php print $content; ?>
          <div id="node-bottom"></div>
          </div>
        			<?php print $content_bottom;?>

        <!-- begin sidebar -->
<?php if ($right) { ?>
        <div id="sidebar-right">
		  	<?=$right;?>
        </div>
<?php } ?>
        <div style="clear:both;"></div>
        <!-- end sidebar -->

				
					
					
        </div>
        </div>
        <!-- end main text -->
        <div id="bg-bottom">
        </div>

        <div class="clear"></div>
<?php if ($closure_region) { ?>
		<?=$closure_region;?>
<?php } ?>
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
<script type="text/javascript">document.write(unescape('%3Cscript type="text/javascript" src="'+document.location.protocol+'//dnn506yrbagrg.cloudfront.net/pages/scripts/0010/5544.js"%3E%3C%2Fscript%3E'))</script>
</body>
</html>
