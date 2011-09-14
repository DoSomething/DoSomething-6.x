<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php
    if ($_SERVER['HTTP_USER_AGENT'] == 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)') :
  ?>
  <meta name="description" content="I just shed some of my e-waste at my local Best Buy. Start your own drive at www.dosomething.org/ewaste." />
  <meta property="og:url" content="http://dosomething.org/ewaste" />
  <meta property="og:image" content="http://www.dosomething.org/sites/all/micro/ew/facebook-01.jpg" />
  
  <?php endif; ?>
  <link href='http://fonts.googleapis.com/css?family=Maven+Pro:900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/<?=$ds_micro.'/ew/ewaste.css';?>" type="text/css" media="all" />
  <?php print $scripts; ?>
  <script type="text/javascript" src="/<?=$ds_micro.'/ew/ewaste.js';?>"></script>
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
     <img id="header-message" src="/<?=$ds_micro;?>/ew/dates-sponsor.png"/>
     <img id="header-text" src="/<?=$ds_micro;?>/ew/text-01.png" width="250" />
      <div id="ewaste-nav">
      <?php
        $base = '/ewaste';
        $items = array(array('HOME', $base),
                       array('TAKE ACTION', $base.'/tips'),
                       array('PRIZES', $base.'/prizes'),
                       array('GALLERY', $base.'/gallery'),
                       array('FAQs', $base.'/faqs')
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
      <div id="content" class="column"><div class="section">

        <?php print $highlight; ?>

        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>

        <?php print $help; ?>

        <?php print $content_top; ?>

        <div id="content-area">

    <div id="ewaste">


     <a href="/ewaste"><img id="ewaste-logo" src="/<?=$ds_micro;?>/ew/logo.png" /></a>
      <?php print $messages; ?>
    
    <div class="clearfix">
    
    <?php if ($right) print $right; ?>
    
    <div id="intro" class="clearfix rounded shadow">
    <div style="float: right;" id="social-buttons">
        <a href="http://www.facebook.com/sharer.php?u=http://www.dosomething.org/ewaste" target="_blank"><img src="/sites/all/micro/sfs/icon-fb.png" alt="FB Share" style="position: relative; top -5px; height: 30px;" /></a>
        <a href="http://twitter.com/share?url=&text=I+make+recycling+e-waste+look+good!+Join+@BestBuy,+@ENERGYSTAR+%26+@DoSomething+and+start+your+own+drive:+www.dosomething.org/ewaste" target="_blank"><img src="/sites/all/micro/sfs/icon-twitter.png" alt="Twitter share" style="position: relative; top -5px; height: 30px;" /></a>
    </div>

    <h2 class="title"><?php print $title; ?></h2>
    <?php print $content; ?>
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

    <div style="display: none;" id="drive-steps-popup">
        <h2>YOUR STEP-BY-STEP E-WASTE DRIVE GUIDE</h2>
        <ol>
        <li><strong>Sign up for the campaign.</strong> Make sure to check out the contest descriptions and <a href="/files/ewaste_OfficialRules.pdf" target="_blank">Official Rules</a> first!</li>
        <li><strong>Download the <a href="/files/e-Waste Verification Form.pdf" target="_blank">Verification Form</a>.</strong> If you're between the ages of 13-18, get your parent's signature (we know this is an unusual extra step, but hey you could get prizes if you rock out and win!). If you're submitting pictures that feature other members of your team, please send in a verification form for them as well.</li>
        <li><strong>Run your e-waste drive.</strong> Don't know where to start? Check out our <a href="/ewaste/tips">top 11 tips</a> for running an e-waste drive.</li>
        <li><strong>Call your local <a href="http://www.bestbuy.com/site/olspage.jsp?id=cat12090&type=page" target="_blank">Best Buy</a>.</strong> Ask for the Product Process Manager to coordinate a drop-off.</li>
        <li><strong>Drop off your collected e-waste at your local Best Buy store and get the Best Buy employee to sign your Verification Form.</strong> That's the handy form your filled out in Step 2.</li>
        <li><strong>Report Back.</strong> Want in on those sweet prizes? Make sure you report back and answer the following questions:
            <ol>
                <li>What awesome things did you do to plan and promote your drive that made it super successful?</li>
                <li>What impact did your drive have on your community?</li>
                <li>What did you learn from your drive and why is recycling electronics so important to you?</li>
            </ol></li>
        <li><strong>Submit completed Verification Forms by mail.</strong> Don't forget to do this for yourself and anyone featured in pictures under the age of 18. It must be postmarked by October 3rd and received by October 7th.
        <p>
        Do Something e-waste Contest<br />
        ATTN: e-waste Verification Forms<br />
        24-32 Union Square East, 4th Floor<br />
        New York, NY 10003<br />
        Fax: (212) 254-2391
        </p></li>
        <li><strong>Don't forget to take the <a href="#" onclick="return pledge();">E-Waste ENERGY STAR Pledge</a> and inspire others to take the pledge.</strong> By taking the pledge, you'll be making an important commitment to recycle e-waste as well as look for energy-efficient, ENERGY STAR qualified electronics when seeking replacements.</li>
        </ol>
        <p><a href="/files/ewaste_OfficialRules.pdf" target="_blank">Official Rules</a>
        <div style="text-align: right;"><a href="/forward?path=ewaste/print/steps" target="_blank">Email this</a> | <a href="/ewaste/print/steps" target="_blank">Print</a></div>
    </div>
    <div style="display: none;" id="what-is-ewaste-popup">
        <h2>WHAT IS E-WASTE? (cont.)</h2>
        <p>We know you have a lot of e-waste, but for this particular drive in partnership with Best Buy and ENERGY STAR only the following items will be accepted (sorry, no exceptions!):</p>
        <ul>
        <li>Notebooks/laptop computers, computer parts, and printers (no laptop batteries, sorry!)</li>
        <li>DVD players (including BluRay and Portable DVD models) and VCRs</li>
        <li>Old gaming console hardware (Playstation, Xbox, etc.) and portable devices (PSP, Nintendo DS, etc.) and their controllers and keyboard counterparts. Also, if you have any PC games lying around, bring those in too!</li>
        <li>Cameras of digital nature, lenses for any of you SLR gurus, camcorders, digital photo frames, and memory cards.</li>
        <li>iPods and other MP3 players</li>
        <li>Old music and movies of the CD, DVD and BluRay variety</li>
        <li>Cell phones and their charging equipment as well as wireless broadband and hands-free sets</li>
        <li>Home audio equipment-this includes receivers, CD players/recorders, home audio networking, HTiB, speakers, boomboxes, CD/Cassette players, alarm clocks, personal recorders, and for you DJs out there turntables, amps and effects, and audio mixers</li>
        <li>Car audio equipment like your GPS, decks, speakers, amps, CB radios, scanners, security systems, radar detectors, and wiring harnesses and install kits</li>
        <li>All chargers, cables, wires, and cords (this includes TV Antennas, remotes, surge protectors, headphones and power inverters)</li>
        </ul>
        <p>We'd love to accept all of your e-waste, but sadly we can't accept any of the below for this drive (but this doesn't mean you shouldn't recycle these products in the future!):</p>
        <ul>
        <li>Computer monitors and CPUs</li>
        <li>Televisions</li>
        <li>Batteries</li>
        <li>Appliances like refrigerators, dishwashers, clothes washers, etc.</li>
        </ul>
        <div style="text-align: right;"><a href="/forward?path=ewaste/print/ewaste" target="_blank">Email this</a> | <a href="/ewaste/print/ewaste" target="_blank">Print</a></div>
    </div>
</body>
</html>
