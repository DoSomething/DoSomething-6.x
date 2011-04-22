<?php

/**
 * Implementation of hook_default_page_manager_pages().
 */
function ds_programs_default_page_manager_pages() {
  $page = new stdClass;
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'Our_Programs';
  $page->task = 'page';
  $page->admin_title = 'Our_Programs';
  $page->admin_description = '';
  $page->path = 'programs-panel';
  $page->access = array();
  $page->menu = array(
    'type' => 'none',
    'title' => '',
    'weight' => 0,
    'name' => 'navigation',
    'parent' => array(
      'type' => 'none',
      'title' => '',
      'weight' => 0,
      'name' => 'navigation',
    ),
  );
  $page->arguments = array();
  $page->conf = array();
  $page->default_handlers = array();
  $handler = new stdClass;
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_Our_Programs_panel_context';
  $handler->task = 'page';
  $handler->subtask = 'Our_Programs';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => '0',
    'pipeline' => 'standard',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
  );
  $display = new panels_display;
  $display->layout = 'twocol_stacked';
  $display->layout_settings = '';
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'top' => NULL,
      'left' => NULL,
      'right' => NULL,
      'bottom' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = 'Our Programs';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass;
    $pane->pid = 'new-1';
    $pane->panel = 'bottom';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = FALSE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => '',
      'title' => '',
      'body' => '<h2>Campaigns</h2>

<div style="clear:both;"></div>

<a href="http://www.dosomething.org/teensforjeans/home">
<img src="http://www.dosomething.org/files/T4J_Logo_website_thumbnail_1.png" class="goleft" /></a>
<p style="margin-bottom:2em;padding-left:135px;"><a href="http://www.dosomething.org/teensforjeans/home">Teens For Jeans</a></b>  1 in 3 Homeless people in the US are under the age of 18- and they need jeans to keep them warm just like the rest of us.  Take action on youth homelessness and start your drive today.  Donate jeans at any Aero store between January 17th and February 13th- you and your school could win some pretty sweet prizes.  To learn more, sign up & get info on how you can start <b>your</b> drive, check out <a href="http://www.dosomething.org/teensforjeans/home">www.TeensForJeans.com</a></p>

<div style="clear:both;"></div>

<p style="margin-bottom:2em;"><a href="http://www.dosomething.org/tackle-hunger">
<img src="http://www.dosomething.org/files/tacklehungertrans.png" class="goleft" alt="Tackle Hunger">Tackle Hunger</a> Be a part of collecting 1 Million lbs of food! Start a food drive in your community or school. Submit your results and you could win a pizza party sponsored by DoSomething.org and $1,000 donation to the food bank in your community..</p>

<div style="clear:both;"></div>

<a href="http://www.dosomething.org/emission">
<img src="http://www.dosomething.org/files/emission.png" class="goleft" /></a>

<p style="margin-bottom:2em;padding-left:135px;"><a href="http://www.dosomething.org/emission">Play eMission today!</a></b>  eMission is our brand-new Facebook game that we launched with support from the EPA\'s ENERGY STAR program.   You can advance in the game by taking offline action around energy efficiency. Our goal is to get 100,000 people playing and saving our planet, so spread the word today.  For more information, check out DoSomething.org/Games/eMission </p>


<h3 style="padding-top: 1em; clear:left;">Upcoming Campaigns</h3>

<ul class="logolist">
<li>February: <a href="/GreenYourSchool">Green Your School</a></li>
<li>March: <a href="/bands">Battle for the Bands</a></li>


</ul>

<h3 style="padding-top: 1em; clear:left;">Past Campaigns</h3>
<ul class="logolist">
<li><a href="/dosomething101">Do Something 101</a></li>
<li><a href="/dating-abuse/home">Teen Dating Abuse</a></li>
<li><a href="challenge">The Do Something Now! Challenge</a></li>
<li><a href="troops">Support Our Troops</a></li>
</ul>
',
      'format' => '4',
      'substitute' => TRUE,
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $display->content['new-1'] = $pane;
    $display->panels['bottom'][0] = 'new-1';
    $pane = new stdClass;
    $pane->pid = 'new-2';
    $pane->panel = 'right';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = FALSE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => '',
      'title' => '',
      'body' => '<h2><a href="/clubs">Clubs</a></h2>
<a href="/clubs"><img src="http://www.dosomething.org/files/Do_Something_Youth_03.JPG" hspace="5px" width="75px" border="0" align="left" class="alignleft"></a>
<p><strong>Start a <a href= "/clubs/resources/what-you-get">Do Something Club</a></strong> and take action with your friends!</p>
<p>Just get 4 friends and <a href = "http://www.dosomething.org/clubs/resources/what-you-get">apply today</a>. We\'ll send you resources and opportunities, and even fund your projects.</p>
<p><strong>What do Clubs get?</strong><br>
<ul class="logolist">
<li><a href="/clubs/resources/what-you-get">Clubs Starter Kit</a></li>
<li>Eligibility for <a href="/clubs/resources/what-you-get">Club Grants</a></li>
<li>Your own profile page, calendar and group messaging ability</li>
<li>Exclusive grant, press, and volunteer opportunities</li>
<li>Advanced noticed about our programs</li>
<li>The constant support of DS staff</li>
</ul></p>',
      'format' => '4',
      'substitute' => TRUE,
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $display->content['new-2'] = $pane;
    $display->panels['right'][0] = 'new-2';
    $pane = new stdClass;
    $pane->pid = 'new-3';
    $pane->panel = 'top';
    $pane->type = 'views_panes';
    $pane->subtype = 'programs_slider-panel_pane_1';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $display->content['new-3'] = $pane;
    $display->panels['top'][0] = 'new-3';
    $pane = new stdClass;
    $pane->pid = 'new-4';
    $pane->panel = 'top';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => '',
      'title' => '',
      'body' => '<div style="width: 100%;">

<div class="block blue" style="float: left; width: 45%; height:100%;">
<h2> Grants </h2>
<a href="/grants"><img src="http://www.dosomething.org/files/cash.jpg"  align="left" class="alignleft"></a>
<b>We\'re giving away money!</b> Do you want to make change, but lack the funds? We have tons of grants just for you, <a href="/grants">so check them out</a>.
<br><br>

<a href="/grants/seedgrants"><b>Do Something Seed Grants</b></a>
<br><b>Amount:</b>$500 every week 
<br> <b>Deadline:</b> None! Apply Now!
<br>
<br>
<br>
<br>


</div>

<div  class="block blue" style="float:right; width: 45%; height:100%;"> 
<a href="/clubs"><h2>Clubs</h2></a>	
<a href="/clubs"><img src="http://www.dosomething.org/files/Do_Something_Youth_03.JPG" hspace="5px" width="75px" border="0" align="left" class="alignleft"></a>
<p><strong>Start a <a href= "/clubs/resources/what-you-get">Do Something Club</a></strong> and take action with your friends!</br> </p>
<p>Just get 4 friends and <a href = "http://www.dosomething.org/clubs/resources/what-you-get">apply today</a>. We\'ll send you resources and opportunities, and even fund your projects. </br></p>
<p><strong>What do Clubs get?</strong>
<br><ul class="logolist">
<li><a href="/clubs/resources/what-you-get">Clubs Starter Kit</a></li>
<li>Eligibility for <a href="/clubs/resources/what-you-get">Club Grants</a></li>
<li>Your own profile page, calendar and group messaging ability</li>
<li>Exclusive grant, press, and volunteer opportunities</li>
<li>Advanced noticed about our programs</li>
<li>The constant support of DS staff</li>
</ul></p>
</div>
</div>


<div class="block blue" style="clear:both; width: 100%; margin-top: -5px;"> 
<h2>Do Something U</h2>
<div style="clear:both;"></div>
<a href="/u"><img src="http://www.dosomething.org/files/dsu-u.png" class="goleft"/ style="margin-top:-15px;">
<p style="margin-bottom:2em;padding-left:135px;"><a href="/u">DoSomething University</a></b> is a free, easy way for you to make a difference in the world. Our videos and written guides teach you how to start, grow, and maintain your project or organization. Hear from experts as they guide you through what you need to know about reaching your goals.<br><br><br></p>
</div>


<div class="block blue" style="clear:both; width: 100%; margin-top: -5px;"> 
<h2>Campaigns</h2>
<div style="clear:both;"></div>
<a href="http://www.epicbookdrive.com"><img src="http://www.dosomething.org/nd/ebd/epic-logo.png" class="goleft" />
<p style="margin-bottom:2em;padding-left:135px;"><a href="http://www.epicbookdrive.com">Epic Book Drive</a></b>. In low-income neighborhoods of New Orleans there\'s 1 book for every 300 kids. DoSomething.org and Better World Books have teamed to help you change that, and it\'s gonna be Epic. Join the Epic Book Drive to re-stock the libraries of the Recovery School District in New Orleans. Register your drive at EpicBookDrive.com and shipping\'s on us. Visit <a href="http://www.epicbookdrive.com">www.epicbookdrive.com</a> or Text EPIC to 30644 to learn more and get started.</p>


<div style="clear:both;"></div>
<a href="http://www.dosomething.org/greenyourschool"><img src="http://www.dosomething.org/files/gysc-logo_07_final_146x67.png" class="goleft" width="115px"/>
<p style="margin-bottom:2em;padding-left:135px;"><a href="http://www.dosomething.org/greenyourschool">Green Your School Challenge</a></b>. HP and DoSomething.org believe you have what it takes to Green Your School. Prove us right! Join the Green Your School Challenge. Text GREEN to 30644 to get started. Schools with the most people involved, best innovation and use of technology, and biggest impact on their school will win great prizes including up to $5000 in grant funding and up to 5 HP Pavilion DM1 laptops! To learn more, sign up & post projects visit <a href="http://www.dosomething.org/greenyourschool">www.DoSomething.org/ GreenYourSchool</a>.</p>

<div style="clear:both;"></div>

<a href="http://www.dosomething.org/battle"><img src="http://www.dosomething.org/files/bftb-logo_01_146x160_0.png" class="goleft" width="115px"/></a>

<p style="margin-bottom:2em;padding-left:135px;"><a href="http://www.dosomething.org/battle">Battle for the Bands</a>. Do Something to Save the Music. We\'ve teamed up with the VH1 Save The Music Foundation so you can advocate for music education. Join the Battle for the Bands campaign. You can get involved by: </p>

<p style="margin-bottom:2em;padding-left:135px;">
<span class="blue">1. Creating a music video of your group performing with a message about music education</span><br>
<span class="blue">2. Running a music education advocacy project in your community
</span></p>
<p style="margin-bottom:2em;padding-left:135px;">The top videos and projects will win great prizes like up to $5000 for your school music program, concert tickets, and more. Visit <a href="http://www.dosomething.org/battle">www.DoSomething.org/battle</a> to get started.</p>

<div style="clear:both;"></div>

<div style="clear:both;"></div>

<a href="http://www.dosomething.org/emission">
<img src="http://www.dosomething.org/files/emission.png" class="goleft" /></a>

<p style="margin-bottom:2em;padding-left:135px;"><a href="http://www.dosomething.org/emission">Play eMission today!</a></b>  eMission is our brand-new Facebook game that we launched with support from the EPA\'s ENERGY STAR program.   You can advance in the game by taking offline action around energy efficiency. Our goal is to get 100,000 people playing and saving our planet, so spread the word today.  For more information, check out <a href="http://www.DoSomething.org/Games/eMission">DoSomething.org/ Games/eMission</a>.</p>


<h3 style="padding-top: 1em; clear:left;">More Campaigns</h3>
<p>For more information on past and upcoming campaigns, including the ones below, check out our <a href="/campaigns">campaigns page</a>!
<ul class="logolist">
<li><a href="/teensforjeans">Teens For Jeans</a></li>
<li><a href="/dosomething101">Do Something 101</a></li>
<li><a href="/dating-abuse/home">Teen Dating Abuse</a></li>
<li><a href="challenge">The Do Something Now! Challenge</a></li>
<li><a href="troops">Support Our Troops</a></li>
<li> <a href="/tackle-hunger">Tackle Hunger</a></li>
</ul>

</div>
<script type="text/javascript" src="http://dnn506yrbagrg.cloudfront.net/pages/scripts/0010/5544.js"> </script>',
      'format' => '4',
      'substitute' => TRUE,
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $display->content['new-4'] = $pane;
    $display->panels['top'][1] = 'new-4';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['Our_Programs'] = $page;

 return $pages;

}
