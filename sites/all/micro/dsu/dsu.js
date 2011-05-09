$(document).ready(function() {

		// ordered list formatting
    $('#content ol').addClass('big-numbers');
    $('#content ol li').each(function(i,e) {
        $(e).before('<li><span class="not-big-numbers">'+$(e).html()+'</span></li>').remove();
    });

    // make forms more usable
    $('#search-box input').click( function() {
      $(this).attr('value', '');
    });

    // make search box work
    /*
    $('#header form').submit( function() {
      location.href = '/u/search/' + $('#search-box input').val();
      return false;
    });
    */

    //$('form div.description').hide();

});
