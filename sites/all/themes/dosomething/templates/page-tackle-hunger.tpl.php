<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<head>
  <link rel="image_src" href="http://www.dosomething.org/files/imagecache/120x40/nd/tackle-hunger/tackle-hunger.png" />
  <!--<meta property='og:image' content='http://www.dosomething.org/files/imagecache/120x40/nd/tackle-hunger/tackle-hunger.png' />-->
  <meta property='og:image' content='http://www.dosomething.org/nd/tackle-hunger/tackle-hunger-new-logo.png' />
  <meta property="og:type" content="non_profit"/>
  <meta property="og:title" content="Tackle Hunger | Do Something"/>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/style.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/additional.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/block-editing.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/zen.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/drupal5-reference.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/tabs.css';?>" type="text/css" media="all" />

  <link type="text/css" rel="stylesheet" href="/nd/tackle-hunger/th.css">
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

  <?php 
    // weird hack -- functions.js seems to break cufon
    print preg_replace('#<script type="text/javascript" src="/sites/all/themes/zen/dosomething/functions.js"></script>#', '', $scripts); ?>

  <script type="text/javascript" src="/nd/tackle-hunger/cufon-yui.js"></script>
  <script type="text/javascript" src="/nd/tackle-hunger/Frutiger.js"></script>
  <script type="text/javascript">
    Cufon.replace('#subnav li');
    Cufon.replace('#container h2');
    Cufon.replace('#lbs-counter .pledged');
    Cufon.replace('#lbs-counter .number');
    Cufon.replace('.col_left .blurb');
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
        <div class="col_left" style="text-align:center;">
            <div id="primary">
				<!--Begin Primary Links-->
				<?=theme('primary_links');?>
				<!--End Primary Links-->

            </div>
        <h2 class="blurb" style="color:#48BCDC;">We need your help to tackle hunger.</h2>
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

        <!-- begin main text -->
        <div id="main">
        
          <?php if ($messages): print $messages; endif; ?>
          
          <?php print $tabs;?>

          <?php if(!$node && arg(0) != 'user'){ print '<h2>' . $title . '</h2>'; }?>
          
          <?php if(($help)&&(arg(0)=='node')&&(arg(1)=='add')): print $help; endif;?>

          <ul id="subnav">
            <li class="first"><a href="/tackle-hunger#">Home</a></li>
            <!--<li><a href="/tackle-hunger/share#">Tell A Friend</a></li>-->
<!--            <li><a href="#">Gallery</a></li> -->
            <li><a href="/tackle-hunger/run-your-drive#">Run Your Drive</a></li>
            <li class="last"><a href="/tackle-hunger/report-back#">Report Back</a></li>
          </ul>

          <?php print $content_top;?>
          <?php print $content; ?>

          <?php print $content_bottom;?>


					
        
      </div>
        <!-- end main text -->

        <div id="sidebar-left">
          <a href="/tackle-hunger"><img src="/nd/tackle-hunger/tackle-hunger-new-logo.png" /></a>
          <div style="clear: both; padding-top: 1em;"></div>
          <!--<iframe title="YouTube video player" class="youtube-player" type="text/html" width="300" height="200" src="http://www.youtube.com/embed/c5KVEy0I60I?rel=0" frameborder="0"></iframe>-->
<object width="300" height="200"><param name="movie" value="http://www.youtube.com/v/rI5l3xL58LA?fs=1&hl=en_US&rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/rI5l3xL58LA?fs=1&hl=en_US&rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="300" height="190"></embed></object>

          <?php global $user;
          if (! $user->uid):?>
          <h2>Register Your Drive</h2>
               <a href="/user/login?destination=node%2F613169"><img src="/nd/tackle-hunger/signup_greyed_out_fin.png" /></a>
          <?php else: ?>
          <div style="background-color: #20c0e0">
<?php
              $my_drive = db_fetch_object(db_query("SELECT cg.field_campaign_group_value as name, sum(field_tackle_hunger_expected_lb_value) as sum FROM content_type_tackle_hunger th LEFT JOIN node n ON n.nid=th.nid LEFT JOIN content_field_campaign_group cg ON cg.nid=th.nid WHERE n.uid=$user->uid"));
              $mysum = $my_drive->sum;
              if (! $mysum) {
                $mysum = 0;
              }
              $mysum = number_format($mysum);
              if ($mysum) {
                print '<div class="form item">';
                print '<h2 align="center">'.$my_drive->name.':</h2>';
                print '<div id="lbs-counter">';
                print '<p class="pledged">'.$mysum.' pounds pledged</p>';
                print '</div></div>';
              } else {
                //THIS WILL NOT WORK IN D6+ DUE TO CACHING, ALL FORMS NEED TO BE IN A NODE BODY OR BLOCK
                /*$node = new stdClass();
                $node->type = 'tackle_hunger';
                print '<h2>Register Your Drive</h2>';
                print drupal_get_form('tackle_hunger_node_form', $node);*/
                print '</div>';
              }
              endif;
            ?>
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
