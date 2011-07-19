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
      'body' => '<style type="text/css">
.sponsor-logos .logo {
  background-image: url(\'/sites/all/micro/front/sponsors-all-one-file.jpg\');
}
</style>

<div class="block col" style="clear:left;">
	                <h2 class="img"><a href="/whatsyourthing"><img src="/sites/all/themes/dosomething/images/header_whatsyourthing.png" width="182" height="33" alt="What\'s Your Thing?"></a></h2>




<div class="story">

<h3><a href="/scavenger-hunt">Scavenger Hunt</a></h3>

<a href="/scavenger-hunt"><img src="http://www.dosomething.org/sites/all/micro/hunt/logo.jpg" alt="Scavenger Hunt" style="float: left; padding: 0 10px 10px 0;"/></a>
<br>
<p>We\'ve teamed up with Lenovo on a cause-y Scavenger Hunt: 11 days of challenges that can make the world a better place and get you some seriously cool prizes.  Join now at <a href="/scavenger-hunt">DoSomething.org/Hunt</a></p>

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


<?php 

//drupal_add_js(\'nd/front/events_calendar.js\', \'theme\', \'footer\', FALSE, FALSE);

?>

<div id="events-calendar-holder" style="">
 <img src="/nd/front/events.png" alt="events">
 <div id="events-calendar"><?=file_get_contents(\'files/cached-pages/calendar-list.html\');?><a class="more" href="/calendar">More events</a></div>


<div class="hr"><hr></div>





</div>
<div class="sponsor-wrapper">
<h3>sponsors who rock</h3>
<div class="sponsor-logos">
<div class="logo s1"></div>
<div class="logo s2"></div>
<div class="logo s3"></div>
<div class="logo s4"></div>
<div class="logo s5"></div>
<div class="logo s6"></div>
<div class="logo s7"></div>
<div class="logo s8"></div>
<div class="logo s9"></div>
<div class="logo s10"></div>
<div class="logo s11"></div>
</div></div>

	            </div>',
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
    	<h3><a href="http://www.dosomething.org/scavenger-hunt">Community Cast Members Want You...</a></h3>
	<p>...to sign up for our Scavenger Hunt, that is. Watch TV stars Alison Brie and Danny Pudi from <i>Community</i> goof off in our newest PSA and get the how/when/why scoop!</a></b>.</p>
<div >  
<a  href="http://www.dosomething.org/scavenger-hunt" target="_blank">
<img src="http://www.dosomething.org/files/communitystill061611.jpg" width="110px" />
</a> <br>
 <a  href="http://www.dosomething.org/scavenger-hunt" target="_blank" style="padding-left: 60px;">Watch the video</em></a>   

</div> 

</div>
<br>
<h3>Start Hunting</h3>
<ul class="logolist">
<li>Text HUNT to 30644 to get started</li>
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
 <h2><img src="/sites/all/themes/dosomething/images/header_sharesomething.png" alt="Share"></h2>
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
    $display->content['new-3'] = $pane;
    $display->panels['top'][0] = 'new-3';
    $pane = new stdClass;
    $pane->pid = 'new-4';
    $pane->panel = 'top';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = FALSE;
    $pane->access = array(
      'plugins' => array(),
    );
    $pane->configuration = array(
      'admin_title' => 'Ustream dosomething channel embed',
      'title' => '',
      'body' => '<p>DoSomething Awards Kickoff is LIVE!  Check out the Ustream broadcast below and find out who the 5 finalists will be. </p>
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="480" height="296" id="utv195190"><param name="flashvars" value="autoplay=true&amp;brand=embed&amp;cid=5816367&amp;v3=1"/><param name="allowfullscreen" value="true"/><param name="allowscriptaccess" value="always"/><param name="movie" value="http://www.ustream.tv/flash/viewer.swf"/><embed flashvars="autoplay=true&amp;brand=embed&amp;cid=5816367&amp;v3=1" width="480" height="296" allowfullscreen="true" allowscriptaccess="always" id="utv195190" name="utv_n_581614" src="http://www.ustream.tv/flash/viewer.swf" type="application/x-shockwave-flash" /></object><br /><a href="http://www.ustream.tv/" style="padding: 2px 0px 4px; width: 400px; background: #ffffff; display: block; color: #000000; font-weight: normal; font-size: 10px; text-decoration: underline; text-align: center;" target="_blank">Live Video streaming by Ustream</a>
<iframe width="468" scrolling="no" height="586" frameborder="0" style="border: 0px none transparent;" src="http://www.ustream.tv/socialstream/5816367"></iframe>',
      'format' => '2',
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
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['front'] = $page;

 return $pages;

}
