<?php

/**
 * Implementation of hook_default_page_manager_pages().
 */
function ds_clubs_default_page_manager_pages() {
  $page = new stdClass;
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'clubs';
  $page->task = 'page';
  $page->admin_title = 'clubs';
  $page->admin_description = '';
  $page->path = 'programs/clubs';
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
  $handler->name = 'page_clubs_panel_context';
  $handler->task = 'page';
  $handler->subtask = 'clubs';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'css_id' => 'clubs-panel',
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
  $display->title = 'Clubs';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass;
    $pane->pid = 'new-1';
    $pane->panel = 'middle';
    $pane->type = 'views_panes';
    $pane->subtype = 'clubs_slider-panel_pane_1';
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
      'override_title' => 0,
      'override_title_text' => '<img src="/files/layout/CLUBS2.jpg" alt="high school clubs">',
      'title' => '',
      'body' => '<h3>What is a Do Something Club?</h3>
<p>Do Something Clubs are your chance to take action in your community with your friends. Clubs do projects on <strong>any issue </strong>that matters to them. We give you ideas and resources, you decide what projects your Club takes on.</p>
<p>Do Something Clubs must post at least 2 projects a year, but the more the better! Start a Club today and you\'ll be eligible for a <strong>Clubs Grant and monthly prizes</strong>. You\'ll also get newsletters and three packages a year full of project resources, upcoming opportunities, and Do Something SWAG and it\'s all free!</p>

<h3>How do I start one? </h3>
<ol><li> Recruit 4 other committed members. </li> <li>Brainstorm 2 projects. Your projects can be original ideas or your club can join Do Something <a href="http://www.dosomething.org/campaigns" target="_blank">campaigns</a>. </li> <li>Tell us what you have planned and why you want to start a Do Something Club in your school or community. </li><li>We\'ll let you know if your club has been approved within a few days.</li><li>Do Something!</li></ol>

<div class="gainlayout blue box callout">
<a href="/clubs/resources/what-you-get">Get started on your application!</a></div>

<h3>What\'s New?</h3>
<p><strong> Read the latest  <a target="_blank" href="http://www.dosomething.org/clubs/newsletters">Clubs eblast.</a></strong><p>

<p>Got a question about Do Something Clubs or taking action in your school or community? Contact our resident pro through the helpline at <a href="/help">http://www.dosomething.org/help</a> or call (212) 254-2390 ext 232.</p>',
      'format' => '3',
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
  $pages['clubs'] = $page;

 return $pages;

}
