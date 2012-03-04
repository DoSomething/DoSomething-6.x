$(document).ready(function () { 	
	$("#tooltip2 a").tooltip({ 
    	bodyHandler: function() { 
        	return $($(this).attr("href")).html(); 
    	}, 
    	showURL: false 
	});
});