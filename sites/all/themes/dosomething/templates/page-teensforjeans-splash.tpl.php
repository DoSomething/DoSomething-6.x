<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  
	<meta property="og:title" content="Teens For Jeans | Do Something" />
	<meta property="fb:admins" content="508145411,603061,630191494" />
	<meta property="fb:app_id" content="93836527897" />
	<meta property="og:type" content="non_profit" />
	<meta property="og:url" content="http://www.dosomething.org/teensforjeans" />
	<meta property="og:site_name" content="DoSomething.org" />
	<meta property="og:description" content="1 in 3 homeless people in the U.S. is under the age of 18. I'm doing something about it, you should too!" />
	<meta property="og:image" content="http://www.dosomething.org/sites/all/micro/t4j-2012/tfj-logo.png" />
	
  <link rel="stylesheet" href="/<?=$ds_micro.'/t4j-2012/t4j.css';?>" type="text/css" media="all" />
    <link rel="stylesheet" href="/<?=$ds_micro.'/t4j-2012/fonts.css';?>" type="text/css" media="all" />	
    
  <?php print $scripts; ?>
</head>

<body class="<?php print $classes; ?>">

  <div id="page-wrapper"><div id="page">
  <? print theme('header', array( 
                              'front_page' => $front_page,
                              'directory' => $directory,
                              'mission' => $mission,
                              'top_right' => $top_right,
                              )); ?>
    <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix<?php if ($primary_links || $navigation) { print ' with-navigation'; } ?>">
    <img id="campaign-date-header" class="center-image" src="/<?=$ds_micro;?>/t4j-2012/campaign-date-header.png" />
     
      <div id="content" class="column"><div class="section">

        <?php print $highlight; ?>

        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>

        <?php print $help; ?>
		     <?php print $messages; ?>
		 <img id="t4j-logo-with-sponsors-splash" class="center-image" src="/<?=$ds_micro;?>/t4j-2012/t4j-logo-with-sponsors.png" />

        <?php print $content_top; ?>

        <div id="content-area" class="content">

    <div id="t4j">
	

    
    
    
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
