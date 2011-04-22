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
  <link rel="stylesheet" href="/nd/t4j-2011/t4j.css" type="text/css" media="all" />
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

  <meta property="og:title" content="Teens for Jeans" />
  <meta property="og:type" content="non_profit" />
  <meta property="og:url" content="http://www.dosomething.org/teensforjeans" />
  <meta property="og:image" content="http://www.dosomething.org/nd/t4j-2011/logo.png" />
  <meta property="og:description" content="1 in 3 homeless people in the US is under 18- that's why I'm taking action against youth homelessness by joining Teens For Jeans.  Check out http://TeensForJeans.com to learn how you can take action, too." />

  <?php print $scripts; ?>

</head>

<?php /* different classes allow for separate theming of the home page */ ?>
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
      <?=theme('login_links').
         theme('signup_block');?>
			<!--End Top Right Block Section-->
        </div>
        <div class="clear"></div>
    </div>

    <div id="container">

        <!-- begin main text -->
        <div id="main">
        
          <?php if(!$node && arg(0) != 'user'){ print '<h2>' . $title . '</h2>'; }?>
          <?php if(($help)&&(arg(0)=='node')&&(arg(1)=='add')): print $help; endif;?>

          <div id="t4j-top">
            <form method="post" id="update-dia" action="http://org2.democracyinaction.org/dia/api/process.jsp">
  <input type="hidden" name="table" value="supporter" />
  <input type="hidden" name="organization_KEY" value="5216" />
  <input type="hidden" name="tag" value="tfj_2011_updates" />
  <input type="hidden" name="tag_KEY" value="175123" />
  <input type="hidden" name="redirect" value="http://www.dosomething.org/teensforjeans" />

            <div class="update-container">
              <label for="dia">Enter your email address</label><br />
              <input id="dia" type="text" name="Email" value="email" onclick="if (this.value == 'email') { this.value=''; }"onblur="if (this.value == '') { this.value = 'email'; }" /><br />
              <label for="mc">Enter your phone number</label><br />
              <input id="mc" type="text" name="Cell_Phone" value="cell" onclick="if (this.value == 'cell') { this.value=''; }"onblur="if (this.value == '') { this.value = 'cell'; }" /><br />
            </div>
            <input class="go" type="submit" value="go" />
          </form>
          <!--<img id="callout" src="/nd/t4j-2011/callout.png" alt="Donate your jeans at any A&eacute;ropostale Jan 17 - Feb 13 and get an additional 25% off a new pair of jeans" />-->
          <a id="t4j-logo" href="/teensforjeans"><img src="/nd/t4j-2011/logo.png" alt="Teens for Jeans Logo" /></a>
          <div id="t4j-sign">
            <div id="t4j-signup">
            </div>
          </div>
			<?php if ($messages): print $messages; endif; ?>
          <div style="clear: both; padding-top: 1.5em;"></div>
          <div id="page-share">
            <img src="/nd/t4j-2011/share.png" alt="Share with a friend" />
            <a target="_blank" href="http://twitter.com/home?status=I'm%20running%20a%20%23TeensForJeans%20blue%20jeans%20drive%20to%20fight%20youth%20homelessness.%20Visit%20http%3A%2F%2FTeensForJeans.com%20to%20learn%20more."><img src="/nd/t4j-2011/twitter.png" /></a>

            <a target="_blank" href="http://facebook.com/sharer.php?u=http://www.dosomething.org/teensforjeans?home"><img src="/nd/t4j-2011/facebook.png" /></a>
<!--
          <a name="fb_share" type="icon" share_url="http://www.dosomething.org/teensforjeans"></a> 
          <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
-->
          </div>
          <div id="t4j-nav">
            <ul>
              <li><a <?php if (arg(1) == 624748) print 'class="active" '; ?>id="get-started" href="/teensforjeans">Get Started</a></li>
<!--
              <li><a <?php if (arg(1) == 625348) print 'class="active" '; ?>id="drop-off" href="http://www.aeropostale.com/storeLocator/index.jsp" target="_blank">Drop Off</a></li>
-->
              <li><a <?php if (arg(1) == 625352) print 'class="active" '; ?>id="take-action" href="/teensforjeans/take-action">Take Action</a></li>
              <li><a <?php if (arg(1) == 625354) print 'class="active" '; ?>id="contests" href="/teensforjeans/contests">Contests</a></li>
              <li><a <?php if (arg(1) == 625357) print 'class="active" '; ?>id="your-pics" href="/teensforjeans/your-pics">Your Pics</a></li>
            </ul>
          </div>
          <div style="clear: both;"></div>
        </div>


			<?php print $content_top;?>
			<?php print $content; ?>
      <?php print $content_bottom;?>

			<div style="clear:both;"></div>
<br />

					
					
					
        </div>
        <!-- end main text -->
        <a id="whats-new" target="_blank" href="http://www.aeropostale.com"><img src="/nd/t4j-2011/whats_new.png" alt="See what's new at A&eacute;ro" /></a>
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
