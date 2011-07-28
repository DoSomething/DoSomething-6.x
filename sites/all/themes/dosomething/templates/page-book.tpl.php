<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<head>
  <title><?php print $head_title; ?></title>
  <link rel="stylesheet" href="/nd/book/book.css" type="text/css" media="all" />
  <link rel="image_src" href="http://www.dosomething.org/nd/book/book_cover_tiny.jpg" />
  <meta property="og:image" content="http://www.dosomething.org/nd/book/book_cover_tiny.jpg" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-493209-1']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>

</head>

<body>

<div id="wrapper">
  <div id="header">
    <ul>
    <li><a <?=(arg(1)==586152)?"class='active' ":"";?>id="book" href="/book">About the Book</a></li>
      <li><a <?=(arg(1)==586189)?"class='active' ":"";?>id="tour-dates" href="/book/tour-dates">Tour Dates</a></li>
      <li><a <?=(arg(1)==586160)?"class='active' ":"";?>id="press" href="/book/press">Press</a></li>
      <li><a <?=(arg(1)==586190)?"class='active' ":"";?>id="kid-profiles" href="/book/kid-profiles">Kid Profiles</a></li>
      <li><a <?=(arg(1)==586155)?"class='active' ":"";?>id="bonus-resources" href="/book/bonus-resources">Bonus Resources</a></li>
    </ul>
    <div style="clear: both;"></div>
  </div> <!-- header -->
  <div style="clear: both;"></div>
  <div id="container">
    <div id="sidebar">
      <img alt="Buy the Book" src="/nd/book/buy_the_book.jpg" />
      <ul id="outlets">
        <li><a target="_blank" href="http://www.amazon.com/Do-Something-Handbook-Young-Activists/dp/0761157476"><img alt="Amazon" src="/nd/book/amazon.png" /></a></li>
        <li><a target="_blank" href="http://search.barnesandnoble.com/Do-Something-and-Change-the-World/Nancy-Lublin/e/9780761157472/?itm=10&USRI=activist+handbook"><img alt="Barnes and Noble" src="/nd/book/bandn.png" /></a></li>
        <li><a target="_blank" href="http://www.borders.com/online/store/TitleDetail?type=0&catalogId=10001&simple=1&defaultSearchView=List&keyword=Do+Something!:+A+Handbook+for+Young+Activists&LogData=[search:+19,parse:+139]&searchData={productId:null,sku:null,type:0,sort:null,currPage:1,resultsPerPage:25,simpleSearch:true,navigation:0,moreValue:null,coverView:false,url:rpp%3D25%26view%3D2%26all_search%3DDo%2BSomething%2521%253a%2BA%2BHandbook%2Bfor%2BYoung%2BActivists%26type%3D0%26nav%3D0%26simple%3Dtrue,terms:{all_search%3DDo+Something!:+A+Handbook+for+Young+Activists}}&storeId=13551&sku=0761157476&ddkey=http:SearchResults"><img target="_blank" alt="Borders" src="/nd/book/borders.png" /></a></li>
        <li><a target="_blank" href="http://www.indiebound.org/book/9780761157472"><img alt="Indie Bound" src="/nd/book/indie_bound.png" /></a></li>
        <li><a target="_blank" href="http://www.workman.com/products/9780761157472/"><img alt="Workman" src="/nd/book/workman.png" /></a></li>
      </ul>
      <img alt="Share" src="/nd/book/share.jpg" />
      <ul id="share">
      <li><a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.dosomething.org%2F<?=rawurlencode(drupal_lookup_path('alias', 'node/'.arg(1)));?>"><img src="/nd/book/facebook.jpg" alt="Facebook" /></a></li>
        <li><a href="http://twitter.com/home?status=Do%20something%20and%20change%20the%20world.%20Read%20how%2C%20in%20this%20fist-in-the-air%20book%20for%20every%20young%20activist%3A%20http%3A%2F%2Fbit.ly%2FbZ2CMk."><img src="/nd/book/twitter.jpg" alt="Twitter" /></a></li>
      </ul>
      <img class="jonas-quote" src="/nd/book/jonas_quote.png" alt="This book gives kids all the tools they need to change the world! --The Jonas Brothers (Change for the Children Foundation)" />
      <img alt="Powered By" src="/nd/book/powered_by.png" />
      <a href="/"><img alt="DoSomething.org" src="/nd/book/ds_logo.png" /></a>
    </div> <!-- sidebar -->
    <div id="main">
			<?php print $content_top;?>
			<?php print $content; ?>
    </div> <!-- main -->
    <div style="clear: both;"></div>
    <?php print $tabs;?>
	</div> <!-- container -->
</div> <!-- wrapper -->

<script type="text/javascript">
$(document).ready(function() {
  $("#guides span").next().hide();
  $("p.close").hide();
  $("#guides span").click(function() {
    if ($(this).next().is(":hidden")) {
      $(this).addClass('open');
      $(this).next().slideDown('fast');
      $(this).next().next().show();
    } else {
      $(this).removeClass('open');
      $(this).next().slideUp('fast');
      $(this).next().next().hide();
    }
  });
  $("#guides p.close").click(function() {
    $(this).prev().prev().removeClass('open');
    $(this).prev().slideUp('fast');
    $(this).hide();
  });
});
</script>

</body>
</html>
