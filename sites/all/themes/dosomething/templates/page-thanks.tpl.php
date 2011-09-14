<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php
    if ($_SERVER['HTTP_USER_AGENT'] == 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)') :
  ?>
  <meta property="og:title" content="<?=$head_title;?>"/>
  <meta property="fb:admins" content="508145411,603061,630191494" />
  <meta property="fb:app_id" content="93836527897" />
  <meta property="og:type" content="non_profit"/>
  <meta property="og:url" content="http://www.dosomething.org/thanks" />
  <meta property="og:site_name" content="DoSomething.org"/>
  <meta property="og:description" content="Say thanks to Emergency Service Workers and leave a message on the gratitude map!"/>
  
  <?php endif; ?>
  <link rel="stylesheet" href="/<?=$ds_micro.'/decade/decade.css';?>" type="text/css" media="all" />
  <?php print $scripts; ?>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript" src="/<?=$ds_micro.'/decade/decade.js';?>"></script>
  <!-- [if lt IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
  <![endif]-->
</head>

<?
  $current_path = preg_replace('/^\//', '', drupal_get_path_alias(request_uri()));
  $twitter_text = "I'm honoring Emergency Service Workers during this Decade of Thanks with @DoSomething! #DSThanks";
  $total = db_result(db_query('SELECT COUNT(*) FROM node WHERE type=\'decade_2011_signup\''));
?>

<body class="<?php print $classes; ?>">

  <div id="page-wrapper"><div id="page">
  <? print theme('header', array(
                              'front_page' => $front_page,
                              'directory' => $directory,
                              'mission' => $mission,
                              'top_right' => $top_right,
                              )); ?>
    <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix<?php if ($primary_links || $navigation) { print ' with-navigation'; } ?>">
        <?php if ($tabs): ?> <div class="tabs"><?php print $tabs; ?></div> <?php endif; ?>
     <a href="http://www.DoSomething.org/thanks"><img class="header-message" src="/<?=$ds_micro;?>/decade/decade_logo.png" alt="A Decade of Thanks: Honoring emergency service workers."/></a>
   <img class="header-message" id="banner" src="/<?=$ds_micro;?>/decade/banner.png" alt="In remembrance of the 10th anniversary of 9/11,  Do Something wants to partner with YOU in creating the largest online collection of messages of gratitude towards Emergency Service Workers.  Show your thanks by leaving a message on our gratitude map."/>
      <?php print $messages; ?>
    <?php if ($right) print $right; ?>
    <div style="float: right; margin-right:20px;">Total Thanks: <?=$total;?></div>
    <form id="thanks-search" onsubmit="querySignups();return false;" >
      <input type="text" id="input-proximity" value="10" name="input-proximity" size="1" maxlength="5" style="text-align:right;">
      <label for="postal-code">miles from Postal Code:</label>
      <input type="text" id="postal-code" name="postal-code" size="5" style="display:inline">
      <input type="submit" style="display:none"/>
      <a href="javascript:querySignups();"><img src="http://www.dosomething.org/nd/buttons/search.png" border="0"/></a><img id="spinner" src="/<?=path_to_theme();?>/images/spinner.gif" />
    </form>
    
    <div id="map_canvas"></div>
    <div class="overlay-container">
    <img id="map-overlay" src="/<?=$ds_micro;?>/decade/map-overlay2.png" alt="Share our gratitude map!"/>
    <div class="share-thanks">
    <a target="_blank" href="http://facebook.com/sharer.php?u=<?=urlencode('http://www.dosomething.org/'.$current_path);?>"><img class="facebook" src="/<?=$ds_micro;?>/decade/facebook.png" alt="Share this page on Facebook"/></a>
    <a target="_blank" href="http://twitter.com/intent/tweet?text=<?=urlencode($twitter_text).'&url=http://www.dosomething.org/'.$current_path;?>"><img class="twitter" src="/<?=$ds_micro;?>/decade/twitter.png" alt="Share this page on Twitter"/></a>
    </div>
    </div>
      <div id="content" class="column"><div class="section">
      <div style="clear:both"></div>
        <?php print $highlight; ?>


        <?php print $help; ?>

        <?php print $content_top; ?>

        <div id="content-area">

    
    
    <h2 class="title"><?php print $title; ?></h2>
    <?php print $content; ?>
    
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


    </div>  <!-- /#main, /#main-wrapper -->

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
