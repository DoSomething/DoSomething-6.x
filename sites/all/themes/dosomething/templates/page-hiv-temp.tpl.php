<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  
   <meta property="og:title" content="<?=$head_title;?>"/>
  <meta property="fb:admins" content="508145411,603061,630191494" />
  <meta property="fb:app_id" content="93836527897" />
  <meta property="og:type" content="non_profit"/>
<?php if (isset($node->field_trashy_image)) : ?>
  <meta property="og:image" content="<?php echo imagecache_create_url('200_by_200', $node->field_trashy_image[0]['filepath']); ?>" />
<?php else: ?>
  <meta property="og:url" content="http://www.dosomething.org/hiv-temp" />
  <meta property="og:image" content="http://www.dosomething.org/sites/all/micro/hiv/images/hiv-logo.png" />
<?php endif; ?>
  <meta property="og:site_name" content="Update Your Status | DoSomething.org"/>
  <meta property="og:description" content="Facebook copy needed"/>
  
  <?php print $head; ?>
  <?php print $styles; ?>
  <link rel="stylesheet" href="/<?=$ds_micro.'/hiv/hiv.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=$ds_micro.'/tfj-full/fonts.css';?>" type="text/css" media="all" />
  <?php print $scripts; ?>
  <script type="text/javascript" src="/sites/all/micro/hiv/hiv.js"></script>
</head>

<body class="<?php print $classes; ?>">

  <div id="page-wrapper"><div id="page">
  <? print str_replace('/sites/all/themes/dosomething/images/logo.png', '/sites/all/micro/tfj-full/images/ds-logo.png', theme('header', array( 
                              'front_page' => $front_page,
                              'directory' => $directory,
                              'mission' => $mission,
                              'top_right' => $top_right,
                              ))); ?>
    <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix<?php if ($primary_links || $navigation) { print ' with-navigation'; } ?>">
    <a href="/hiv-temp"><img id="hiv-logo" src="/<?=$ds_micro;?>/hiv/images/hiv-logo.png" /></a>
	<a href="/hiv-temp/tell-us"><img id="get-swag" src="/<?=$ds_micro;?>/hiv/images/get-swag.png" /></a>
	 
	 <div id="block-webform-client-block-734426">
        <?php $sign_up = module_invoke('webform', 'block', 'view', 'client-block-734426');
          echo $sign_up['content'];
        ?></div>
       <div id="content" class="column"><div class="section">
       
       
       <div id="social">

<iframe src="//www.facebook.com/plugins/like.php?href=www.dosomething.org%2Fstatus&amp;send=false&amp;layout=box_count&amp;width=60&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:52px; height:62px;" allowTransparency="true"></iframe>
	<!-- TEENS FOR JEANS WIDTH/HEIGHT = 60/90 SRC, 50/62 HTML -->
	<!-- TEST - MAXWELL WIDTH/HEIGHT = 90/50 SRC, 90/50 HTML -->

<a href="https://twitter.com/share" class="twitter-share-button" data-url="www.dosomething.org/status" 

data-text="I updated my status. Want to know yours? Go to http://dosomething.org/status #updateyourstatus @DoSomething.org" data-count="vertical">Tweet</a>

<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>

</div>

<div class="clear-both"></div>

        <?php print $highlight; ?>

        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>

        <?php print $help; ?>

        <?php print $content_top; ?>

        <div id="content-area" class="content">

    <div id="hiv-wrapper">
	 
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
