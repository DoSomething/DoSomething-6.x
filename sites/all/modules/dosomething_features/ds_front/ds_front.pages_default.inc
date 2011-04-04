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
    'css_id' => '',
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
      'body' => '<div class="block col pink frontRR" style="width: 200px;"> <!-- cause videos -->
<a href="/video"><h2 class="img" style="height: 36px; left: -45px; top: -32px;"><img alt="Online Videos" src="/files/Images/cause-videos_fp.gif"></h2></a>
	<div class="node story">
    	<h3>Teens for Jeans</h3>
	<p>Watch 90210\'s <b><a href="http://www.youtube.com/watch?v=VSuXbJqnVoI">Matt Lanter</a></b> and <b><a href="http://www.youtube.com/watch?v=VSuXbJqnVoI">Jessica Lowndes</a></b> give details (and funny outtakes) for the 4th Annual <a href="http://www.youtube.com/watch?v=VSuXbJqnVoI">Teens for Jeans</a> drive.</p>
<div>  
<a href="http://www.youtube.com/watch?v=VSuXbJqnVoI">
<img src="http://www.dosomething.org/files/tjf-still_08.jpg" width="110px">
</a> <br>
 <a href="http://www.youtube.com/watch?v=VSuXbJqnVoI" style="padding-left: 60px;">Watch the video</a>   
</div> 

</div>
<br>
<h3>Fight youth homelessness</h3>
<ul class="logolist">
<li>Drop off jeans at any Aéropostale Jan 17 - Feb 13</li>
<li>Win <a href="http://www.dosomething.org/teensforjeans/contests">$5000</a> for your school or <a href="http://www.dosomething.org/teensforjeans/contests">celeb-autographed jeans</a>.</li>
<li><a href="http://www.dosomething.org/teensforjeans/faq">Learn more....</a></li>
</ul>

<a href="/video" class="more">Online cause videos</a>
<br>
<a href="/video/rant-rave" class="more">Online videos from you!</a>
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
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['front'] = $page;

 return $pages;

}
