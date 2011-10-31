$(document).ready(function(){
 $("#shadowbox-faq-button, #shadowbox-faq-box").click(function(){
    Shadowbox.open({
        content:    'http://www.dosomething.org/sites/all/micro/art-2011/faqs.html',
        player:     "iframe",
        height:     500,
        width:      500,
    });
  });
 $("#shadowbox-rules-button").click(function(){
    Shadowbox.open({
        content:    'http://www.dosomething.org/sites/all/micro/art-2011/rules.html',
        player:     "iframe",
        height:     500,
        width:      500,
    });	
  });
 $("iframe").each(function(){
   var ifr_source = $(this).attr('src');
   var wmode = "wmode=transparent";
   if(ifr_source.indexOf('?') != -1) {
   var getQString = ifr_source.split('?');
   var oldString = getQString[1];
   var newString = getQString[0];
 $(this).attr('src',newString+'?'+wmode+'&'+oldString);
}
  else $(this).attr('src',ifr_source+'?'+wmode);
  });  
});