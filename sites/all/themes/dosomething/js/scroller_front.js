$(document).ready(function() {
  $('#profiler-main').cycle({
    pause: true,
    pauseOnPagerHover: true,
    pager: '#profiler-thumbnails',
    pagerAnchorBuilder: function(idx, slide) { 
      return '#profiler-thumbnails div:eq(' + idx + ')';
    }
  });
  $('#sign-up a').click( function() {
    Shadowbox.open({
      content:    Drupal.logintoboggan_toggleboggan(),
      player:     "html",
      title:      "Welcome",
      height:     350,
      width:      350
    });
    return false;
  });
});
