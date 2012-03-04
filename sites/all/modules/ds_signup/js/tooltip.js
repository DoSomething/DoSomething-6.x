$(document).ready(function () { 	
	$("#blocktooltip").tooltip({ 
    	bodyHandler: function() { 
        	return $('#smsmessaging').html(); 
    	}, 
    	showURL: false 
	});
});