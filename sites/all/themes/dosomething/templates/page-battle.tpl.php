<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  
  <meta property="og:title" content="<?=$head_title;?>"/>
  <meta property="fb:admins" content="508145411,603061,630191494" />
  <meta property="fb:app_id" content="93836527897" />
  <meta property="og:type" content="non_profit"/>
  <meta property="og:url" content="http://www.dosomething.org/battle" />
  <meta property="og:image" content="http://www.dosomething.org/sites/all/micro/battle/images/bob_logo.png" />
  <meta property="og:site_name" content="Battle for the Bands | DoSomething.org"/>
  <meta property="og:description" content="Music education is important, students who participate in music programs have a better chance of staying in school, perform better in math and score about 100 points higher on their SATs. Click here to join Do Something and VH1 Save The Music for Battle for the Bands, a campaign to save music education."/>
 
  <?php print $head; ?>
  <?php print $styles; ?>
  <link rel="stylesheet" href="/<?=$ds_micro.'/battle/battle.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=$ds_micro.'/battle/fonts.css';?>" type="text/css" media="all" />
  <?php print $scripts; ?>

  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
  <script type="text/javascript" src="/<?=$ds_micro.'/battle/bftb.js';?>"></script>
  <script src="/sites/all/micro/art-2011/popup.js"></script>
  <script src="/sites/all/micro/battle/judges/judges.js"></script>

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
	<a href="http://www.vh1savethemusic.com/">
		<img id="vh1-logo" src="/<?=$ds_micro;?>/battle/images/bob_vh1.png" alt="VH1 Logo" />
	</a>
    <a href="/battle">
		<img id="campaign-logo" src="/<?=$ds_micro;?>/battle/images/bob_justlogo.png" alt="Battle for the Bands logo"/>
	</a>
	 
	<div id="social">
		<h1>March 1-April 26th</h1>
		<p>Submit a video to fight for your school's music program.</p>
	
	<iframe src="//www.facebook.com/plugins/like.php?href=www.dosomething.org%2Fbattle&amp;send=false&amp;layout=box_count&amp;width=60&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:52px; height:62px;" allowTransparency="true"></iframe>
		<!-- TEENS FOR JEANS WIDTH/HEIGHT = 60/90 SRC, 50/62 HTML -->
		<!-- TEST - MAXWELL WIDTH/HEIGHT = 90/50 SRC, 90/50 HTML -->
	
	<a href="https://twitter.com/share" class="twitter-share-button" data-url="www.dosomething.org/battle" 
	
	data-text="I've joined @DoSomething.org's Battle for the Bands to fight 4 music education in schools. R U going to join the fight? #battleforthebands" data-count="vertical">Tweet</a>
	
	<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
	<g:plusone size="tall" href="http://www.dosomething.org/battle"></g:plusone>
	<script type="text/javascript">
	            (function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js';
	                          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	                        })();
    </script>
	
	</div>
	
	<div class="clear-both"></div>
		
		<div id="content" class="column"><div class="section">

        <?php print $highlight; ?>

        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>

        <?php print $help; ?>
	
		<?php
	          $root = 'battle';
	          $nav = array(
	              array('href' => $root, 'title' => 'home'),
	              array('href' => $root.'/share-your-video', 'title' => 'share your video'),
	              array('href' => $root.'/video-gallery', 'title' => 'video gallery'),
	              array('href' => $root.'/celeb-gallery', 'title' => 'celebrity gallery'),
	              array('href' => $root.'/contests', 'title' => 'contests'),
	              array('href' => $root.'/contests', 'title' => 'scholarships', 'fragment' => 'scholarships'),
	              array('href' => $root.'/faq', 'title' => 'faq'),
		      array('href' => $root.'/blog', 'title' => 'blog'),
	          );
	          foreach ($nav as &$n) {
	            $path = drupal_lookup_path('source', $n['href']);
	            if (!empty($path)) $n['href'] = $path;
	          }
	          echo theme_links($nav);
	        ?>

           <!-- array('href' => $root.'/blog', 'title' => 'blog'), -->
	

        <?php print $content_top; ?>
	
 
        <div id="content-area" class="content">

    <div id="bob-wrapper">
	 
	 <?php
          $messages = str_replace('You must <a href="/user/login?destination=node%2F737134">login</a> or <a href="/user/register?destination=node%2F737134">register</a> to view this form.',
            'To complete your sign up to Battle For The Bands you must <a href="/user/login?destination=node%2F737134">login</a> or <a href="/user/register?destination=node%2F737134">register</a>.', $messages);
?>
      <?php print $messages; ?>
    
    
    
    <?php if ($right) print $right; ?>
    
    
    <?php print $content; ?>
    
    
    <?php print $content_bottom; ?>
    
    </div></div>

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
		
		
		<div class="mustard-box small-box left">
			<div class="box-header">
				<h2 class="center-text">Prizes</h2>
			</div> 		<!-- end box-header div-->
			<div class="box-content">
				<p>You can win scholarships, concert tickets or even a chance to perform at Lollapalooza!</p>
				<div class="mustard-low"><a href="http://www.dosomething.org/battle/contests"><div class="small-button center">view prizes</div></a></div>
			</div> 		<!-- end box-content div-->
		</div> 		<!-- end mustard-box small-box left div-->

		<div class="mustard-box small-box left">
			<div class="box-header">
				<h2 class="center-text">Video How To's</h2>
			</div> 		<!-- end box-header div-->
			<div class="box-content">
				<p>We'll give you the tips you need to make a great video.</p>
				<div class="mustard-low"><a href="http://www.dosomething.org/nd/pdf/battle-video-guide.pdf" target="_blank"><div class="small-button center">get started</div></a></div>
			</div> 		<!-- end box-content div-->
		</div> 		<!-- end mustard-box small-box left div-->

		<div class="mustard-box small-box left">
			<div class="box-header">
				<h2 class="center-text">Judges</h2>
			</div>	<!-- end box-header div-->
			<div class="box-content">
				<p>We've got celebs, music industry insiders and media experts checking out your video.</p>
				<!-- <div class="mustard-low"><a href="http://www.dosomething.org/battle/judges"><div class="small-button center">check 'em out</div></a></div> -->
			</div> 		<!-- end box-content div-->
		</div> 		<!-- end mustard-box small-box left div-->

		<div class="clear-both"></div>
		
		
		<a href="http://idolator.com/">
			<img class="sponsor2012" src="/<?=$ds_micro;?>/battle/images/bob_idol.png" alt="Idolator Logo" />
		</a>

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

    </div>
  </div></div> <!-- /#page, /#page-wrapper -->

  <?php print $page_closure; ?>

  <?php print $closure; ?>

</body>
</html>


