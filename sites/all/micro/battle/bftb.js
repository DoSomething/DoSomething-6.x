$(document).ready(function () { 
  $('#webform-component-enter-your-mailing-address-to-receive-sweet-swag').hide(); 
  $('#edit-submitted-action-kit-1').click(function () { 
	$('#webform-component-enter-your-mailing-address-to-receive-sweet-swag').slideToggle();
  });
 });

// login functionality
$(document).ready(function() {
// show:login box
    $('#login').click(function(){
    // CSS >> display:none; to current div
		$('#regbox').addClass('invisible');
        $('#logbox').removeClass('invisible');
		// CSS >> highlight current active tab
			$('a#login > h2').removeClass('inactive');
	        $('a#register > h2').addClass('inactive');
	return false
    });

// show:register box
    $('#register').click(function(){
    // CSS >> display:none; to current div
	  	$('#logbox').addClass('invisible');
		$('#regbox').removeClass('invisible');
		// CSS >> highlight current active tab
			$('a#register > h2').removeClass('inactive');
			$('a#login > h2').addClass('inactive');
	return false
	});
});