<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  
   <meta property="og:title" content="<?=$head_title;?>"/>
  <meta property="fb:admins" content="508145411,603061,630191494" />
  <meta property="fb:app_id" content="93836527897" />
  <meta property="og:type" content="non_profit"/>
  <meta property="og:url" content="http://www.dosomething.org/green-your-school" />
  <meta property="og:image" content="http://www.dosomething.org/sites/all/micro/greenyourschool/images/gys-logo.png" />
  <meta property="og:title" content="Green Your School Challenge"/>
	<meta property="og:site_name" content="Green Your School Challenge | DoSomething.org"/>
  <meta property="og:description" content="Got what it takes to go greener than the competition? Prove it. Sign up your school for DoSomething.org's Green Your School Challenge and you could win scholarships and prizes."/>
  
  <?php print $head; ?>
  <?php print $styles; ?>
  <link rel="stylesheet" href="/<?=$ds_micro.'/greenyourschool/gys.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=$ds_micro.'/tfj-full/fonts.css';?>" type="text/css" media="all" />
  <?php print $scripts; ?>
  <script type="text/javascript" src="/sites/all/micro/greenyourschool/gys.js"></script>
</head>

<body class="<?php print $classes; ?>">

  <div id="page-wrapper"><div id="page">
  <? print str_replace('/sites/all/themes/dosomething/images/logo.png', '/sites/all/micro/greenyourschool/images/ds-logo.png', theme('header', array( 
                              'front_page' => $front_page,
                              'directory' => $directory,
                              'mission' => $mission,
                              'top_right' => $top_right,
                              ))); ?>
    <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix<?php if ($primary_links || $navigation) { print ' with-navigation'; } ?>">
    <a href="/green-your-school"><img id="campaign-logo" src="/<?=$ds_micro;?>/greenyourschool/images/gys-logo.png" /></a>
    <div id="greener-subheader">Got what it takes to go <span style="color: #78c848;">greener</span> than the competition? Prove it.</div>
	 
	 <div id="block-webform-client-block-735506">

	 <?php  	
		global $user;
		module_load_include('inc', 'webform', 'includes/webform.submissions');
	
		if (arg(1) <> '736100' AND webform_get_submission_count(736100, $user->uid) == 0) { 
	      $sign_up = module_invoke('webform', 'block', 'view', 'client-block-735506');
              echo $sign_up['content']; 
	      }
        ?></div>
       <div id="content" class="column"><div class="section">

        <?php print $highlight; ?>

        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>

        <?php print $help; ?>
	
	
	
	<div id="nav"><?php
          $root = 'green-your-school';
          $nav = array(
              array('href' => $root, 'title' => 'home'),
              array('href' => $root.'/project-ideas', 'title' => 'project ideas'),
              array('href' => $root.'/browse-schools', 'title' => 'browse schools'),
              array('href' => $root.'/my-school', 'title' => 'my school'),
              array('href' => 'trashy', 'title' => 'dont be trashy', 'attributes' => array('target' => '_blank')),
              array('href' => $root.'/prizes', 'title' => 'prizes'),
	      array('href' => $root.'/report-back', 'title' => 'Report Back'),
          );
          foreach ($nav as &$n) {
            $path = drupal_lookup_path('source', $n['href']);
            if (!empty($path)) $n['href'] = $path;
          }
	  
	global $user;
	module_load_include('inc', 'webform', 'includes/webform.submissions');
	if (webform_get_submission_count(736100, $user->uid) == 0): 
		unset($nav[3]);  unset($nav[6]);
        endif; 
	  
	  echo theme_links($nav);
        ?></div>

        <?php print $content_top; ?>
	
 
        <div id="content-area" class="content">

    <div id="gys-wrapper">
	 
<?php
          $messages = str_replace('You must <a href="/user/login?destination=node%2F736100">login</a> or <a href="/user/register?destination=node%2F736100">register</a> to view this form.',
            'To sign up your school, you must <a href="/user/login?destination=node%2F736100">login</a> or <a href="/user/register?destination=node%2F736100">register</a>.', $messages);
?>
      <?php print $messages; ?>
    
    
    
    <?php if ($right) print $right; ?>
    
    <?php if (arg(1) == 'schools') { ?>
		<div id="my-school" class="big-box green-box">
		<div class="box-header">
		<h2 class="left">
		<?php print $title; ?>
		</h2>
		<h2 class="right"></h2>
		<div class="clear-both"></div>
		</div>
		<div class="box-content">
	<?php } ?>
    
    
    <?php print $content; ?>
    <?php print $content_bottom; ?>
    
     <?php if (arg(1) == 'schools') { ?>
		</div></div>
	<?php } ?>
    
    
    
   
<?php if (arg(1) <> '736100') {    ?>
	
    <div class="green-box small-box left">
<div class="box-header">
<h2 class="center-text">Browse Project Ideas</h2>
</div>
<div class="box-content">
<p>Explore project ideas and create a check list for your school.</p>
<img class="center" src="/sites/all/micro/greenyourschool/images/tickbox.png" />
<a href="/green-your-school/project-ideas"><div class="small-button center">VIEW IDEAS</div></a>
</div>
</div>

<div class="green-box small-box left">
<div class="box-header">
<h2 class="center-text">Prizes</h2>
</div>
<div class="box-content">
<p>Here’s your opportunity to win a scholarship or a green grant.</p>
<img class="center" src="/sites/all/micro/greenyourschool/images/dollar-sign.png" />
<a href="/green-your-school/prizes"><div class="small-button center">CHECK IT OUT</div></a>
</div>
</div>

<div class="green-box small-box left">
<div class="box-header">
<h2 class="center-text">View Your School</h2>
</div>
<div class="box-content">
<p>Find your school of start you own Green Your School Challenge.</p>
<a href="/green-your-school/browse-schools"><div class="small-button center">BROWSE SCHOOLS</div></a>
</div>
</div>

<div class="clear-both"></div>

<?php } ?>

<img id="energy-star-branding" class="left" src="/sites/all/micro/greenyourschool/images/energy-star-logo.png" />
<img id="nestle-branding" class="right" src="/sites/all/micro/greenyourschool/images/nestle-logo.png" />
<div class="clear-both"></div>
    
    
    
    </div></div>

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

</body>
</html>
