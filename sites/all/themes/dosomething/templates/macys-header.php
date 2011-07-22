<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <meta property="og:title" content="Macys Campaign | Do Something"/>    
  <meta property="fb:admins" content="642356930" /> 
  <meta property="fb:app_id" content="7630216751" />   
  <meta property="og:type" content="non_profit"/> 
  <meta property="og:url" content="http://www.dosomething.org/macys/"/>   
  <meta property="og:image" content="http://www.dosomething.org/sites/all/micro/hunt/logo.jpg" />   
  <meta property="og:site_name" content="DoSomething.org"/> 
  <meta property="og:description" content="Amazing DoSomething with Macys"/> 
  <?php print $head; ?>
  <?php print $styles; ?>
  
  <link rel="stylesheet" href="/<?=$ds_micro.'/macys-2011/macys-2011.css';?>" type="text/css" media="all" />
  <?php print $scripts; ?>
</head>

<body class="<?php print $classes; ?>">

  <div id="page-wrapper"><div id="page">
  <? print theme('header', array(
                              'front_page' => $front_page,
                              'directory' => $directory,
                              'mission' => $mission,
                              'top_right' => $top_right,
                              )); ?>

    <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix<?php if ($primary_links || $navigation) { print ' with-navigation'; } ?>">
	
      
	  
	  <!--Removed Div id ='menu'-->
      
      
      <div id="content" class="column"><div class="section">

        <?php print $highlight; ?>

        

        <?php print $help; ?>

        <?php print $content_top; ?>		

        <div id="content-area">

    
	
	

      <?php print $messages; ?>
	  
<?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
		  
		  
        <?php endif; ?>
		
		