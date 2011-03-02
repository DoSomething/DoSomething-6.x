// onload
$(document).ready(function() {

		// ordered list formatting
    $('.node > ol, .panel-pane .pane-content > ol, .content > ol, .content div.ididthis ol, div#ds101-drive ol, div#sombody ol').addClass('big-blue');
    $('.node > ol li, .panel-pane .pane-content > ol li, .content > ol li, .content div.ididthis ol li, div#ds101-drive ol li, div#sombody ol li').each(function(i,e)
    {
        $(e).before('<li><span class="not-so-big-blue">'+$(e).html()+'</span></li>').remove();
    });
});

/* IE6 background image flicker bug fix */
try {
  document.execCommand("BackgroundImageCache", false, true);
} catch(err) {}
