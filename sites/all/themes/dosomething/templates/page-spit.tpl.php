<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php
    if ($_SERVER['HTTP_USER_AGENT'] == 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)') :
  ?>
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
  <link rel="stylesheet" href="/<?=$ds_micro.'/spit/spiton.css';?>" type="text/css" media="all" />
  <?php print $scripts; ?>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript" src="/<?=$ds_micro.'/spit/spit.js';?>"></script>
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
	<a href="http://www.DoSomething.org/spit" id="header-message"><img  src="/<?=$ds_micro;?>/spit/spit-logo.png"/></a>
	<div id="main" class="clearfix<?php if ($primary_links || $navigation) { print ' with-navigation'; } ?>">
     
      <div id="menu">
      <?php
        $base = '/spit';
		$title = 'Coming soon! October 2011';
        $items = array(array('HOME', $base,),
                       array('SCHOOLS', $base.'/schools'),
                       array('TIPS&TOOLS', $base.'/tips'),
                       array('REPORT BACK', $base.'/reportback'),
                       array('FAQ', $base.'/faq')
                      );

        foreach ($items as $i) {
          $class = 'inactive';
          $currPath = drupal_get_path_alias(request_uri());
          if (strncmp($i[1], $currPath, strlen($i[1])) == 0 && $i[1] != $base)
            $class = 'active';
          else if ($i[1] == $base && $i[1] == $currPath)
            $class = 'active';
			//if($i[0]=='HOME' || $i[0]=='TIPS&TOOLS') 
			if($i[0]=='HOME' || $i[0]=='TIPS&TOOLS' || $i[0]=='FAQ' ) 
          printf('<a href="%s" class="%s">%s</a>', $i[1], $class, $i[0]);
		  else
		  printf('<a href="#" class="%s" title="Coming soon! October 2011">%s</a>', $class, $i[0]);
        }
       ?>
	 
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
    
    <!--<div id="intro" class="clearfix rounded shadow">-->
    <!--<div id="socialmedia" style="float: right;">
        <a href="http://www.facebook.com/sharer.php?u=http://www.dosomething.org/steputobullying" target="_blank"><img src="/sites/all/micro/sfs/icon-fb.png" alt="FB Share" style="position: relative; top -5px; height: 30px;" /></a>
        <a href="http://twitter.com/share?url=&text=I+just+steppedup+w/+@DoSomething's+anti-bullying+campaign,+will+you+be+next?+http://stepuptobullying.org" target="_blank"><img src="/sites/all/micro/sfs/icon-twitter.png" alt="Twitter share" style="position: relative; top -5px; height: 30px;" /></a>
    </div>-->

    <h2 class="title"><?php print $title; ?></h2>
    <?php print $content; ?>
    <!--</div>-->
    <div id="sponsorlogos" style="float: right;">
        <a href="http://www.dkmsamericas.org/" target="_blank"><img src="/sites/all/micro/spit/dkms-logo.png" alt="DKMS logo" /></a>
        <a href="http://www.marrow.org" target="_blank"><img src="/sites/all/micro/spit/btm-logo.png" alt="Be The Match logo" /></a>
    </div>
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
