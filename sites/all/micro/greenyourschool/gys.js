// LONG FORM DROPDOWN FUNCTIONALTIY

$(document).ready(function () { 
  $('#webform-component-put-in-your-schools-mailing-address-to-receive-the-kit').hide(); 
  $('#edit-submitted-receive-gys-kit-1').click(function () { 
    $('#webform-component-put-in-your-schools-mailing-address-to-receive-the-kit').slideToggle();
  });
});

// PROJECT IDEAS DROPDOWN FUNCTIONALITY

$(document).ready(function() {
	$('#recycling').click(function () {
		$('#recycling-ideas').slideToggle();
	});
});

$(document).ready(function() {
	$('#energy-ideas').hide();
	$('#energy').click(function () {
		$('#energy-ideas').slideToggle();
	// $('#energy').click(function () {
	// 	$('#recycling-ideas, #bring-it-home-ideas, #other-ideas').hide();
	// 	$('#green-agriculture-ideas').slideToggle();
	});
});

$(document).ready(function() {
	$('#green-agriculture-ideas').hide();
	$('#green-agriculture').click(function () {
		$('#green-agriculture-ideas').slideToggle();
	});
});

$(document).ready(function() {
	$('#bring-it-home-ideas').hide();
	$('#bring-it-home').click(function () {
		$('#bring-it-home-ideas').slideToggle();
	});
});

$(document).ready(function() {
	$('#other-ideas').hide();
	$('#other').click(function () {
		$('#other-ideas').slideToggle();
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