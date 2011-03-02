<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">

<head>
  <title><?=$node->title?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta property="og:image" content="http://www.dosomething.org/nd/dsu/u.jpg" />
  <link type="text/css" rel="stylesheet" href="/nd/dsu/dsu.css" />
  <link type="text/css" rel="stylesheet" href="/nd/dsu/superfish-1.4.8/css/superfish.css" />
  <link type="text/css" rel="stylesheet" href="/sites/all/modules/fivestar/css/fivestar.css" />
  <link type="text/css" rel="stylesheet" href="/sites/all/modules/hierarchical_select/hierarchical_select.css" />
  <link type="text/css" rel="stylesheet" href="/sites/all/themes/zen/drupal5-reference.css" />

  <!-- manually added in place of $scripts -->
  <?php print $scripts; ?>
  <script type="text/javascript" src="/nd/dsu/jquery.cycle.lite.1.0.js"></script>
  <script type="text/javascript" src="/nd/dsu/superfish-1.4.8/js/hoverIntent.js"></script>
  <script type="text/javascript" src="/nd/dsu/superfish-1.4.8/js/superfish.js"></script>
  <script type="text/javascript" src="/nd/dsu/cufon-yui.js"></script>
  <script type="text/javascript" src="/nd/dsu/Univers-black.font.js"></script>
  <script type="text/javascript">
    Cufon.replace('#top-nav a.header');
    Cufon.replace('#scroller h2');
    Cufon.replace('.dsu_guides h2');
    Cufon.replace('.dsu_askprof h2');
    Cufon.replace('.page h2');
    Cufon.replace('.dsu_gudies h3');
    Cufon.replace('.page h3');
    Cufon.replace('#footer h2');
    Cufon.replace('#sidebar h2');
    Cufon.replace('#content ol.big-numbers');
    Cufon.replace('.views-field-title span.field-content');
  </script>

</head>

<body>

<?php
  global $user;
?>

<div id="wrapper">
  <div id="top">
    <?php
      $edit_link = '';
      if (user_access('administer nodes')) {
        if (strpos($_GET['q'], 'u/majors') === 0) {
          $edit_link = ' [<a href="/admin/build/views/dsu_majors/edit">edit</a>]';
        } else {
          $edit_link = ' [<a href="/node/'.$node->nid.'/edit">edit</a>]';
        }
      }
    ?>
    <span class="where"><a href='/u'>DoSomething.org/U</a><?=$edit_link?></span>
    <?php if ($user->uid) : ?>
      <span class="sign-up">Logged in as: <?= $user->name; ?> | <a href="/logout?destination=u">Log out</a></span>
    <?php else: ?>
      <span class="sign-up"><a href="/u/login">Log In</a> | <a href="/u/register">Enroll</a></span>
    <?php endif; ?>
    <div style="clear: both;"></div>
  </div> <!-- top -->
  <div id="header">
    <a href="/"><img alt="image" src="/nd/dsu/ds_logo.png" /></a>
    <a class="header-ds" href="/u">Do Something</a>
    <a class="header-u" href="/u">U</a>
    <ul id="top-nav" class="sf-menu">
      <li>
        <a id="majors" class="header" href="#">Majors</a>
        <ul>
          <?php $results = db_query("SELECT name FROM term_data WHERE vid = 18 ORDER BY name");
          while($result = db_fetch_object($results)) : ?>
            <li><a href="/u/majors/<?=str_replace(' ', '+', $result->name)?>"><?=$result->name?></a></li>
          <?php endwhile; ?>
        </ul>
      </li>
      <li>
        <a id="browse" class="header" href="#">Browse</a>
        <ul>
          <li><a href="/u/video">Video Content</a></li>
          <li><a href="/u/written">Written Content</a></li>
        </ul>
      </li>
    </ul>
    <form action="#">
      <div id="search-box" class="search">
        <input type="text" value="search" />
      </div>
    </form>
  </div> <!-- header -->
  <?php if ($messages) : ?>
    <div id="messages">
      <?=$messages?>
    </div>
  <?php endif; ?>
  <div id="middle">
    <div id="main">
      <?php if(arg(1) == 613569) : ?>
      <div id="scroller">
        <div id="scroller-content">
          <div class="scroller-main first">
            <a href="u/video/video-how-to-pitch-potential-investor"><img alt="image" src="/nd/dsu/charles_large.jpg" /></a>
            <div class="scroller-box"></div>
            <div class="scroller-text">
              <h2>"How to Pitch a Potential Investor"</h2>
              <h3>Charles Best, Founder and CEO, &ldquo;DonorsChoose&rdquo;</h3>
            </div>
          </div>
          <div class="scroller-main">
            <a href="u/video/video-how-to-save-your-organization-crisis"><img alt="image" src="/nd/dsu/ami_large.jpg" /></a>
            <div class="scroller-box"></div>
            <div class="scroller-text">
              <h2>"How to Save Your Organization in a Crisis"</h2>
              <h3>Ami Dar, Executive Director, &ldquo;Idealist&rdquo;</h3>
            </div>
          </div>
          <div class="scroller-main">
            <a href="u/video/how-to-get-people-to-vote-online"><img alt="image" src="/nd/dsu/chad_large.jpg" /></a>
            <div class="scroller-box"></div>
            <div class="scroller-text">
              <h2>"How to Get People to Vote Online"</h2>
              <h3>Chad Bullock, Founder & Director, &ldquo;helloCHANGE&rdquo;</h3>
            </div>
          </div>
          <div class="scroller-main">
            <a href="/u/video/video-how-to-use-social-media-good"><img alt="image" src="/nd/dsu/monique_large.jpg" /></a>
            <div class="scroller-box"></div>
            <div class="scroller-text">
              <h2>"How to Use Social Media for Good"</h2>
              <h3>Monique Coleman, Host and Executive Producer, &ldquo;GimmeMo&rdquo;</h3>
            </div>
          </div>
        </div> <!-- scroller content -->

        <!-- <img alt="image" id="play" src="/nd/dsu/play_button.png" /> -->
        <div id="th1" class="thumb-holder">
          <img alt="image" class="thumbnail" src="/nd/dsu/charles_small.jpg" />
          <img alt="image" class="thumbframe" src="/nd/dsu/frame_small_selected.png" />
        </div>

        <div id="th2" class="thumb-holder">
          <img alt="image" class="thumbnail" src="/nd/dsu/ami_small.jpg" />
          <img alt="image" class="thumbframe" src="/nd/dsu/frame_small.png" />
        </div>

        <div id="th3" class="thumb-holder">
          <img alt="image" class="thumbnail" src="/nd/dsu/chad_small.jpg" />
          <img alt="image" class="thumbframe" src="/nd/dsu/frame_small.png" />
        </div>

        <div id="th4" class="thumb-holder">
          <img alt="image" class="thumbnail" src="/nd/dsu/monique_small.jpg" />
          <img alt="image" class="thumbframe" src="/nd/dsu/frame_small.png" />
        </div>

      </div> <!-- scroller -->
      <?php endif; ?>

      <div id="content">
        <?php if(!$node && arg(0) != 'user'){ print '<h2>' . $title . '</h2>'; }?>
        <?=$content?>
      </div>
    </div> <!-- main -->
    <div id="sidebar">
      <?php if (!$user->uid): ?>
        <h2 class="enroll">Enroll</h2>
        <p class="enroll-text">Already a DoSomething.org user? <a href="/u/login">Log in with your DoSomething.org account</a>.</p>
        <p class="enroll-text"><a href="/u/register">Sign up</a> for free downloads, access to professors and other exclusive content!</p>
      <?php else: ?>
        <?php if(user_access('special do something u')) : ?>
          <h2>Ask A Prof</h2>
          <?php
            $results = db_query("SELECT title, nid FROM node WHERE type = 'dsu_askprof' ORDER BY created DESC LIMIT 5");
            $list = array();
            while ($result = db_fetch_object($results)) {
              $list[] = l('"'.$result->title.'"', 'node/'.$result->nid);
            }
            print theme('zebra_list', $list);
          ?>
          <p class="ask-prof"><a href="/u/ask-a-prof">Ask <strong>your</strong> question</a> &raquo;</p>
          <p class="ask-prof"><a href="/u/questions">See other questions</a> &raquo;</p>
        <?php else: ?>
          <h2 class="enroll">Enroll</h2>
          <p class="enroll-text"><a href="/u/register/confirm">Enable Do Something U access on your account</a> for free downloads, access to professors and other exclusive content!</p>
        <?php endif; ?>
      <?php endif; ?>
      <div id="related-content">
        <?php 
          $terms = taxonomy_node_get_terms($node->nid);
          $tids = array();
          foreach ($terms as $term) {
            if ($term->vid == 18) {
              $tids[] = $term->tid;
            }
          }
          if (!empty($tids)) {
            $results = db_query("SELECT n.nid, n.title

              FROM node n
              INNER JOIN term_node tn ON tn.nid = n.nid

              WHERE n.type = 'dsu_guides'
              AND tn.tid IN (%s)
              AND n.nid != %d

              GROUP BY nid
              ORDER BY RAND()

              LIMIT 3", implode(', ', $tids), $node->nid);
            $projs = array();
            while ($result = db_fetch_object($results)) {
              $projs[] = l($result->title, 'node/'.$result->nid);
            }
            if (!empty($projs)) {
              print '<h2>Related Guides</h2>'.theme('zebra_list', $projs);
            }
          }
        ?>
      </div>
      <img id="chase" alt="Powered by Chase" src="/nd/dsu/chase.png" />
    </div> <!-- sidebar -->
    <div style="clear:both"></div>
  </div> <!-- middle -->
  <div id="footer">
    <div class="footer-list left">
      <h2>About</h2>
      <ul>
        <li><a href="/u/help">Help</a></li>
        <li><a href="/u/about/dosomethingu">About DoSomething U</a></li>
        <li><a href="/u/about/dosomething">About DoSomething.org</a></li>
        <li><a href="/u/about/grants">Grants</a></li>
        <li><a href="/u/about/privacy">Privacy</a></li>
        <li><a href="/u/about/bootcamp">Boot Camps</a></li>
      </ul>
    </div>
    <div class="footer-list middle">
      <h2>Majors</h2>
      <ul>
        <?php $results = db_query("SELECT name FROM term_data WHERE vid = 18 ORDER BY name");
          while($result = db_fetch_object($results)) : ?>
          <li><a href="/u/majors/<?=str_replace(' ', '+', $result->name)?>"><?=$result->name?></a></li>
        <?php endwhile; ?>
      </ul>
    </div>
    <div class="footer-list right">
      <h2>Content</h2>
      <ul>
        <li><a href="/u/video">Video Content</a></li>
        <li><a href="/u/written">Written Content</a></li>
      </ul>
    </div>
    <div style="clear:both;"></div>
  </div>
</div> <!-- wrapper -->

<!-- included manually instead of $closure -->
<?php //print $closure; ?>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">$(function() { $('ul.sf-menu').superfish(); });</script>
<script type="text/javascript">$(function() { $('#scroller-content').cycle(); });</script>
<script type="text/javascript" src="/nd/dsu/dsu.js"></script>
<script type="text/javascript" src="/sites/all/modules/google_analytics/googleanalytics.js"></script> 
<script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script> 
<script type="text/javascript">var pageTracker = _gat._getTracker("UA-493209-1");pageTracker._initData();pageTracker._setVar("Male");pageTracker._trackPageview();</script> 

</body>
</html>
