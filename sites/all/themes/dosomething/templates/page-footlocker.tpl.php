<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>

  <?php
    if ($_SERVER['HTTP_USER_AGENT'] == 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)') :
  ?>
  <meta property="og:title" content="Foot Locker Scholar Athletes Program | Do Something"/>
  <meta property="fb:admins" content="508145411,603061,630191494" />
  <meta property="fb:app_id" content="93836527897" />
  <meta property="og:type" content="non_profit"/>
  <meta property="og:url" content="http://www.dosomething.org/footlocker" />
  <meta property="og:site_name" content="DoSomething.org"/>
  <meta property="og:description" content="Are you an athlete who has flexed your heart in your community? Win a $20,000 scholarship by applying to the Foot Locker Scholar Athletes scholarship program."/>
  <meta property="og:image" content="http://www.dosomething.org/sites/all/micro/footlocker/footlocker-logo.png" />
  
  <?php endif; ?>
  
  <link rel="stylesheet" href="/<?=$ds_micro.'/footlocker/footlocker-new.css';?>" type="text/css" media="all" />
  <?php print $scripts; ?>
  <script type="text/javascript" src="/sites/all/micro/footlocker/footlocker.js"></script>
</head>

<?
  $current_path = preg_replace('/^\//', '', drupal_get_path_alias(request_uri()));
  $twitter_text = "Win a $20,000 scholarship by applying to the Foot Locker Scholar Athletes program! http://www.dosomething.org/footlocker";
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
     <div class="header-message">
		<a href="http://www.DoSomething.org/footlocker" id="main-logo"><img src="/<?=$ds_micro;?>/footlocker/footlocker-logo.png" alt="Footlocker Scholar Athletes"/></a>
		<a href="http://www.fastweb.com" id="sponsor-logo"><img src="/<?=$ds_micro;?>/footlocker/fastweb-logo.png" alt="Powered with Fastweb: paying for school just got easier."/></a></div>
    <?php if ($right) print $right; ?>
    </div>
	
      <div id="content" class="column">
	  <div id="content-area">
      <img src="/sites/all/micro/footlocker/top-corner.png" class="corner-triangle" />
	  <div id="menu">
      <?php
        $base = '/footlocker';
        $items = array(array('HOME', $base),
                       array('APPLY', $base.'/application'),
                       array('ABOUT', $base.'/about'),
                       array('JUDGES', $base.'/judges'),
                       array('COLLEGE TIPS', $base.'/tips'),
					   array ('FAQs', $base.'/faqs')
                      );
        $pos=0;
        foreach ($items as $i) {
          $class = ' ';
          $currPath = drupal_get_path_alias(request_uri());
          if (strncmp($i[1], $currPath, strlen($i[1])) == 0 && $i[1] != $base)
            $class = 'active';
          else if ($i[1] == $base && $i[1] == $currPath)
            $class = 'active';
          printf('<a href="%s" class="%s" id="%s">%s</a>', $i[1], $class, 'menu-item-'.$pos, $i[0]);
          $pos++;
        }
       ?>
       <div style="clear:both"></div>
      </div><div class="section">
      <img src="/sites/all/micro/footlocker/top-corner.png" class="corner-triangle" />
      <div class="share">
		<a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.dosomething.org%2Ffootlocker"><img class="facebook" src="/<?=$ds_micro;?>/icon-fb.png" alt="Share this page on Facebook"/></a>
		<a target="_blank" href="http://twitter.com/intent/tweet?text=<?=urlencode($twitter_text).'&url=';?>"><img class="twitter" src="/<?=$ds_micro;?>/icon-twitter.png" alt="Share this page on Twitter"/></a>
    </div>
    
    
      <div style="clear:both"></div>
      <?php print $messages; ?>
        <?php print $highlight; ?>


        <?php print $help; ?>

        <?php print $content_top; ?>



    
    
    
    <?php print $content; ?>
    <?php print $content_bottom; ?>
    <div style="clear:both;"></div>
    </div></div>

        
<div class="clearfix"></div>
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


    <!--</div>  <!-- /#main, /#main-wrapper -->

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
