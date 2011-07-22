<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  
  <link rel="stylesheet" href="/<?=$ds_micro.'/footlocker/footlocker-white.css';?>" type="text/css" media="all" />
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
      <div id="footlocker-nav"><a href="/footlocker"><img id="footlocker-logo" src="/<?=$ds_micro.'/footlocker/logo-white.png';?>"></a>
      <div id="menu"><?php
        $base = '/footlocker';
        $items = array(array('home', $base),
                       /* array('LINK', $base.'/SUBPATH'), */
					   array('apply', $base.'/apply'),
					   array('about', $base.'/about'),
					   array('tips for college', $base.'/tips'),
					   array('judges', $base.'/judges'),
					   array('faqs', $base.'/faqs')
                      );
        foreach ($items as $i) {
          $class = '';
          $currPath = drupal_get_path_alias(request_uri());
          if (strncmp($i[1], $currPath, strlen($i[1])) == 0 && $i[1] != $base)
            $class = 'active';
          else if ($i[1] == $base && $i[1] == $currPath)
            $class = 'active';
          printf('<a href="%s" class="%s">%s</a>', $i[1], $class, $i[0]);
        }
       ?></div>
      </div>
      <div id="content" class="column"><div class="section">

        <?php print $highlight; ?>

        

        <?php print $help; ?>

        <?php print $content_top; ?>

        <div id="content-area">

    <div id="footlocker">


      <?php print $messages; ?>
	  
<?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>