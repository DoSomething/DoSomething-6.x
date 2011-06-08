<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <link rel="stylesheet" href="/<?=$ds_micro.'/sfs/staples-for-students.css';?>" type="text/css" media="all" />
  <?php print $scripts; ?>
  <script type="text/javascript" src="/<?=$ds_micro.'/sfs/staples-for-students.js';?>"></script>
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
     <img id="header-message" src="/<?=$ds_micro;?>/sfs/drop-off.jpg"/>
      <?php // REMOVE THIS IF AND ENDIF ONCE THE NAVIGATION GOES LIVE ?>
      <?php if (drupal_get_path_alias(request_uri()) != '/staples-for-students'): ?>
      <div id="staples-nav">
      <?php
        $base = '/staples-for-students';
        $items = array(array('home', $base),
                       array('join the cast', $base.'/pretty-little-liars'),
                       array('run a drive', $base.'/run-a-drive'),
                       array('gallery', $base.'/gallery'),
                       array('testimonials', $base.'/testimonials'),
                       array('prizes', $base.'/prizes')
                      );
        foreach ($items as $i) {
          $currPath = drupal_get_path_alias(request_uri());
          $class = (strncmp($i[1], $currPath, strlen($currPath)) == 0) ? 'active' : '';
          printf('<a href="%s" class="%s">%s</a>', $i[1], $class, $i[0]);
        }
       ?>
      </div>
      <?php endif; ?>
      <div id="content" class="column"><div class="section">

        <?php print $highlight; ?>

        <?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>

        <?php print $help; ?>

        <?php print $content_top; ?>

        <div id="content-area">

    <div id="staples">


     <a href="/staples-for-students"><img id="sfs-logo" src="/<?=$ds_micro;?>/sfs/logo-sfs.png" /></a>
      <?php print $messages; ?>
