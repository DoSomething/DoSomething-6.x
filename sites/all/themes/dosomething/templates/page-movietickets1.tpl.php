<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php
    if ($_SERVER['HTTP_USER_AGENT'] == 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)') :
  ?>
  <!-- Change things here for Facebook and twitter -->
  <meta name="description" content="Give a Spit About Cancer" />
  <meta property="og:title" content="Give a Spit About Cancer | Do Something"/>
  <meta property="og:url" content="http://dosomething.org/spit" />
  <meta property="og:image" content="http://www.dosomething.org/sites/all/micro/spit/spit-logo.png" />
  <meta property="og:description" content="Do you Give a Spit about Cancer? Swab your cheek and you could save a life. Join me at the marrow donor registration drive!" />
  <meta property="og:type" content="non_profit"/>
  <meta property="fb:admins" content="508145411,603061,630191494" />
  <meta property="fb:app_id" content="93836527897" />
  <meta property="og:site_name" content="DoSomething.org"/>
  
  <?php endif; ?>
  <!-- Here is the CSS -->
  <link rel="stylesheet" href="/<?=$ds_micro.'/spit/spiton.css';?>" type="text/css" media="all" />
  <?php print $scripts; ?>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  

    
</head>

<body class="<?php print $classes; ?>">

  <div id="page-wrapper"><div id="page">
  <? print theme('header', array(
                              'front_page' => $front_page,
                              'directory' => $directory,
                              'mission' => $mission,
                              'top_right' => $top_right,
                              )); ?>
    <div id="main-wrapper" class="clearfix">
	<!-- logo 
	<a href="http://www.DoSomething.org/spit" id="header-message"><img  src="/<?=$ds_micro;?>/spit/spit-logo.png"/></a>
	-->
	<div id="main" class="clearfix<?php if ($primary_links || $navigation) { print ' with-navigation'; } ?>">
     
      <div id="menu">
	  
    <!-- Add menu here -->
	 
      </div>
      <div id="content" class="column"><div class="section">

        <?php print $highlight; ?>

        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>

        <?php print $help; ?>

        <?php print $content_top; ?>

        <div id="content-area">

      <?php print $messages; ?>
    
    <div class="clearfix">
    
    <?php if ($right) print $right; ?>
    
    
    <h2 class="title"><?php print $title; ?></h2>
    <?php print $content; ?>
    <!--</div>-->
	
    </div>
    
    </div></div>

        <?php print $content_bottom; ?>

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


    </div> <!-- /#main, /#main-wrapper -->

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
