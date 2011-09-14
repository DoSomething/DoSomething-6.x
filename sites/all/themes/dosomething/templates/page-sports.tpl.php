<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php
    if ($_SERVER['HTTP_USER_AGENT'] == 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)') :
        if ($node->type == 'campaign_sports_2011') :
  ?>
  	<meta name="description" content="Check out our Sports Equipment Drive and text SPORTSVOTE to 38383 and use our project code <?php echo $node->nid; ?> when asked to help us win a prize for having an awesome drive!" />
  	<?php else: ?>
  	<meta name="description" content="I'm participating in DoSomething.org's Sports Equipment Drive, collecting new and used sports equipment for athletes in need! http://www.giveyourgear.org" />
  	<?php endif; ?>
  <meta property="og:image" content="http://www.dosomething.org/sites/all/micro/sports/fb-share.png" />
  <?php endif; ?>
  <link rel="stylesheet" href="/<?=$ds_micro.'/sports/sports.css';?>" type="text/css" media="all" />
  <?php print $scripts; ?>
  <script type="text/javascript" src="/<?=$ds_micro.'/sports/sports.js';?>"></script>
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
    <div id="give-us-your-gear" class="college"><span class="orange">give us your gear!</span><br />september 6 to october 10</div>
      <div id="content" class="column"><div class="section">

        <?php print $highlight; ?>

        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>

        <?php print $help; ?>

        <?php print $content_top; ?>

        <div id="content-area">

    <div id="sports">


     <a href="/sports"><img id="sports-logo" src="/<?=$ds_micro;?>/sports/logo.png" /></a>
     <div style="position: absolute; top: 125px; left: 10px;">
         <a href="http://www.facebook.com/sharer.php?u=http://www.dosomething.org/sports" onclick="return popup(this)" target="_blank"><img src="/sites/all/micro/icon-fb.png" alt"FB Share" width="24" /></a>
         <a href="http://www.twitter.com/share?url=&text=I'm+participating+in+DoSomething.org's+Sports+Equipment+Drive+collecting+new+and+used+sports+equipment+for+athletes+in+need!+dsorg.us/rgRUc9" target="_blank" onclick="return popup(this);"><img src="/sites/all/micro/icon-twitter.png" alt="Tweet" width="24" /></a>
     </div>
     <div id="sports-nav">
      <img src="/sites/all/micro/sports/arrow-top.png" id="arrow-top" />
      <img src="/sites/all/micro/sports/arrow-bottom.png" id="arrow-bottom" />
      <?php
        $base = '/sports';
        $items = array(array('join the team', $base),
                       array('get in the game', $base.'/run-a-drive'),
                       array('winner\'s circle', $base.'/prizes'),
                       array('player profiles', $base.'/gallery'),
                       array('faq', $base.'/faqs')
                      );
        foreach ($items as $i) {
          $class = '';
          $currPath = drupal_get_path_alias(request_uri());
          if (strncmp($i[1], $currPath, strlen($i[1])) == 0 && $i[1] != $base)
            $class = 'active';
          else if ($i[1] == $base && $i[1] == $currPath)
            $class = 'active';
          printf('<a href="%s" class="%s">%s</a>', $i[1], $class, $i[0]);
        }
       ?>
      </div>
      <?php print $messages; ?>
    
    <div class="clearfix">
    
    <?php if ($right) print $right; ?>
    
    <div id="intro" class="clearfix rounded shadow">
    <h2 class="title"><?php print $title; ?></h2>
    <?php print $content; ?>
    </div>
    
    <?php print $content_bottom; ?>
    
    </div>
    
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
