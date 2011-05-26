$(document).ready(function() {
  var settings = {
    pause: true,
    pauseOnPagerHover: true,
    pager: '#profiler-thumbnails',
    pagerAnchorBuilder: function(idx, slide) { 
      return '#profiler-thumbnails div:eq(' + idx + ')';
    }
  };
  if ($.browser.msie) { // ie has weird text-popping with cleartype on
    settings.cleartype = false;
  }
  $('#profiler-main').cycle(settings);
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
  $('div.sponsor-logos .logo').not(':first-child').hide();
  $('div.sponsor-logos').cycle({
    containerResize: 0,
    pause: 1
  });
});
