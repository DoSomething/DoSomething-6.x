<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<?

$current_path = drupal_get_path_alias(request_uri());

?>

<head>
  <title><?php print $head_title; ?></title>

<meta property="og:image" content="http://www.dosomething.org/<?$ds_micro;?>/att/dosomething-logo.png" />
<meta property="fb:admins" content="508145411"/>
<meta property="og:site_name" content="DoSomething.org"/>
<meta property="og:description" content="DoSomething.org and AT&T are teaming up to offer $35,000 in college scholarships to students committed to rethinking possible and making a difference."/>

  <?php print $head; ?>
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/style.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/additional.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/block-editing.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/zen.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/drupal5-reference.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/tabs.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=$ds_micro.'/att/att.css';?>" type="text/css" media="all" />


  <!--[if IE]>
    <?php //if ($subtheme_directory && file_exists($subtheme_directory .'/fixes_msie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory ?>/fixes_msie.css" type="text/css">
    <?php //endif; ?>
  <![endif]-->
  <!--[if lte IE 6]>
  	<?php if ($subtheme_directory && file_exists($subtheme_directory .'/fixes_msie6.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory ?>/fixes_msie6.css" type="text/css">
  	<?php endif; ?>
  <![endif]-->
<?  // weird hack -- functions.js seems to break cufon
     print preg_replace('#<script type="text/javascript" src="/sites/all/themes/zen/dosomething/functions.js"></script>#', '', $scripts); ?>

  <script type="text/javascript" src="/<?=$ds_micro;?>/att/cufon-yui.js"></script>
  <script type="text/javascript" src="/<?=$ds_micro;?>/att/stagstencil_700.font.js"></script>
  <script type="text/javascript">
    Cufon.replace('#applicant-name');
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
           <h1><a href="/"><img src="/<?=$ds_micro;?>/att/dslogo-transparent5.png" width="197" height="156" alt="DoSomething.org" /></a></h1>
        <div class="col_left">
            <div id="primary">
				<!--Begin Primary Links-->
				<?=theme('primary_links');?>
				<!--End Primary Links-->

            </div>
        </div>
        <div class="col_right">
			<!--Begin Top Right Block Section-->
      <?=theme('login_links').
         theme('signup_block');?>

			<!--End Top Right Block Section-->
        </div>
        <div class="clear"></div>
    </div>

    <div id="container-wrapper">
    <div id="container">
<?

$args = explode('/', $_GET['q']);
$last_arg = array_pop($args);

?>

        <!-- begin main text -->
        <div id="main" class="nid<?=$last_arg;?>">
        <?php print $tabs;?>
        <div class="clear"></div> 
				<?php if ($messages): print $messages; endif; ?>
        
        <?php if(!$node && arg(0) != 'user'){ print '<h2>' . $title . '</h2>'; }?>
        
        <?php if(($help)&&(arg(0)=='node')&&(arg(1)=='add')): print $help; endif;?>
      <?php print $content_top;?>

  <div id="top-block">
  <a href="/att#">
  <!-- <img id="logo" src="/nd/att/att-plainds.png"/> -->
   <img id="logo" src="/<?=$ds_micro;?>/att/dosomething-logo.png"/>
   </a>
  <a class="nav <?php if (arg(1) == 635473) print "active"; ?>" id="home" href="/att#"></a>
  <a class="nav <?php if (arg(1) == 637823) print "active"; ?>" id="apply" href="/att/apply#"></a>
  <a class="nav <?php if (arg(1) == 635636) print "active"; ?>" id="gallery" href="/att/gallery#"></a>
  <img id="topnav" src="/<?=$ds_micro;?>/att/topnav2.png"/>

  <div id="share">
    <div class="text"> Share this page: </div>
    <a target="_blank" href="http://facebook.com/sharer.php?u=http://www.dosomething.org<?=$current_path;?>"><img src="/<?=$ds_micro;?>/att/facebook-small.png"/></a>
    <a target="_blank" href="http://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=http%3A%2F%2Fwww.dosomething.org%2Fatt&amp;template=%40DoSomething+and+%40ATT+are+teaming+up+to+offer+%2435%2C000+in+college+scholarships+to+students%21+%7B%7Burl%7D%7D+%23scholarship&amp;shortener=bitly&amp;username=dosomething">
    <img src="/<?=$ds_micro;?>/att/twitter-small.png"/>
    </a>
  </div>
  </div>



			<?php print $content; ?>
        			<?php print $content_bottom;?>
			<div style="clear:both;"></div>
<br />

					
					
					
        </div>
        <!-- end main text -->

        <!-- begin sidebar -->
<?php if ($sidebar_right || $secondary_links) { ?>
        <div id="sidebar-right">
<?php
print theme('secondary_links',$secondary_links);
?>

			<?=$sidebar_right;?>
        </div>
<?php } ?>
        <!-- end sidebar -->

        <div class="clear"></div>
<?php if ($closure_region) { ?>
		<?=$closure_region;?>
<?php } ?>
<div id="badge-container">
<a class="dmca-badge" target="_blank" href="http://www.dmca.com/Protection/Status.aspx?id=99446bee-5e2f-442c-ada4-e46ccf6b76d4" title="Website Content Protection"> <img src ="/<?=$ds_micro;?>/att/dmca_protected.png"  alt="Website Content Protection" /></a>
</div>
  <div id='att-footer' class="dashed">
    <a href='/att/apply#judging-criteria'>Judging Criteria</a> |
    <a href='/att/faq'>FAQ</a> |
    <a href='/att/apply#contest-rules'>Rules</a> |
    <a target="_blank" href='http://www.att.com'>Link to AT&T</a>
  </div>
	</div>
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
<script type="text/javascript">Cufon.now();</script>

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
