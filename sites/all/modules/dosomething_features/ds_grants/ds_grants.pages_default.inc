<?php

/**
 * Implementation of hook_default_page_manager_pages().
 */
function ds_grants_default_page_manager_pages() {
  $page = new stdClass;
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'Awards_alumni';
  $page->task = 'page';
  $page->admin_title = 'Awards_alumni';
  $page->admin_description = '';
  $page->path = 'beta/awards';
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
  $handler->name = 'page_Awards_alumni_panel_context';
  $handler->task = 'page';
  $handler->subtask = 'Awards_alumni';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Panel',
    'no_blocks' => '0',
    'pipeline' => 'standard',
    'css_id' => '',
    'css' => NULL,
    'contexts' => array(),
    'relationships' => array(),
  );
  $display = new panels_display;
  $display->layout = 'DoSomething Projects Page';
  $display->layout_settings = '';
  $display->panel_settings = array();
  $display->cache = array();
  $display->title = '';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass;
    $pane->pid = 'new-1';
    $pane->panel = 'top';
    $pane->type = 'block';
    $pane->subtype = 'views-awards_landing_page_slider';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 0,
      'override_title_text' => '',
      'module' => 'views',
      'delta' => 'awards_landing_page_slider',
      'block_visibility' => 0,
    );
    $pane->cache = array();
    $pane->style = array(
      'style' => 'default',
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 0;
    $display->content['new-1'] = $pane;
    $display->panels['top'][0] = 'new-1';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['Awards_alumni'] = $page;

 return $pages;

}
