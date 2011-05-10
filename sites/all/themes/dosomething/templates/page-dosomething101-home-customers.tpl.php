<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/style.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/additional.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/block-editing.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/zen.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/drupal5-reference.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/tabs.css';?>" type="text/css" media="all" />
  <!--[if lte IE 7]>
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/fixes_msie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory ?>/fixes_msie.css" type="text/css">
    <?php endif; ?>
    <link rel="stylesheet" href="/nd/ds101-2010/ds101-ie7.css" type="text/css">
  <![endif]-->
  <!--[if lte IE 6]>
    <?php if ($subtheme_directory && file_exists($subtheme_directory .'/fixes_msie.css')): ?>
      <link rel="stylesheet" href="<?php print $base_path . $subtheme_directory ?>/fixes_msie6.css" type="text/css">
    <?php endif; ?>
  <![endif]-->
  <!--[if lte IE 7]>
  <script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script>
  <![endif]-->
  <link rel="stylesheet" href="/nd/ds101-2010/ds101.css" type="text/css" />
  <link rel="stylesheet" href="/nd/ds101-2010/flexcroll.css" type="text/css" />
  <!--[if IE 6]>
  <link rel="stylesheet" href="/nd/ds101-2010/ds101-ie6.css" type="text/css">
  <![endif]-->
  <?php print $scripts; ?>
  <script type='text/javascript' src="/nd/ds101-2010/flexcroll.js"></script>
  <link rel="image_src" href="http://www.dosomething.org/nd/ds101-2010/logo_fb.png" />
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
    <div class="clear"></div>
  </div> <!-- end header -->


  <div id="container">
    <div id="DS101Header">
      <a id="DS101Logo" href="/dosomething101/home">DoSomething 101</a>
        <a id="DS101FB" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.dosomething101.org&t=Do%20Something%20101">Facebook</a>
      <a id="DS101Twitter" href="http://twitter.com/home?status=I'm+starting+a+Do+Something+101+school+supply+drive+to+help+teens+in+need-+so+should+you!+Check+out+http://DoSomething101.org+for+more+info!">Twitter</a>
      <a id="DS101SchoolSupplies" href="/products">Do Something Products</a>
      <a id="DS101SchoolSupplies2" href="/products">Do Something Products</a>
      <div id="DS101Nav">
        <ul>
          <li><a class="home<?php if (arg(1) == '398014') { print ' active'; } ?>" href="/dosomething101/home">Home</a></li>
          <li><a class="drop<?php if (arg(1) == '407314') { print ' active'; } ?>" href="/dosomething101/drop-off">Drop Off</a></li>
          <li><a class="drive<?php if (arg(1) == '407318') { print ' active'; } ?>" href="/dosomething101/drive">Run a Drive</a></li>
          <li><a class="photos<?php if (arg(1) == '559561') { print ' active'; } ?>" href="/dosomething101/photos">Photos</a></li>
          <li><a class="last<?php if (arg(1) == '559547') { print ' active'; } ?>" href="/dosomething101/2009">2009 Campaign</a></li>
        </ul>
      </div> <!-- DS101Nav -->
    </div> <!-- DS101Header -->
    <div id="DS101Main">
      <div class="flexcroll main">
        <?php print $content_top;?>
        <?php print $content; ?>
        <?php print $content_bottom;?>
        <div style="clear: both;"></div>
      </div>
    </div> <!-- DS101Main -->
    <div id="DS101PSA">
      <p style="margin-bottom: 9px;">Twilight's Nikki Reed is the new spokesperson<br />for the Do Something 101 campaign. Check out her new Do Something 101 PSA below.</p>
      <div>
        <object width="270" height="175"><param name="movie" value="http://www.youtube.com/v/unbpdbX3f1U&hl=en_US&fs=1&"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/unbpdbX3f1U&hl=en_US&fs=1&" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="270" height="175"></embed></object>
      </div>
    </div> <!-- DS101PSA -->
    <div id="DS101Supplies">
      <p>Check out the line of Do Something<br/>School Supplies at Staples!</p>
    </div> <!-- DS101Supplies -->
    <div id="DS101StaplesText">
      <img alt="Bring donations to any Staples store" src="/nd/ds101-2010/staples_text.png" />
    </div> <!-- DS101Staples -->
    <div id="DS101Staples">
      <a alt="Staples" href="http://www.staples.com" target="_blank"><img src="/nd/ds101-2010/staples.png" /></a>
    </div> <!-- DS101Staples -->
    <div id="DS101Footer">
      <ul>
        <li><a href="http://www.staplesgivebackpack.com" target="_blank">Check out our new Give-Back Pack site!</a></li>
        <li><a href="/dosomething101/faq">Got questions? Do Something 101 FAQ!</a></li>
        <li><a href="http://www.facebook.com/dosomething">Friend us on Facebook</a></li>
        <li><a href="/whatsyourthing/Poverty">You can Do Something about poverty!</a></li>
      </ul>
    </div> <!-- DS101Footer -->
    <div id="DS101Signup">
      <form method="post" action="http://org2.democracyinaction.org/dia/api/process.jsp" id="signup">
        <input type="text" id="email" name="Email" value="enter email" size="18" onclick="if (this.value == 'enter email') { this.value=''; }" onblur="if (this.value == '') { this.value='enter email'; }">
        <input type="image" src="/nd/ds101/go.png" name="go" value="Signup" alt="go" class="submit">
        <input type="hidden" name="table" value="supporter">
        <input type="hidden" name="organization_KEY" value="5216">
        <input type="hidden" name="link" value="groups">
        <input type="hidden" name="linkKey" value="92537">
        <input type="hidden" name="redirect" value="http://www.dosomething.org/dosomething101/email/thanks">
      </form>
    </div> <!-- DS101Signup -->
    <div id="Tabs">
      <?php if(user_access('administer nodes')) { print $tabs; } ?>
    </div>
    <div id="Messages">
				<?php if ($messages): print $messages; endif; ?>
    </div>
    <div id="Bottom">
        <a href="http://www.staplesgivebackpack.com" target="_blank"><img src="/nd/ds101-2010/staples_giveback_800x150_A.jpg" /></a>
    </div>
  </div> <!-- container -->



  <div id="footer">
    <?=$footer_message;?>
    <form action="" method="post" id="search">
      <p>
        <input type="hidden" name="form_token" id="edit-search-theme-form-form-token" value="<?=drupal_get_token('search_theme_form');?>"  />
        <input type="hidden" name="form_id" id="edit-search-theme-form" value="search_theme_form"  />
        <input type="text" id="qsearch" name="search_theme_form_keys" value="..." maxlength="" class="styled" onClick="if(this.value == '...') { this.value=''; } "/>
        <input type="image" src="<?=$base_path.$subtheme_directory;?>/images/form_submit_search_footer.png" name="op" value="Search" alt="search" class="submit" />
      </p>
    </form>
  </div> <!-- footer -->


</div> <!-- wrapper -->

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
