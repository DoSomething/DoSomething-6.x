<?php
/*
function movePage($num,$url){
    static $http = array (
        301 => "HTTP/1.1 301 Moved Permanently",
        302 => "HTTP/1.1 302 Found",
    );
    header($http[$num]);
    header ("Location: $url");
}

$is_mobile = false;

/* Detect if we should display for a mobile device */
/* Devices and corresponding strings to match against HTTP_USER_AGENT */
/*
$devices = array(
    "android" => "android",
    "blackberry" => "blackberry",
    "iphone" => "(iphone|ipod)",
    "opera" => "opera mini",
    "palm"  => "(avantgo|blazer|elaine|hiptop|palm|plucker|xiino)",
    "windows" => "windows ce; (iemobile|ppc|smartphone)",
    "generic" => "(kindle|mobile|mmp|midp|o2|pda|pocket|psp|symbian|smartphone|treo|up.browser|up.link|vodafone|wap)"
);
    
foreach($devices as $device => $regexp) {
    if(preg_match('/'.$regexp.'/i', $_SERVER['HTTP_USER_AGENT'])) {
        $is_mobile = true;
        break;
    }
}

/* If mobile device detected and 'view_standard' $_GET is not set, redirect to our mobile site */
/*
if( $is_mobile == true ) {
    if( $_GET['view_standard'] != 'true' ) {
//        movePage( 302, 'http://m.dosomething.org/teensforjeans/index.php' );
    }
}
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script type="text/javascript">
  document.createElement('viewport').setAttribute('content','width=device-width');
  if (window.location.search.toLowerCase().indexOf('nomobi=false') != -1) {
    document.cookie = 'dsnomobi=; expires=-1; path=/';
  }
  if (window.location.search.toLowerCase().indexOf('nomobi=true') != -1) {
    var date = new Date();
    date.setTime(date.getTime()+(86400000));
    var expires = "; expires="+date.toGMTString();
    document.cookie = 'dsnomobi=dsnomobi'+expires+"; path=/";
  }
  else if (screen.width <= 699 && document.cookie.indexOf('dsnomobi=dsnomobi') == -1) {
    document.location = "http://m.dosomething.org/teensforjeans";
  }
</script>
  <title><?php print $head_title; ?></title>
  <meta property="og:title" content="<?=$head_title;?>"/>
  <meta property="fb:admins" content="508145411,603061,630191494" />
  <meta property="fb:app_id" content="93836527897" />
  <meta property="og:type" content="non_profit"/>
  <meta property="og:url" content="http://www.dosomething.org/teensforjeans" />
  <meta property="og:image" content="http://www.dosomething.org/sites/all/micro/t4j-2012/tfj-logo.png" />
  <meta property="og:site_name" content="DoSomething.org"/>
  <meta property="og:description" content="1 in 3 homeless people in the U.S. is under the age of 18. I'm doing something about it, you should too!"/>

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
			  array('href' => $root.'/blog', 'title' => 'blog'),
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
<!--- Social Sharing Buttons - Begin -->
<hr style="border-top: 1px solid black; margin-bottom: 2px;" />
<div id="social-share" class="cf">
<!-- Facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="http://dosomething.org/teensforjeans" data-send="false" data-layout="box_count" data-width="50px" data-show-faces="false"></div>
<!-- Twitter -->
<a href="https://twitter.com/share" class="twitter-share-button" data-url="www.dosomething.org/teensforjeans" data-text="1 in 3 homeless people in the U.S. is under the age of 18. @dosomething about it! www.dosomething.org/teensforjeans #teensforjeans" data-count="vertical">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
<!-- Google+ -->
<g:plusone size="tall" href="http://www.dosomething.org/teensforjeans"></g:plusone>
          <script type="text/javascript">
            (function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js';
                          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                        })();
          </script>
<!-- Facebook Facepile -->
<iframe src="//www.facebook.com/plugins/facepile.php?href=www.dosomething.org%2Fteensforjeans&amp;size=small&amp;width=400&amp;max_rows=1&amp;colorscheme=light" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; float: right; height:59px;" allowTransparency="true"></iframe>
</div>
<hr style="border-top: 1px solid black; margin-top: 2px;" />
<!--- Social Sharing Buttons - End -->
        <div id="content-area" class="tfj-blog">
		<h2><?php print $title;?></h2>
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
