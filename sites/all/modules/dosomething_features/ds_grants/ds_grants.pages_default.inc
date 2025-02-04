<?php

/**
 * Implementation of hook_default_page_manager_pages().
 */
function ds_grants_default_page_manager_pages() {
  $page = new stdClass;
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'fund_your_project';
  $page->task = 'page';
  $page->admin_title = 'fund_your_project';
  $page->admin_description = '';
  $page->path = 'grants';
  $page->access = array(
    'type' => 'none',
    'settings' => NULL,
  );
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
  $handler->name = 'page_fund_your_project_panel_context';
  $handler->task = 'page';
  $handler->subtask = 'fund_your_project';
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
  $display->layout = 'onecol';
  $display->layout_settings = '';
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'middle' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass;
    $pane->pid = 'new-1';
    $pane->panel = 'middle';
    $pane->type = 'views_panes';
    $pane->subtype = 'grants_slider-panel_pane_1';
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
    $display->content['new-1'] = $pane;
    $display->panels['middle'][0] = 'new-1';
    $pane = new stdClass;
    $pane->pid = 'new-2';
    $pane->panel = 'middle';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => '',
      'title' => 'Grants to fund your project',
      'body' => '<h3>Want to make change, but lack the funds? We can help.</h3>




<div class="box blue" style="margin-top: 30px;">
	<h2>$500 Do Something Seed Grants</h2>
<a href= "/grants/seedgrants"><img src= "http://www.dosomething.org/files/Logo_SeedGrants_web_Smaller2.jpg" align="left" hspace="5px"></a>
	<p>  Are you working to start a community action project or program? Are you looking for funding to take your already successful project or organization to the next level? We give out a $500 Do Something Seed Grant every week to help young people just like YOU!</p>
<div style="float: right; width: 140px;">
	<strong>Powered by </strong><br>
	<img src="http://www.dosomething.org/files/AXP_sm.gif" align="left">
	</div>
	<p><strong>Deadline:</strong> None! Apply now! You will be notified whether or not you have won within 2-3 months after submission.</p>
	<a href="/grants/seedgrants" class="more">
<strong>Learn More and Apply</strong></a><br>  
<strong><a class="more" href="/grants/seedgrants/winners">Read About Past Winners</a></strong><br style="clear:both;">
</div>


<div class="box blue" style="margin-top: 30px;">
	<h2>$250 DSU Project Pitch Grants</h2>
<p><a href = "http://www.dosomething.org/u/pitch-grants"><img class="goleft"  src= "/files/projectpitchlogo.png" width="111" ></a>
In order to take your project or organization to the next level, you need nail your project pitch first. <b><a href = "http://www.dosomething.org/u/pitch-grants">Upload your best pitch</a></b> for a chance to win one of five $250 grants! (Check out our Do Something U video, "<a href = "/u/video/video-how-to-pitch-your-project-elevator-or-anywhere-else">How to Pitch Your Project</a>," for tips.)</p>
<a href = "http://www.dosomething.org/u/pitch-grants" class="more"><b>Learn more and submit your project pitch.</b></a><br><br>
<b> Deadline:</b> The first round has closed, but the second round is open until July 7th. Apply now! You will be notified whether or not you have won on a rolling basis.</p>
</div>




<div class="box blue" style="margin-top: 30px;">
	<h2>$250 Do Something Club Grants</h2>
<a href= "/clubs/grants"><img src= "http://www.dosomething.org/files/clubs-sticker_02d_175x123px.png" align="left" hspace="5px"></a>	
<p>  Are you an official Do Something Club working on social action projects in your community? Need some money to help sustain your Club and your projects? Then apply for a Do Something Clubs Grant! We\'re giving out 5 grants worth $250 every single month.</p>
		<p><strong>Deadline:</strong> 11:59pm ET on the last day of every month.</p>
	<a href="/clubs/grants" class="more"><strong>Learn More and Apply</strong></a>
<p> Not an official Do Something Club? <a href="/clubs/resources/what-you-get">Check us out</a><br style="clear:both;">
</div>














<h3>Support our grants!</h3>
<p>Grab the code and add it to your myspace or website.</p>
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" type="application/x-shockwave-flash" width="300px" height="323px" id="InsertWidget_d741edd5-4393-4d08-ab96-fd021635abd8" align="middle"><param name="movie" value="http://widgetserver.com/syndication/flash/wrapper/InsertWidget.swf"/><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="menu" value="false" /><param name="flashvars" value="r=2&appId=d741edd5-4393-4d08-ab96-fd021635abd8" /><param name="allowScriptAccess" value="sameDomain" /> <embed src="http://widgetserver.com/syndication/flash/wrapper/InsertWidget.swf"  name="InsertWidget_d741edd5-4393-4d08-ab96-fd021635abd8"  width="300px" height="323px" quality="high" menu="false" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent" align="middle"  allowScriptAccess="sameDomain" flashvars="r=2&appId=d741edd5-4393-4d08-ab96-fd021635abd8" /></object>',
      'format' => '2',
      'admin_title' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'style' => 'default',
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 1;
    $display->content['new-2'] = $pane;
    $display->panels['middle'][1] = 'new-2';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['fund_your_project'] = $page;

 return $pages;

}
