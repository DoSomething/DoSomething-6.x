<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">
<?
global $user;
$current_path = preg_replace('/^\//', '', drupal_get_path_alias(request_uri()));
$last_path_item = preg_replace('/[?#].*/','',
                    array_pop(explode('/', $current_path)));

$url = 'http://www.dosomething.org/green-your-school'; ?>

<head>
<meta property="og:image" content="http://www.dosomething.org/nd/iyg-2011/logo.png" />
<meta property="og:site_name" content="DoSomething.org"/>
<? if (preg_match('|^green-your-school/browse-schools|',$current_path)) {?>
<meta property="og:description" content="Did you know the average American produces 20 tons of CO2 per year? I'm Doing Something about it by greening my school through HP and DoSomething.org's Green Your School Challenge campaign. Check out my project and register your school to participate."/>
<? } else {?>
<meta property="og:description" content="Green your school this spring and you could win great prizes from HP and DoSomething.org!"/>
<? } ?>
  <title><?php
 $name = $_GET['name'];
 $title = $head_title;
 if (preg_match('|^green-your-school/browse-schools|',$current_path) && $name) {
   $title = $name . ' | '.str_replace('Browse Schools | ', '', $title);
 }
 print $title;
?></title>
  <?php print $head; ?>
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/style.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/additional.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/block-editing.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/zen.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/drupal5-reference.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=path_to_theme().'/css/drupal5/tabs.css';?>" type="text/css" media="all" />
  <link rel="stylesheet" href="/<?=$ds_micro;?>/iyg-2011/iyg.css" type="text/css" media="all" />
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
<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
<![endif]-->
  <?php print $scripts; ?>
  <script type="text/javascript">
$(document).ready(function() {
  $('form#browse-schools select#gys-state').change(function() {document.location = '?state='+this.value;});

  /* seems to be breaking IE7, disabling for now
  var e = $('form#tellafriend-page input#edit-submit');
  if (e != undefined && e.length) {
    $(e).attr('id','edit-submit-tellafriend');
    document.getElementById('edit-submit-tellafriend').type = 'image';
    $('#edit-submit-tellafriend').attr('src','/nd/iyg-2011/send.png');
  }
  */

});

</script>

<script type="text/javascript"> 
function recordOutboundLink(link, category, action) {
  try {
    var pageTracker=_gat._getTracker("UA-493209-1");
    pageTracker._trackEvent(category, action);
    setTimeout('document.location = "' + link.href + '"', 100)
  }catch(err){}
}
</script> 


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
           <h1><a href="/"><img src="<?=$base_path.$subtheme_directory;?>/images/logo.png" width="197" height="156" alt="DoSomething.org" /></a></h1>
        <div class="col_left">
            <div id="primary">
				<!--Begin Primary Links-->
				<?=theme('primary_links');?>
				<!--End Primary Links-->

            </div>
        </div>
        <div class="col_right">
			<!--Begin Top Right Block Section-->
            <?=$top_right;?>
			<!--End Top Right Block Section-->
        </div>
        <a href='/green-your-school'>
        <img id="logo" src="/nd/iyg-2011/logo.png" alt="Green Your School Challenge" /></a>
        <div class="clear"></div>
    </div>

    <div id="container" class="iyg">
<div id="iyg-nav-top">
<a target="_blank" href='http://www.hp.com'><img src='/nd/iyg-2011/hp-side.png'/></a>
</div>
          <!--<div id="iyg-nav-top">
          <ul style="list-style:none;">
             <li class="tab1"><a href="/green-your-school#"></a></li>
             <li class="tab2"><a href="/green-your-school/coming-soon#"></a></li>
             <li class="tab3"><a href="/green-your-school/coming-soon#"></a></li>
             <li class="tab4"><a href="/green-your-school/coming-soon#"></a></li>
             <li class="tab5"><a href="/green-your-school/coming-soon#"></a></li>
          </ul>
          </div>-->
        <!-- begin main text -->
<?
 $myschool = '';
 $zip = '';
 $myschool_page = '';
 $onmyschoolpage = 0;
 if ($user->uid) {
   $row = db_fetch_array(db_query("select title, postal_code from node n inner join location_instance li on li.nid=n.nid and li.vid=n.vid inner join location l on l.lid=li.lid where n.type = 'gys_2011' and n.uid=%d", $user->uid));
   if ($row) {
     list($myschool, $zip) = array_values($row);
   }
   if ($myschool && $zip) {
     $myschool_page = '/green-your-school/browse-schools?name='.$myschool.'&zip='.$zip;
     if ('/'.urldecode($current_path)==$myschool_page) {
       $onmyschoolpage = 1;
     }
   }
 }
?>
        <div id="main" class="<?=$last_path_item;?>">
          <div id="iyg-sidebar" class="nav">
            <div id="triangle2">
              <div id="sidenav">
<?              if ($myschool_page) { ?>
                <a class="tab0 <? if ($onmyschoolpage) {print 'active';}?>" href="<?=$myschool_page;?>"></a>
<?              } ?>
                <a class="tab1 <? if (arg(1)==631375) {print 'active';}?>" href="/green-your-school/find-your-school"></a>
                <a class="tab2 <? if (! $onmyschoolpage && arg(1)==633277) {print 'active';}?>" href="/green-your-school/browse-schools"></a>
                <!--<a class="tab3 <? if ($current_path=='green-your-school/share') {print 'active';}?>" href="/green-your-school/share"></a>-->
                <a class="tab4 <? if (arg(1)==632730) {print 'active';}?>" href="/green-your-school/browse-ideas"></a>
                <a class="tab5 <? if (arg(1)==632815) {print 'active';}?>" href="/green-your-school/report-back"></a>
                <a class="tab6 <? if (arg(1)==633500) {print 'active';}?>" href="/green-your-school/free-stuff"></a>
             </div>
              <!--<a target="_blank" href="http://www.hp.com">
              <img class="triangle" src="/nd/iyg-2011/hp-triangle.png" style="bottom:0px;"/></a>-->
            </div>
        </div>
        <?php if ($messages): print $messages; endif; ?>
<div class="share right">
<a target="_blank" href="http://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=http%3A%2F%2Fwww.dosomething.org%2Fgreen-your-school&amp;template=Take+the+Green+Your+School+Challenge+and+win+great+prizes+from+%40hp_pc+and+%40DoSomething%21+%7B%7Burl%7D%7D+%23GreenYourSchool&amp;shortener=bitly&amp;username=dosomething">
<img src="/nd/iyg-2011/twitter.png" /></a>
<a target="_blank" href="http://facebook.com/sharer.php?u=<?=urlencode('http://www.dosomething.org/'.$current_path);?>">
<img src="/nd/iyg-2011/facebook.png"/></a>
<p><strong>share with a friend:</strong></p>
</div>

        
   <?php if(!$node && arg(0) != 'user'){
          $current_path = drupal_get_path_alias(request_uri());
          if ($current_path == '/green-your-school/share') {

          print '<h2 id="tellafriend-title">' . $title . '</h2>';
          } else {
            print '<h2>'.$title.'</h2>';
          }
         } ?>
        
        <?php if(($help)&&(arg(0)=='node')&&(arg(1)=='add')): print $help; endif;?>
			<?php print $content_top;?>
			<?php print $content; ?>
        			<?php print $content_bottom;?>
        </div>
        <!-- end main text -->
        <div id="iyg-nav-bottom" class="nav">

        <table id="Table_02" width="883" height="44" border="0" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
            <td>
              <a href="/emission" onClick="recordOutboundLink(this, 'Outbound Links', 'emission');return false;">
                <img id="bottomnav1" src="/nd/iyg-2011/bottomnav-tab1a.jpg" width="270" height="44" border="0" alt=""></a></td>
            <td><a href="/green-your-school/prizes">
              <img id="bottomnav2" src="/nd/iyg-2011/bottomnav-tab2a.jpg"></a></td>
            <td><a target="_blank" href="http://www.hpdirect.com/academy/dosomething">
              <img id="bottomnav3" src="/nd/iyg-2011/bottomnav-tab3.jpg" width="271" height="44" alt=""></a></td>
          </tr>
        </tbody>
        </table>
        </div>
        <div id="iyg-bottom">
           <div id="block1" class="block">
              <?php $title = 'Play eMission';
                 $description = 'eMission is a brand-new Facebook game from @DoSomething and the EPA\'s Energy Star program.';?>
             <a href='/emission' onClick="recordOutboundLink(this, 'Outbound Links', 'emission');return false;">
               <div class="title"><?=$title;?></div></a>
               <a class="emission" href="/emission" alt="eMission" onClick="recordOutboundLink(this, 'Outbound Links', 'emission');return false;"></a>
               <? $twitter_description = $title . '! '.substr($description,0,81).' http://dsorg.us/eMission #GreenYourSchool';?>
             <p class="description"><?=$description;?></p>
              <a href='/campaigns#emission'>
              <img class="more" src="/nd/iyg-2011/find-out-more.png" /></a>
             <div class="share right">
               <a target="_blank" href="http://twitter.com/home?status=<?=urlencode($twitter_description);?>">
               <img src="/nd/iyg-2011/twitter.png" /></a>
               <a target="_blank" href="http://facebook.com/sharer.php?u=http://www.dosomething.org/emission">
               <img src="/nd/iyg-2011/facebook.png"/></a>
                <p><strong>share this game:</strong></p>
              </div>
             <div style="clear:both"></div>
           </div>
           <div id="block2" class="block">
              <a href="/green-your-school/prizes">
                <div class="title">Laptops &amp; Scholarships</div>
                <img class="main" src="/nd/iyg-2011/hp_pavilion_dm1.png" />
                <img class="main2" src="/nd/iyg-2011/5000-diag.gif" />
              </a>
              <p class="description"><a href='/green-your-school/prizes'>Learn</a> exactly how to win great prizes like a $1000 college scholarship and HP computers.</p>
              <a href='/green-your-school/prizes'><img class="more" src="/nd/iyg-2011/find-out-more.png" /></a>
              <div class="share right">
              <a target="_blank" href="http://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=http%3A%2F%2Fwww.dosomething.org%2Fgreen-your-school&amp;template=Take+the+Green+Your+School+Challenge+and+win+great+prizes+from+%40hp_pc+and+%40DoSomething%21+%7B%7Burl%7D%7D+%23GreenYourSchool&amp;shortener=bitly&amp;username=dosomething">
              <img src="/nd/iyg-2011/twitter.png" /></a>
              <a target="_blank" href="http://facebook.com/sharer.php?u=http://www.dosomething.org/green-your-school/prizes">
              <img src="/nd/iyg-2011/facebook.png"/></a>
              <p><strong>share the prizes:</strong></p>
              </div>
           </div>
           <div id="block3" class="block">
              <a href="http://www.hpdirect.com/academy/dosomething" target="_blank">
              <div class="title">Deals from HP</div>
              <img class="main" src="/nd/iyg-2011/hpdeali.png"/>
              </a>
              <p class="description">Check out awesome deals on HP products at the Academy Store with this exclusive student discount.</p>
              <a href="http://www.hpdirect.com/academy/dosomething" target="_blank">
              <img class="more" src="/nd/iyg-2011/find-out-more.png" />
              </a>
             <div class="share right">
               <a target="_blank" href="http://twitter.com">
               <img src="/nd/iyg-2011/twitter.png" /></a>
               <a target="_blank" href="http://facebook.com/sharer.php?u=http://www.hpdirect.com/academy/dosomething">
               <img src="/nd/iyg-2011/facebook.png"/></a>
                <p><strong>share this deal:</strong></p>
              </div>
             <div style="clear:both"></div>
           </div>
        </div>

<?php if ($closure_region) { ?>
		<?=$closure_region;?>
<?php } ?>
	</div>
        <?php print $tabs;?>
        <div class="clear"></div>
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
