<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<?

$current_path = drupal_get_path_alias(request_uri());
$last_path_item = preg_replace('/[?#].*/','',
                    array_pop(explode('/', $current_path)));
$description="I'm giving up oil for a week -- will you?";
$twitter_description=$description.' http://dsorg.us/no-oil #WeekWithoutOil with @DoSomething';
?>

<head>
  <meta property="og:title" content="<?=$head_title;?>"/>
  <meta property="fb:admins" content="508145411,603061,630191494" />
  <meta property="fb:app_id" content="93836527897" />
  <meta property="og:type" content="non_profit"/>
  <meta property="og:image" content="http://www.dosomething.org/nd/wwo/oilrig.png" />
  <meta property="og:site_name" content="DoSomething.org"/>
  <meta property="og:description" content="<?=$description;?>"/>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <link rel="stylesheet" href="/nd/wwo/wwo.css" type="text/css" media="all" />
    <!--[if lte IE 7]>
      <link rel="stylesheet" type="text/css" href="/nd/wwo/ie7.css">
    <![endif]--> 
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/style.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/additional.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/block-editing.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/zen.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/drupal5-reference.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/tabs.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=$ds_micro;?>/wwo/wwo.css" type="text/css" media="all" />
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
  <script type="text/javascript">
    function supports_input_placeholder() {
      var i = document.createElement('input');
      return 'placeholder' in i;
    }

    $(document).ready(function() {
      if (supports_input_placeholder()) {
        $(".caption").hide();
        $(".macaskill").hide();
      }
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
        <img class="dates" src="/nd/wwo/dates.jpg"/>
        </div>
        <div class="col_right">
			<!--Begin Top Right Block Section-->
      <?=$top_right;?>
			<!--End Top Right Block Section-->
        </div>
        <div class="clear"></div>
    </div>

    <div id="container">

        <!-- begin main text -->
        <div id="main" class="<?=$last_path_item;?>">
        
				<?php if ($messages): print $messages; endif; ?>
        
        <?php print $tabs;?>
        <?php if(!$node && arg(0) != 'user'){ print '<h2>' . $title . '</h2>'; }?>
        
        <?php if(($help)&&(arg(0)=='node')&&(arg(1)=='add')): print $help; endif;?>
			<?php print $content_top;?>
      <?php print $content; ?>
        			<?php print $content_bottom;?>
			<div style="clear:both;"></div>
       <div class="center"> 
       <div class="wwo-footer">
       <div class="social">
       <a target="_blank" class="facebook icon square first" href="http://www.facebook.com/sharer.php?u=http://www.dosomething.org/week-without-oil">Share Week Without Oil on Facebook</a>
       <a target="_blank" class="twitter icon square" href="http://twitter.com/home?status=<?=urlencode($twitter_description);?>">Tweet Week Without Oil</a>
       <a target="_blank" class="digg icon square" href="http://www.digg.com/submit?url=<?=urlencode("http://www.dosomething.org/week-without-oil/");?>">Submit Week Without Oil to Digg</a>
       <div style="clear:both"></div>
       </div>
       <div class="links">
       <? if ($last_path_item != 'faq') { ?>
       <a class="faq icon square" href="/week-without-oil/faq">FAQ</a>
       <? } ?>
       <? if ($last_path_item != 'week-without-oil') { ?>
       <a class="home icon square" href="/week-without-oil">Home</a>
       <? } ?>
       </div>
      </div>	
     </div>
        </div>
        <!-- end main text -->

	</div>
    <div id="footer">
		<!--Begin Footer-->
		<?=$footer_message;?>
		<!--End Footer-->
    <form action="" method="post" id="search">
      <p>
        <input type="hidden" name="form_token" id="edit-search-theme-form-form-token" value="<?=drupal_get_token('search_theme_form');?>"  />
        <input type="hidden" name="form_id" id="edit-search-theme-form" value="search_theme_form"  />
        <input type="text" id="qsearch" name="search_theme_form_keys" value="..." maxlength="" class="styled" onClick="if(this.value == '...') { this.value=''; } "/>
        <input type="image" src="<?=$base_path.$subtheme_directory;?>/images/form_submit_search_footer.png" name="op" value="Search" alt="search" class="submit" />
      </p>
    </form>

    <a href="http://creativecommons.org/licenses/by-nc-nd/3.0/" style="display: block; width: 88px; margin: 0 auto;"><img src="/sites/all/themes/zen/dosomething/cc.png" alt="Creative Commons"></a>

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
