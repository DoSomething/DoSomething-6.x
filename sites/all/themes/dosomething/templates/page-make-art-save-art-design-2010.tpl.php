<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<head>
  <title><?php print $head_title; ?></title>
  <link rel="image_src" href="http://www.dosomething.org/files/imagecache/hp_art_gallery_mini/<?=$node->field_hp_art_design[0]['filepath'];?>" />
  <meta property="og:title" content="Make Art. Save Art."/>
  <meta property="og:type" content="non_profit"/>
  <meta property="og:url" content="http://www.dosomething.org/<?=drupal_lookup_path('alias', 'node/'.$node->nid);?>" />
  <meta property="og:image" content="http://www.dosomething.org/files/imagecache/hp_art_gallery_mini/<?=$node->field_hp_art_design[0]['filepath'];?>" />
  <meta property="og:site_name" content="Make Art. Save Art."/>
  <meta property="og:description" content="This design, <?=$node->title?>, shows why art is a crucial for a complete education. I joined &ldquo;Make Art. Save Art.&rdquo; because art education keeps me creative and excited about going to school! Support art and help this artist win an HP Pavilion dv6z laptop with AMD Vision technology by sharing their design with your friends too."/>
  <?php print $head; ?>
  <link rel="stylesheet" href="/nd/hp_art/hp_art.css" type="text/css" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/style.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/additional.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/block-editing.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/zen.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/drupal5-reference.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/tabs.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/nd/hp_art/hp_art.css" type="text/css" />
  <link rel="stylesheet" href="/nd/hp_art/gallery.css" type="text/css" />
 
  <!--[if IE]>
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/fixes_msie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory ?>/fixes_msie.css" type="text/css">
    <?php endif; ?>
  <![endif]-->
  <!--[if lte IE 6]>
  	<?php if ($subtheme_directory && file_exists($subtheme_directory .'/fixes_msie6.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory ?>/fixes_msie6.css" type="text/css">
  	<?php endif; ?>
  <![endif]-->
 <?php print $scripts; ?>
  <script type="text/javascript" src="/sites/all/micro/dsu/jquery.cycle.lite.1.0.min.js"></script>
  <script type="text/javascript">$(function() { $('#slides').cycle(); });</script>
</head>

<body>
<div id="wrapper">
    <div id="header">
           <h1><a href="/"><img src="<?=$base_path.$subtheme_directory;?>/images/logo.png" width="197" height="156" alt="DoSomething.org" /></a></h1>
        <div class="col_left">
            <div id="primary">
				<!--Begin Primary Links-->
				<?=theme('primary_links');?>
				<!--End Primary Links-->

            </div>
        </div>
<?php if ($top_right) { ?>
        <div class="col_right">
			<!--Begin Top Right Block Section-->
			<?=$top_right;?>
			<!--End Top Right Block Section-->
        </div>
<?php } ?>
        <div class="col_top">DoSomething.org, HP and AMD know that art is critical to a complete education. Art programs are being cut nationwide. We know you're passionate about keeping art in schools. Show us. <strong>Make Art. Save Art.</strong></div>
        <div class="clear"></div>
    </div>

    <div id="container">

        <div id="nav">
          <ul>
            <li class="home"> <a href="/make-art-save-art">Home</a> </li>
            <li class="art-ed"> <a href="/make-art-save-art/art-ed">Art Ed</a> </li>
            <li class="submit"> <a href="/make-art-save-art/submit">Submit</a> </li>
            <li class="gallery"> <a href="/make-art-save-art/gallery">Gallery</a> </li>
        </div>
        <!-- begin main text -->
        <div id="main" >
        
				<?php if ($messages): print $messages; endif; ?>
        
		   
        <?php if(!$node && arg(0) != 'user'){ print '<h2>' . $title . '</h2>'; }?>
        
        <?php if(($help)&&(arg(0)=='node')&&(arg(1)=='add')): print $help; endif;?>
			<?php print $content_top;?>
			<?php print $content; ?>
      <?php print $content_bottom;?>

      <div id="sharing">

        <h2><img class="share-this" src="/nd/hp_art/header_share_this.png" alt="Share This Design"></h2>

        <p>Is this your favorite &ldquo;Make Art. Save Art.&rdquo; design? Share it with your social networks and the artist's representative to show that you support arts education in schools.</p>
        <p>The design with the most &ldquo;shares&rdquo; will win $5000 for their school art program, a $1000 college scholarship, and an HP db6z laptop with AMD VISION technology. 4 other top designs will win laptops to power their creativity!</p>

          <h3>Share this with your friends on Facebook</h3>

        <div>
          <a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
          <span style="padding-right: 15px;"></span>
          <a href="http://twitter.com/share" class="twitter-share-button" data-text="Support art in schools & help artists win an @hp_pc w/ @AMD_Unprocessed. Share 'Make Art. Save Art.' designs. #SaveArt" data-count="vertical">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        </div>

        <div style="clear: both;"></div>

      </div> <!-- sharing -->

      <?php if (user_access('administer grant applications') || user_access('administer nodes')) : ?>
        <div id="judging">
          <iframe src="http://spreadsheets.google.com/embeddedform?formkey=dHlkQXVmZVROWDBEeFN2MVBsVXJEUVE6MQ" width="700" height="978" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div>
      <?php endif; ?>


			<div style="clear:both;"></div>

<br />

					
					
					
        </div>
        <!-- end main text -->

        <div class="clear"></div>
	</div>
<?php print $tabs;?>
    <div id="footer">
		<!--Begin Footer-->
		<?=$footer_message;?>
		<!--End Footer-->
        <form action="" method="post" id="search"><p>
			<input type="hidden" name="form_token" id="edit-search-theme-form-form-token" value="<?=drupal_get_token('search_theme_form');?>"  />
			<input type="hidden" name="form_id" id="edit-search-theme-form" value="search_theme_form"  />
            <input type="text" id="qsearch" name="search_theme_form_keys" value="..." maxlength="" class="styled" onClick="if(this.value == '...') { this.value=''; } "/>
            <input type="image" src="<?=$base_path.$subtheme_directory;?>/images/form_submit_search_footer.png" name="op" value="Search" alt="search" class="submit" />
        </form>
    </div>
</div>

<?php print $closure;?>

<!-- Start Quantcast tag -->
<script type="text/javascript">
_qoptions={ qacct:"p-37AYE1veo7k5c" };
</script>
<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>
<noscript>
<img src="http://pixel.quantserve.com/pixel/p-37AYE1veo7k5c.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
</noscript>
<!-- End Quantcast tag -->

</body>
</html>
