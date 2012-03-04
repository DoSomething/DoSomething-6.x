<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  
  <meta property="og:title" content="<?=$head_title;?>"/>
  <meta property="og:type" content="non_profit"/>
  <meta property="og:url" content="http://www.dosomething.org/spring-dinner" />
  <meta property="og:image" content="http://www.dosomething.org/sites/all/micro/spring-dinner/images/sd-logo.jpg" />
  <meta property="og:site_name" content="Dosomething.org's Spring Dinner! | DoSomething.org"/>
  <meta property="og:description" content="Want a plate full of something other than apathy? Then join DoSomething.org on May 3 at our Spring Dinner. Honorees include Reid Hoffman, Kimberly Davis, and John Swift. www.dosomething.org/spring-dinner."/>
 
  <?php print $head; ?>
  <?php print $styles; ?>
  <link rel="stylesheet" href="/<?=$ds_micro.'/spring-dinner/spring-dinner.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=$ds_micro.'/spring-dinner/fonts.css';?>" type="text/css" media="all" />
<!--[if lte IE 9]>
	<link rel="stylesheet" type="text/css" href="/<?=$ds_micro.'/spring-dinner/spring-dinner-ie.css';?>" />
<![endif]-->
  <?php print $scripts; ?>

  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $('.links a').click(function (event) {
	$('html,body').animate({scrollTop: $(event.target.hash).offset().top}, 'slow');
	return false;
      });
    });
  </script>

</head>

<body class="<?php print $classes; ?>">

  <div id="page-wrapper"><div id="page">
  <? print str_replace('/sites/all/themes/dosomething/images/logo.png', '/sites/all/micro/battle/images/ds-logo.png', theme('header', array( 
                              'front_page' => $front_page,
                              'directory' => $directory,
                              'mission' => $mission,
                              'top_right' => $top_right,
                              ))); ?>
    <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix<?php if ($primary_links || $navigation) { print ' with-navigation'; } ?>">
	 
	<div id="social">
		<div id="fb-root"></div>
		  <script>(function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) return;
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		    fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));</script>
		<div class="fb-like" data-href="http://dosomething.org/spring-dinner" data-send="false" data-layout="box_count" data-width="50px" data-show-faces="false"></div> 

		<a href="https://twitter.com/share" class="twitter-share-button" data-url="www.dosomething.org/spring-dinner" 

		data-text="We're having our annual Spring Dinner and you're invited, but don't expect apathy on the menu, we're allergic: http://dsorg.us/zLUnqz." data-count="vertical">Tweet</a>
			   
		<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
		<g:plusone size="tall" href="http://www.dosomething.org/spring-dinner"></g:plusone>
		<script type="text/javascript">
		            (function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js';
		                          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		                        })();
	    </script>
	
	</div> <!--END SOCIAL DIV-->
	
	<div class="clear-both"></div>
	
	<img id="campaign-logo" src="/<?=$ds_micro;?>/spring-dinner/images/logo.png" alt=""/>
	
	<p id="campaign-slogan">JOIN US MAY 3RD, 2012 AT THE EDISON BALLROOM</p>

		<?php
	          $root = 'spring-dinner';
	          $nav = array(
	              array('href' => $root, 'title' => 'our story', 'fragment' => 'our-story'),
	              array('href' => $root, 'title' => 'honorees & co-chairs', 'fragment' => 'honorees'),
	              array('href' => $root, 'title' => 'sponsors', 'fragment' => 'sponsors'),
	              array('href' => $root, 'title' => 'event', 'fragment' => 'event'),
	          );
	          foreach ($nav as &$n) {
	            $path = drupal_lookup_path('source', $n['href']);
	            if (!empty($path)) $n['href'] = $path;
	          }
	          echo theme_links($nav);
	        ?>

		<div id="content" class="column"><div class="section">

        <?php print $highlight; ?>

        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>

        <?php print $help; ?>

        <?php print $content_top; ?>
 
        <div id="content-area" class="content">
	 
	 <?php
          $messages = str_replace('You must <a href="/user/login?destination=node%2F737134">login</a> or <a href="/user/register?destination=node%2F737134">register</a> to view this form.',
            'To complete your sign up to spring-dinner For The Bands you must <a href="/user/login?destination=node%2F737134">login</a> or <a href="/user/register?destination=node%2F737134">register</a>.', $messages);
?>
      <?php print $messages; ?>
    
    
    
    <?php if ($right) print $right; ?>
    
    
    <?php print $content; ?>
    
    
    <?php print $content_bottom; ?>
    
    </div>

        <?php if ($feed_icons): ?>
          <div class="feed-icons"><?php print $feed_icons; ?></div>
        <?php endif; ?>

      </div></div> <!-- /.section, /#content -->

      <?php if ($primary_links || $navigation): ?>
        <div id="navigation"><div class="section clearfix">

          <?php print theme(array('links__system_main_menu', 'links'), $primary_links,
            array(
              'id' => 'main-menu',
              'class' => 'links clearfix',
            ),
            array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => 'element-invisible',
            ));
          ?>

          <?php print $navigation; ?>

        </div></div> <!-- /.section, /#navigation -->
      <?php endif; ?>

      <?php //print $sidebar_first; ?>

      <?php //print $sidebar_second; ?>

    </div> </div> <!-- /#main, /#main-wrapper -->

    <?php if ($footer || $footer_message || $secondary_links): ?>

      <div id="footer"><div class="section">

        <?php print theme(array('links__system_secondary_menu', 'links'), $secondary_links,
          array(
            'id' => 'secondary-menu',
            'class' => 'links clearfix',
          ),
          array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => 'element-invisible',
          ));
        ?>

        <?php if ($footer_message): ?>
          <div id="footer-message"><?php print $footer_message; ?></div>
        <?php endif; ?>

        <?php if ($search_box): ?>
          <div id="search-box"><?php print $search_box; ?></div>
        <?php endif; ?>

        <?php print $footer; ?>


      </div></div> <!-- /.section, /#footer -->
    <?php endif; ?>

  </div></div> <!-- /#page, /#page-wrapper -->

  <?php print $page_closure; ?>

  <?php print $closure; ?>

</body>
</html>


