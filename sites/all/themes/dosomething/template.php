<?php
// $Id$

/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. You can add new regions for block content, modify
 *   or override Drupal's theme functions, intercept or make additional
 *   variables available to your theme, and create custom PHP logic. For more
 *   information, please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/theme-guide
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   The Drupal theme system uses special theme functions to generate HTML
 *   output automatically. Often we wish to customize this HTML output. To do
 *   this, we have to override the theme function. You have to first find the
 *   theme function that generates the output, and then "catch" it and modify it
 *   here. The easiest way to do it is to copy the original function in its
 *   entirety and paste it here, changing the prefix from theme_ to dosomething_.
 *   For example:
 *
 *     original: theme_breadcrumb()
 *     theme override: dosomething_breadcrumb()
 *
 *   where dosomething is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_breadcrumb() function.
 *
 *   If you would like to override any of the theme functions used in Zen core,
 *   you should first look at how Zen core implements those functions:
 *     theme_breadcrumbs()      in zen/template.php
 *     theme_menu_item_link()   in zen/template.php
 *     theme_menu_local_tasks() in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called template suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node-forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and template suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440
 *   and http://drupal.org/node/190815#template-suggestions
 */


/**
 * Implementation of HOOK_theme().
 */
function dosomething_theme(&$existing, $type, $theme, $path) {
  $hooks = zen_theme($existing, $type, $theme, $path);
  // Add your theme hooks like this:
  /*
  $hooks['hook_name_here'] = array( // Details go here );
  */
  $hooks['primary_links'] = array();
  $hooks['signup_block'] = array();
  $hooks['header'] = array();
  $hooks['badges'] = array();
  $hooks['addthis'] = array();
  
  $templates_path = drupal_get_path('theme', 'dosomething') . '/templates';
  $ds_forms = array(
                 'ebd_signup',
                 'campaign_ebd_2011',
                 'project',
                 'project_update',
                 'grant',
                 'staples_2011_signup',
                 'staples_reason',
                 'scavenger_2011_signup',
                 'campaign_hunt_2011',
                 'ewaste_signup_2011', 'campaign_ew_2011',
                 'decade_2011_signup',
                 'campaign_sports_2011',
                 'campaign_bully_2011',
				 'club',
				 'cancer_2011_signup',
				 'campaign_cancer_2011',
         'campaign_tfj_2012',
         'fl_judge',
         'dsa_judge',
                 );
  //$hooks['ebd_signup_node_form'] = array( 'template' => 'ebd_signup_form', 'arguments' => array('form' => array()), 'path' => $templates_path );
  foreach ($ds_forms as $name) {
    $hooks[$name.'_node_form'] = array( 'template' => $name.'_form', 'arguments' => array('form' => array()), 'path' => $templates_path );
  }
  // @TODO: Needs detailed comments. Patches welcome!
  return $hooks;
}

function dosomething_primary_links() {
  return '<ul class="links">
      <li class="first menu-1-1-2"><a href="/whatsyourthing" class="menu-1-1-2" title="Facts, Info On Causes That Matter"></a></li>
      <li class="menu-1-2-2"><a href="/actnow" class="menu-1-2-2" title="Volunteer Ideas Near You"></a></li>
      <li class="last menu-1-3-2"><a href="/programs" class="menu-1-3-2" title="Grants, Clubs and Campaigns"></a></li>
    </ul>';
}

function dosomething_header($args = array('front_page' => '', 'directory' => '', 'mission' => '', 'top_right' => '')) {
  global $user;
  $header_str = '    <div id="header"><div class="section clearfix">

    <a href="'.$args['front_page'].'" title="DoSomething.org" rel="home" id="logo"><img src="/'.$args['directory'].'/images/logo.png" alt="DoSomething.org" /></a>

    <ul id="primary-nav">
    <li class="whatsyourthing"><a href="/whatsyourthing">Whats Your Thing?</a></li>
    <li class="actnow"><a href="/actnow">Act Now!</a></li>
    <li class="programs"><a href="/programs">Our Programs</a></li>
    </ul>

    ';

  if ($args['mission']) {
    $header_str .= '<div id="mission">'.$args['mission'].'</div>';
  }
    $header_str .= $args['top_right'].'</div></div> <!-- /.section, /#header -->
    ';

  return $header_str;

}

/**
 * Return a themed form element.
 *
 * @param element
 *   An associative array containing the properties of the element.
 *   Properties used: title, description, id, required
 * @param $value
 *   The form element's data.
 * @return
 *   A string representing the form element.
 *
 * @ingroup themeable
 */
function dosomething_form_element($element, $value) {
  // This is also used in the installer, pre-database setup.
  $t = get_t();

  $output = '<div class="form-item"';
  if (!empty($element['#id'])) {
    $output .= ' id="'. $element['#id'] .'-wrapper"';
  }
  $output .= ">\n";
  $required = !empty($element['#required']) ? '<span class="form-required" title="'. $t('This field is required.') .'">*</span>' : '';

  if (!empty($element['#title'])) {
    $title = $element['#title'];
    $punc = ':';
    if (preg_match('/(:|\?|>|\^)$/', $title)) {
      $punc = ' ';
      if (preg_match('/\^$/', $title)) {
        $title = preg_replace('/\^/', '', $title);
      }
    }
    if (!empty($element['#id'])) {
      $output .= ' <label for="'. $element['#id'] .'">'. $t('!title'.$punc.' !required', array('!title' => filter_xss_admin($title), '!required' => $required)) ."</label>\n";
    }
    else {
      $output .= ' <label>'. $t('!title'.$punc.' !required', array('!title' => filter_xss_admin($title), '!required' => $required)) ."</label>\n";
    }
  }

  $output .= " $value\n";

  if (!empty($element['#description'])) {
    $output .= ' <div class="description">'. $element['#description'] ."</div>\n";
  }

  $output .= "</div>\n";

  return $output;
}


/**
 * Override or insert variables into all templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered (name of the .tpl.php file.)
 */
function dosomething_preprocess(&$vars, $hook) {
  if (strstr($alias, 'staples-for-students'))
  {
    $device = mobile_tools_is_mobile_device();
    if ($device['type'] == 'mobile')
      drupal_goto('http://m.dosomething.org/staples', null, null, 301);
  }
}


/**
 * Override or insert variables into the page templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
function dosomething_preprocess_page(&$vars, $hook) {

  $vars['ds_micro'] = path_to_theme().'/../../micro';
  $vars['subtheme_directory'] = path_to_theme(); //Path for legacy microsites
  // add page template suggestions -- later items have higher priority

  // page-[content-type].tpl.php
  if ('node' == arg(0)) {
    $vars['template_files'][]  = 'page-' . $vars['node']->type;
    $vars['template_files'][]  = 'node-'.arg(1).'-page';
  }

  /* page-[path].tpl.php and variations
     e.g. for the URL /about/team/staff we generate suggestions:
     page-about.tpl.php
     page-about-team.tpl.php
     page-about-team-staff.tpl.php
  */
  $alias = drupal_get_path_alias(str_replace('/edit', '', $_GET['q']));
  if ($alias != $_GET['q']) {
    $template_name = 'page';
    foreach (explode('/', $alias) as $path_element) {
      $template_name .= '-' . $path_element;
      $vars['template_files'][] = $template_name;
    }
  }
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function dosomething_preprocess_node(&$vars, $hook) {

  //$vars['cause_links'] = '<div class="cause-links">' . dosomething_cause_links($vars['taxonomy'], array('class' => 'links inline'), format_plural(count($vars['taxonomy']), 'Related:', 'Related Causes:')) . '</div>';
  $vars['cause_links'] = '';

  $when = time() - $vars['node']->changed;
  if ($when < (60 * 60 * 24 * 7)) { // less than one week ago
    $time = t('Last updated by !username !datetime ago', array('!username' => $vars['name'], '!datetime' => format_interval($when, 1)));
  } else {
    $time = t('Last updated by !username on !datetime', array('!username' => $vars['name'], '!datetime' => date('m/d/y', $vars['node']->changed)));
  }
  $vars['updated'] = $time;

  switch($hook) {

    case 'node':

      /* add node template suggestions -- later items have higher priority
         page-[path].tpl.php and variations
         e.g. for the URL /about/team/staff we generate suggestions:
         page-about.tpl.php
         page-about-team.tpl.php
         page-about-team-staff.tpl.php
      */
      if ($vars['page']) {
        $alias = $vars['node']->path;
        if ($alias != $_GET['q']) {
          $template_name = 'node-path';
          foreach (explode('/', $alias) as $path_element) {
            $template_name .= '-' . $path_element;
            $vars['template_files'][] = $template_name;
          }
        }
      }

      break;

  }

}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function dosomething_preprocess_comment(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function dosomething_preprocess_block(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */


function dosomething_cause_links($links, $attributes = array('class' => 'links'), $heading = '') {

  global $language;
  $output = '';

  if (count($links) > 0) {
    // Treat the heading first if it is present to prepend it to the
    // list of links.
    if (!empty($heading)) {
      if (is_string($heading)) {
        // Prepare the array that will be used when the passed heading
        // is a string.
        $heading = array(
          'text' => $heading,
          // Set the default level of the heading.
          'level' => 'strong',
        );
      }
      $output .= '<' . $heading['level'];
      if (!empty($heading['class'])) {
        $output .= drupal_attributes(array('class' => $heading['class']));
      }
      $output .= '>' . check_plain($heading['text']) . '</' . $heading['level'] . '>';
    }

    $link_list = array();
    $num_links = count($links);
    $i = 1;

    foreach ($links as $key => $link) {
      $class = $key;

      // Add first, last and active classes to the list of links to help out themers.
      if ($i == 1) {
        $class .= ' first';
      }
      if ($i == $num_links) {
        $class .= ' last';
      }
      if (isset($link['href']) && ($link['href'] == $_GET['q'] || ($link['href'] == '<front>' && drupal_is_front_page()))
          && (empty($link['language']) || $link['language']->language == $language->language)) {
        $class .= ' active';
      }
      //$output .= '<li'. drupal_attributes(array('class' => $class)) .'>';

      $cause = '';
      $tid_parts = explode('/', $link['href']);
      $parents = taxonomy_get_parents($tid_parts[2]);
      if (count($parents)) {
        $parent = array_shift($parents);
        $cause = str_replace(' ', '+', $parent->name) . '/';
      }
      if (isset($link['href'])) {
        $link_list[] = '<a href="/whatsyourthing/'. $cause . str_replace(' ', '+', $link['title']).'">'.$link['title'].'</a>';
      }

      $i++;

    }

    if (count($link_list)) {
      $output .= ' '.implode(', ', $link_list);
    }

  }

  return $output;
}

function GetSrcFromImageCache($imagecache_id, $photo_url)
{
	$r = FALSE;
	if(module_exists('imagecache'))
	{
		$html = theme('imagecache',$imagecache_id,$photo_url,'','');
		if(preg_match('/src=[\'"](.*?)[\'"]/i',$html,$matches))
		{
			$r = $matches[1];
		}
	}
	return $r;
}

function dosomething_dhtml_slider($nids = array(),$header = NULL)
{
	global $slider_count;
	if(!is_numeric($slider_count))
		$slider_count = 0;
	
	$slider_id = $slider_count;
	
	//$path_to_subtheme = path_to_subtheme();
	$path_to_subtheme = path_to_theme();
	
	$r = '';	
	$r .= '<div class="block features">';
	if ($header) {
		$r .= $header;
	}
	$r .= <<<EOT
	<div class="content">
		<div class="dhtml-slider dhtml-slider-$slider_id">
EOT;

	$frame_id = 0;
	foreach($nids as $nid)
	{
		if($node = node_load(array('nid' => $nid)))
		{
		
			$photo_field = NULL;
			if(isset($node->field_project_photo))
				$photo_field = $node->field_project_photo;
			if(isset($node->field_picture))
				$photo_field = $node->field_picture;
			
			if($photo_field!=NULL)
			{
				if(is_array($photo_field))
					$photo_field = $photo_field[0];
				
				$img_src = GetSrcFromImageCache('dhtml_slider_image',$photo_field['filepath']);
				$first = ($frame_id==0) ? 'first' : '';
				$title = check_plain($node->title);
				if ($node->field_link[0]['url']) {
					$link = $node->field_link[0]['url'];
				} else {
					$link = '/' . drupal_get_path_alias('node/'.$node->nid);
				}
		
				$teaser = '';
				if($node->type=='project')
				{
					$teaser = node_teaser(strip_tags($node->field_essay_see_it[0]['value']));
				}				
				elseif(isset($node->field_description))
				{
					$teaser = strip_tags($node->field_description[0]['value']);
				}
					
				if(strlen($teaser))
					$teaser = '<p>' . $teaser . '... <a href="' . $link . '" class="more">More</a></p>';
				
				if($node->type=='grant_alumni')
				{
					if(strlen($node->field_recipient_age[0]['value']))
						$title .= ',&nbsp;' . $node->field_recipient_age[0]['value'];
					if(intval($node->field_alumni_project[0]['nid'])>0)
					{
						if($project_node = node_load($node->field_alumni_project[0]['nid']))
						{
							$teaser = '<p>Project:&nbsp;<a href="/' . drupal_get_path_alias('node/'.$project_node->nid) . '">' . $project_node->title . '</a></p>' . $teaser;
						}
					}
				}
				
				$r .= <<<EOT
			<div class="frame $first" id="dhtml-slider-$slider_id-frame-$frame_id">                
			<div class="col_left"><img src="$img_src" width="223" height="240" /></div>
			<div class="col_right">
					<h3><a href="$link">$title</a></h3>
					$teaser
			</div>
			<div class="clear"></div>
			</div>
EOT;
                    
				$frame_id++;
			}
		}
	}

	$r .= <<<EOT
	</div>
</div>

<p class="nav"><a href="" id="dhtml-slider-{$slider_id}-prev" class="dhtml-slider-{$slider_id}-link prev">Previous</a><img src="/{$path_to_subtheme}/images/ul_divider.png" width="1" height="15" alt="" /><a href="" id="dhtml-slider-{$slider_id}-next" class="dhtml-slider-{$slider_id}-link next">Next</a></p>


</div>


<script type="text/javascript">
if(typeof(dhtml_slider_index)=='undefined')
{
	var dhtml_slider_index = new Object();
}
dhtml_slider_index[{$slider_id}] = 0;

if(typeof(dhtml_slider_interval)=='undefined')
{
	var dhtml_slider_interval = new Object();
}
dhtml_slider_interval[{$slider_id}] = null;

if(typeof(dhtml_slider_rotate)!='function')
{
	function dhtml_slider_rotate(slider_id, increment)
	{		
		var old_index = dhtml_slider_index[slider_id];
		dhtml_slider_index[slider_id] = old_index + increment;
		if(dhtml_slider_index[slider_id]<0)
			dhtml_slider_index[slider_id] = dhtml_slider_index[slider_id] + ($('.dhtml-slider-' + slider_id + ' .frame').length);
		dhtml_slider_index[slider_id] = dhtml_slider_index[slider_id] % ($('.dhtml-slider-' + slider_id + ' .frame').length);
		$('.dhtml-slider-' + slider_id + ' #dhtml-slider-' + slider_id + '-frame-' + old_index).fadeOut(500, function(){ $('.dhtml-slider-' + slider_id + ' #dhtml-slider-' + slider_id + '-frame-' + dhtml_slider_index[slider_id]).fadeIn(500); });		
	}
}

$(function()
{
	$('a.dhtml-slider-{$slider_id}-link').click(function()
	{
		var increment = $(this).attr('class').match(/\bprev\b/i) ? -1 : 1;
		if(dhtml_slider_interval[{$slider_id}]!=null)
		{
			window.clearInterval(dhtml_slider_interval[{$slider_id}]);
			dhtml_slider_interval[{$slider_id}] = null;
		}
		dhtml_slider_rotate({$slider_id}, increment);
		return false;
	});
	
	dhtml_slider_interval[{$slider_id}] = window.setInterval(function(){
		dhtml_slider_rotate({$slider_id},1);
	}, (15000));								
});
</script>
	
EOT;
		
	$slider_count++;

	return $r;
}

function dosomething_badges($badges){
  //$images = array('grantwinner' => 'DS_badge_grantWinner.png', "dsaward" => "DS_badge_awardWinner.png", "clubproject" => "DS_badge_clubProject.png");
  //$images = array('grantwinner' => 'grantwinner.png', 'dsaward' => 'grantwinner.png', 'clubproject' => 'clubproject.png', 'projofday' => 'projofday.png');
  $badge_meta = array( 'grantwinner' => array('image' => 'grantwinner.png',
                                              'link' => '/projects-search/*/*/*/*/*/all/*/grants/*/*/*',
                                              'title' => 'Grant Winner'),
                       'dsaward'     => array('image' => 'grantwinner.png',
                                              'link' => '/projects-search/*/*/*/*/*/all/*/grants/*/*/*',
                                              'title' => 'Grant Winner'),
                       'projofday'   => array('image' => 'projofday.png',
                                              'link' => '/projects-search/*/*/*/*/*/all/*/*/*/*/*/project-of-the-day',
                                              'title' => 'Project of the Day'),
                       'clubproject' => array('image' => 'clubproject.png',
                                              'link' => '/projects-search/*/*/*/*/*/all/clubs/*/*/*/*',
                                              'title' => 'Club Project'));
  $out = '<div class="badges">';
  foreach($badges as $badge=>$value){
    if($value == 1){
      //$out .= '<div class="badge"><img src="/'.path_to_subtheme()."/images/".$images[$badge].'" /></div>';
      $out .= '<div class="badge">';
      if ($badge_meta[$badge]['link'])
         $out .= '<a href="'.$badge_meta[$badge]['link'].'">';

      $out .= '<img src="/nd/projects/badges/'.$badge_meta[$badge]['image'].'" title="'.$badge_meta[$badge]['title'].'"/></div>';
      if ($badge_meta[$badge]['link'])
         $out .= '</a>';
    }
  }
  $out .= '</div>';

  return $out;
}

function theme_fb_tw_g() {

  return '<div class="social-share">'.
    theme_google_plusone_button(array('css' => 'display:inline;float:left;',
                                      'url' => 'http://www.dosomething.org'.drupal_get_path_alias(request_uri()) )).
    '<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=152294931506668&amp;xfbml=1"></script><fb:like href="" send="false" width="200" show_faces="true" font=""></fb:like>'.
    '<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="dosomething">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>'.
    '</div>';

}

/* Function to drop in Addthis links */

function theme_addthis($additional_class = "addthis_32x32_style") {
  $addthis = "
  <!-- SHARETHIS CODE STARTS -->

  <span class='st_facebook_vcount' displayText='Facebook'></span>
  <span class='st_twitter_vcount' displayText='Tweet'></span>
  <span class='st_linkedin_vcount' displayText='LinkedIn'></span>
  <span class='st_email_vcount' displayText='Email'></span>
  <span class='st_fblike_vcount' displayText='Facebook Like'></span>
   <span class='st_plusone_vcount' displayText='Google +1'></span>
 <a href='#' onclick='window.print()'><img src='http://www.dosomething.org/files/print.png'/></a>
  <!-- SHARETHIS CODE ENDS -->



    <!-- ADDTHIS BUTTON BEGIN -->
<script type=\"text/javascript\">
var addthis_config = {
  username: \"dosomething\",
  data_track_clickback: true
}
var addthis_share = {
  templates: { twitter: '{{title}} {{url}} via @dosomething' }
}
</script>

  <div class=\"addthis_toolbox $additional_class addthis_default_style\">
  <!--
<a class=\"addthis_button_facebook\"></a>
<a class=\"addthis_button_twitter\" tw:via=\"dosomething\"></a>
<a class=\"addthis_button_myspace\"></a>
<a class=\"addthis_button_digg\"></a>
<a class=\"addthis_button_email\"></a>
<a class=\"addthis_button_print\"></a>".
    theme_google_plusone_button(array('css' => 'display:inline;float:left;',
                                      'url' => 'http://www.dosomething.org'.drupal_get_path_alias(request_uri()) )).
                                      "-->
                                      </div>

<script type=\"text/javascript\" src=\"http://s7.addthis.com/js/250/addthis_widget.js\"></script>

<!-- ADDTHIS BUTTON END -->";
  return $addthis;
}

function dosomething_numberc($num, $padding = false, $places = 7) {
  $output = '';
  if ($padding) {
    $text = sprintf("%0{$places}d", $num);
  } else {
    $text = sprintf("%d", $num);
  }
  for ($i = 0; $i < strlen($text); $i++) {
    $output .= "<span class=\"number number{$text[$i]}\"></span>\n";
  }
  return $output;
}
