<div class="node <?=$node->type ?>">
<div class="border2 photos first blue-trans relative">
<img class="header" src="/nd/att/photos-slant.png">
<div class="textbox2">

<?

$view = views_get_view('att_scholarship');
if ($view) {
  $view->is_cacheable = 0;
  $view->filter[2]['value'] = $_GET['filter0'];
  $view->exposed_filter[0]['value'] = $_GET['filter0'];

  print $view->preview('page');
}

?>

<div style="clear:both"></div>

</div>
</div>

  <div id="att-contact">
    <a target="_blank" href="http://www.att.com"><img id="presented" src='/nd/att/check-out-att.png'/></a>
    <br/>
    <a target="_blank" href="http://www.facebook.com/att"><img class="media first" src="/nd/att/facebook-small.png"/></a>
    <a target="_blank" href="http://www.twitter.com/att"><img class="media" src="/nd/att/twitter-small.png"/></a>
    <a target="_blank" href="http://www.youtube.com/shareatt"><img class="media" src="/nd/att/youtube-small.png"/></a>
  </div>
</div>
