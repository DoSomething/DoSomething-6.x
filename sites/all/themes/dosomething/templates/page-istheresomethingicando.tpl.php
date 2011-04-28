<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
 
  <!--[if lte IE 7]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script>
    <script type="text/javascript" src="/nd/sicd/DD_roundies_0.0.2a-min.js"></script>
    <script type="text/javascript">
      DD_roundies.addRule('.block', '5px');
      DD_roundies.addRule('.iehack', '5px');
    </script>
  <![endif]-->
  <!--[if lte IE 6]>
  <![endif]-->

  <link rel="stylesheet" href="/nd/sicd/sicd.css" type="text/css" />
  <link rel="http://www.dosomething.org/files/sicd-icon.png" href="thumbnail_image" / >
  
</head>

<?php /* different classes allow for separate theming of the home page */ ?>
<?php

//Variables available to us:
/*
$body_classes
$search_box
$logo
$subtheme_directory
$base_path
$site_name
$site_slogan
$primary_links //needs theme('links',$primary_links);
$secondary_links //needs theme('links', $secondary_links);
$breadcrumb
$mission
$title
$tabs
$help
$messages
$content
$feed_icons
$footer_message
$closure
///////
$header //Header block region
$sidebar_right //Right sidebar region
$content_top //Content Top region
$content_bottom //Content Bottom region
$closure_region //Closure Region block
$top_right
*/
?>

<body>

<div id="wrapper">

    <div id="header">
      <div id="banner">
        <a href="/istheresomethingicando" class="sicd">sicd logo</a>
        <a href="http://www.dosomething.org/files/Peter_Buffett_PressRelease.pdf" class="readmore" target="_blank">middle block</a>
        <a href="http://www.dosomething.org/actnow" class="ds" title="Volunteer">ds logo</a>
      </div>
      <div id="nav">
        <ul class="iehack">
          <li><a href="/istheresomethingicando">Home</a></li>
          <li><a href="/istheresomethingicando/history">Our History</a></li>
          <li><a href="/istheresomethingicando/peter">News About Peter</a></li>
          <li ><a href="/istheresomethingicando/akon">News About Akon</a></li>
          <li class="last"><a href="/istheresomethingicando/music">Music</a></li>
        
        </ul>
      </div>
    </div> <!-- end #header -->

    <div id="container">
      <?php if ($messages): print $messages; endif; ?>
      <div id="sicd">
        <?php print $content_top;?>
        <?php print $content; ?>
        <?php print $content_bottom;?>
        <div style="clear: both;"></div>
      </div> <!-- end #sicd -->
      <?php print $tabs;?>
	  </div> <!-- end #container -->

    <div id="footer">
    </div> <!-- end #footer -->

</div> <!-- end #wrapper -->

<!-- Start Quantcast tag -->
<script type="text/javascript">
_qoptions={ qacct:"p-37AYE1veo7k5c" };
</script>
<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>
<noscript>
<img src="http://pixel.quantserve.com/pixel/p-37AYE1veo7k5c.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
</noscript>
<!-- End Quantcast tag -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-493209-1");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>
