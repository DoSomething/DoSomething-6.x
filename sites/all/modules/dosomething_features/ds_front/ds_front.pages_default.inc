<?php

/**
 * Implementation of hook_default_page_manager_pages().
 */
function ds_front_default_page_manager_pages() {
  $page = new stdClass;
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'front';
  $page->task = 'page';
  $page->admin_title = 'Front Page';
  $page->admin_description = 'Front Page';
  $page->path = 'front';
  $page->access = array();
  $page->menu = array();
  $page->arguments = array();
  $page->conf = array();
  $page->default_handlers = array();
  $handler = new stdClass;
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_front_panel_context';
  $handler->task = 'page';
  $handler->subtask = 'front';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'css_id' => 'panel-front',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
  );
  $display = new panels_display;
  $display->layout = 'twocol_stacked';
  $display->layout_settings = array();
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
  $display->title = 'Volunteer';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass;
    $pane->pid = 'new-1';
    $pane->panel = 'left';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => '',
      'title' => '',
      'body' => '<div class="block col" style="clear:left;">
	                <h2 class="img"><a href="/whatsyourthing"><img src="/sites/all/themes/zen/dosomething/images/header_whatsyourthing.png" width="182" height="33" alt="What\'s Your Thing?"></a></h2>




<div class="story">

<h3>Green Your School Challenge</h3>

<a href="/greenyourschool"><img src="files/gysc-logo_07_final_146x67.png" alt="Green Your School" style="float: left; padding: 0 10px 10px 0;"></a>

<p>Join the <a href="/greenyourschool">Green Your School Challenge</a>. Launch eco-projects at school and win grants, scholarships and HP computers. <a href="/greenyourschool">Get started now</a>!</p>

</div>
<div class="hr"><hr></div>
<br>
<p><strong>More causes</strong> </p>	       

	                <div class="alignleft">
	                    <ol style="margin-left: 1.5em; margin-top: 0.5em;">
<li style="margin-top: -8px;"><a href="/whatsyourthing/Health+And+Fitness">Health And Fitness</a></li><li style="margin-top: -8px;"><a href="/whatsyourthing/HIV+And+Sexuality">HIV And Sexuality</a></li><li style="margin-top: -8px;"><a href="/whatsyourthing/Animal+Welfare">Animal Welfare</a></li><li style="margin-top: -8px;"><a href="/whatsyourthing/Poverty">Poverty</a></li><li style="margin-top: -8px;"><a href="/whatsyourthing/International+Human+Rights">International Human Rights</a></li><li style="margin-top: -8px;"><a href="/whatsyourthing/Discrimination">Discrimination</a></li><li style="margin-top: -8px;"><a href="/whatsyourthing/War,+Peace+And+Politics">War, Peace And Politics</a></li><li style="margin-top: -8px;"><a href="/whatsyourthing/Environment">Environment</a></li><li style="margin-top: -8px;"><a href="/whatsyourthing/Disaster+Response+And+Relief">Disaster Response And Relief</a></li><li style="margin-top: -8px;"><a href="/whatsyourthing/Education">Education</a></li><li style="margin-top: -8px;"><a href="/whatsyourthing/Violence+And+Bullying">Violence And Bullying</a></li>	                    </ol>
	                </div>

	                <p class="clear">Browse all of our causes... <a href="/whatsyourthing" class="more">More</a></p>


	                <div class="hr"><hr></div>


<div id="events-calendar-holder" style="">
 <img src="/nd/front/events.png" alt="events">
 <div id="events-calendar"><ul><li><a href="http://twitter.com/home?status=02%2F03+-+Chinese+New+Year+"><img src="/nd/logos/twitter.jpg" title="Tweet This" alt="Tweet This"></a><span class="date">02/03 -</span> Chinese New Year <a href=""></a></li><li><a href="http://twitter.com/home?status=02%2F05+-+San+Francisco+Boot+Camp+http%3A%2F%2Fbit.ly%2FcmK56k"><img src="/nd/logos/twitter.jpg" title="Tweet This" alt="Tweet This"></a><span class="date">02/05 -</span> San Francisco Boot Camp <a href="http://bit.ly/cmK56k">http://bit.ly/cmK56k</a></li><li><a href="http://twitter.com/home?status=02%2F06+-+Super+Bowl+%28have+game+face+ready%29+"><img src="/nd/logos/twitter.jpg" title="Tweet This" alt="Tweet This"></a><span class="date">02/06 -</span> Super Bowl (have game face ready) <a href=""></a></li><li><a href="http://twitter.com/home?status=02%2F09+-+Summer+intern+apps+available+http%3A%2F%2Fbit.ly%2FfFjQdK"><img src="/nd/logos/twitter.jpg" title="Tweet This" alt="Tweet This"></a><span class="date">02/09 -</span> Summer intern apps available <a href="http://bit.ly/fFjQdK">http://bit.ly/fFjQdK</a></li><li><a href="http://twitter.com/home?status=02%2F11+-+Taylor+Lautner%27s+Birthday+"><img src="/nd/logos/twitter.jpg" title="Tweet This" alt="Tweet This"></a><span class="date">02/11 -</span> Taylor Lautner\'s Birthday <a href=""></a></li></ul><a class="more" href="/calendar">More events</a></div>

<div class="hr"><hr></div>

</div>
      
<object type="application/x-shockwave-flash" data="http://www.dosomething.org/swf/sponsors.swf" width="190" height="120" id="sponsors" style="visibility: visible; "></object>


	            </div>',
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
    $display->panels['left'][0] = 'new-1';
    $pane = new stdClass;
    $pane->pid = 'new-2';
    $pane->panel = 'right';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => '',
      'title' => '',
      'body' => '<div style="width: 260px; float:left"> <!-- container -->

<div class="block col pink frontRR" style="width: 200px;"> <!-- cause videos -->
<a href="/video"><h2 class="img" style="height: 36px; left: -45px; top: -32px;"><img alt="Online Videos" src="/files/Images/cause-videos_fp.gif"/ ></h2></a>
	<div class="node story">
    	<h3><a href="http://www.dosomething.org/u/video/video-how-to-pitch-your-project-elevator-or-anywhere-else">How to Pitch Your Project</a></h3>
	<p><b><a href="http://www.dosomething.org/u">Do Something U</a></b> experts provide these helpful tips for pitching your project or organization to people that you meet.</p>
<div >  
<a  href="http://www.dosomething.org/u/video/video-how-to-pitch-your-project-elevator-or-anywhere-else" target="_blank">
<img src="http://www.dosomething.org/files/speedpitch4dsorg.JPG" width="110px" />
</a> <br>
 <a  href="http://www.dosomething.org/u/video/video-how-to-pitch-your-project-elevator-or-anywhere-else" target="_blank" style="padding-left: 60px;">Watch the video</em></a>   
</div> 

</div>
<br>
<h3>More on Do Something U</h3>
<ul class="logolist">
<li>How to start a <a href="http://www.dosomething.org/u/video/video-how-to-start-community-action-project">community action project</a>.</li>
<li>11 things to know about <a href="http://www.dosomething.org/u/information/11-things-to-know-about-event-fundraising">event fundraising</a>.</li>
<li>How to get <a href="http://www.dosomething.org/u/video/video-how-to-get-corporate-sponsors-to-love-you">corporate sponsors</a>.</li>
<li>Tips for using <a href="http://www.dosomething.org/u/tips/tip-using-google-maps">Google Maps</a>.</li>
<li>How to seek <a href="http://www.dosomething.org/u/tips/tips-getting-kind-donations">in-kind</a> donations.</li>
</ul>

<a href="/video" class="more">Online cause videos</a>
<br>
<a href="/video/rant-rave" class="more">Online videos from you!</a>
</div> <!-- end cause videos -->



<div class="block col pink" style="width: 200px; position: relative;"> <!-- news -->
<a style="position: absolute; top:-20px; left: 15px;" href="/news"><img alt="News" src="/nd/front/news.png" /></a>
 <ul class="logolist" style="padding-bottom: 0px; padding-top: 30px;">
 <?php
  $results = db_query("SELECT title, nid FROM node WHERE type=\'chatterbox\' AND status = 1 ORDER BY created DESC LIMIT 5");
  while ($result = db_fetch_object($results)) {
   print \'<li>\'.l($result->title, \'node/\'.$result->nid).\'</li>\';
  }
 ?>
 </ul>
 <p style="margin: 1em 0 0;"><a class="more" href="/news">Read More</a></p>
</div> <!-- end news -->


<div class="block col pink" style="width: 200px; position: relative;"> <!-- share something -->
 <h2><img src="/sites/all/themes/zen/dosomething/images/header_sharesomething.png" alt="Share"></h2>
 <h3>Post A Video</h3>
 <p><a href="/node/add/rant-rave">Upload or embed a video about your cause.</a></p>
 <h3>Submit a Guide for Action</h3>
 <p><a href="/node/add/action-guide-submission">Write your own step-by-step instructions for action that others can follow.</a></p>
 <h3>Post your Project</h3>
 <p><a href="/node/add/project">Tell us how you\'re taking action.</a></p>
 <h3>Join a Forum Discussion</h3>
 <p><a href="/forum">Start your own topic or respond to someone\'s comments.</a></p>
</div> <!-- end share something -->

</div> <!-- end container -->',
      'format' => '2',
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
    $pane->panel = 'right';
    $pane->type = 'views';
    $pane->subtype = 'newsbox_recent';
    $pane->shown = FALSE;
    $pane->access = array();
    $pane->configuration = array(
      'override_pager_settings' => 0,
      'use_pager' => 0,
      'nodes_per_page' => '5',
      'pager_id' => '',
      'offset' => '0',
      'more_link' => 0,
      'feed_icons' => 0,
      'panel_args' => 0,
      'link_to_view' => 0,
      'args' => '',
      'url' => '',
      'display' => 'block_1',
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $display->content['new-3'] = $pane;
    $display->panels['right'][1] = 'new-3';
    $pane = new stdClass;
    $pane->pid = 'new-4';
    $pane->panel = 'right';
    $pane->type = 'block';
    $pane->subtype = 'block-8';
    $pane->shown = FALSE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 0,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 2;
    $display->content['new-4'] = $pane;
    $display->panels['right'][2] = 'new-4';
    $pane = new stdClass;
    $pane->pid = 'new-5';
    $pane->panel = 'top';
    $pane->type = 'views_panes';
    $pane->subtype = 'front_scroller-panel_pane_1';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array();
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 0;
    $display->content['new-5'] = $pane;
    $display->panels['top'][0] = 'new-5';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['front'] = $page;

 return $pages;

}
