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
    $pane->shown = TRUE;
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
    $pane->panel = 'left';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => '',
      'title' => '',
      'body' => '<h2>Grants</h2>

<p><a href="/grants"><img src="http://www.dosomething.org/files/cash.jpg"  align="left" class="alignleft"></a>
<b>We\'re giving away money!</b> Do you want to make change, but lack the funds? We have tons of grants just for you, <a href="/grants">so check them out</a>.</p>

<p><a href="/grants/seedgrants"><b>Do Something Seed Grants</b></a>
<br><b>Amount:</b>$500 every week 
<br> <b>Deadline:</b> None! Apply Now!</p>

<p><a href="/pbteen"><b>Be Amazing Grants</b></a><br>
<b>Amount:</b> 4 $2,000 grants sponsored by PBteen
<br><b>Deadline:</b> February 2nd</p>',
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
    $display->panels['left'][0] = 'new-2';
    $pane = new stdClass;
    $pane->pid = 'new-3';
    $pane->panel = 'right';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
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
    $display->content['new-3'] = $pane;
    $display->panels['right'][0] = 'new-3';
    $pane = new stdClass;
    $pane->pid = 'new-4';
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
    $display->content['new-4'] = $pane;
    $display->panels['top'][0] = 'new-4';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['Our_Programs'] = $page;

 return $pages;

}
