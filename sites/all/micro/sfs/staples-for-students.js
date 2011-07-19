Shadowbox.init({skipSetup:true, enableKeys:false, handleOversize: "none"});
$(document).ready(function () {
  prizeInit();
  galleryInit();
  hashInit();
  pllInit();
  girlInit();
});

function loadImage() {
    var loader = $('#current-image');
    loader.html('<img src="/sites/all/themes/dosomething/images/ajax-loader.gif" />');
    
    hash = location.hash.substring(1);
    img_src = '/files/'+hash;
    img = new Image();
    
    $(img).load(function () {
      loader.html(this);
      loader.removeAttr('src').removeAttr('onload');
      $(this).show();
      $('#image-title').html(galleryImages[hash]['title']);
      $('#image-description').html(galleryImages[hash]['description']);
      loader.animate({height: galleryImages[hash]['height']+'px'});
    }).attr('src', img_src);
}

function girlInit() {
  hash = location.hash.substring(1);
  if (hash == 'popup') {
    $(window).load(function () {
      girl_popup(true);
    });
  }
}

function girl_popup(donated) {
  if ($('#share-reason-form #edit-title-wrapper').children().length < 2)
  {
    newDiv = document.createElement('div');
    $(newDiv).css('font-size', '.8em')
    .css('letter-spacing', '-1px')
    .css('width', '150px')
    .html('<strong>Don\'t keep it a secret!</strong><br />Share your reason for helping kids in need.');
    $('#share-reason-form #edit-title-wrapper').append(newDiv);
  }
  if (donated)
  {
    $('#img-donated').show();
    $('#img-no-donated').hide();
  }
  else
  {
    $('#img-donated').hide();
    $('#img-no-donated').show();
  }
  Shadowbox.open({
    content:        $('#share-reason-form').html(),
    player:         "html",
    width:          450,
    height:         450,
    title:          $('#sb-hidden-title').html()
  });
  return false;
}

function pllInit() {
  $('.why-you-care-quote.visible').css('display', 'block');
  $('#pll-stickies img').not('#pll-hovers img').mouseenter(function () {
    // mousein
    $('#pll-hovers img').hide();
    var idx = $('#pll-stickies img').index(this);
    $('#pll-hovers img').eq(idx).show();
  });
  $('#pll-hovers img').mouseleave(function () {
    // mouseout
    $('#pll-hovers img').hide();
  });
  $('#share-your-reason').click(function () {
    Shadowbox.open({
        content:        $('#share-reason-form').html(),
        player:         "html",
        width:          450,
        height:         450
    });
    return false;
  });
  
  var gStickies = ['http://www.dosomething.org/sites/all/micro/sfs/sticky-ashley-sm.png',
                   'http://www.dosomething.org/sites/all/micro/sfs/sticky-lucy-sm.png',
                   'http://www.dosomething.org/sites/all/micro/sfs/sticky-troian-sm.png',
                   'http://www.dosomething.org/sites/all/micro/sfs/sticky-shay-sm.png'
                  ];
  var cache = [];
  for (var i = gStickies.length; i--;) {
    var ci = document.createElement('img');
    ci.src = gStickies[i];
    cache.push(ci);
  }
  $('#sticky-changer-g').click(function () {
    var current = $(this).parent().css('background-image');
    var pattern = /http:(.*)png/i;
    current = current.match(pattern)[0];
    loc = $.inArray(current, gStickies);
    loc = (loc == gStickies.length-1) ? 0 : loc+1;
    $(this).parent().css('background-image', 'url('+gStickies[loc]+')');
    return false;
  });
}
function hashInit() {
  var hash = location.hash.substring(1);
  if (hash == 'confirm') {
    $(window).load(function () {
      Shadowbox.open({
          content:    "Thanks! We got your submission. You're now entered to win one of our awesome campaign giveaways.",
          player:     "html",
          height:     200,
          width:      200
      })
    });
  }
  else if (hash.substr(0, 6) == "quote=")
  {
    var quoteData = hash.substring(6).split('|');
    quote = quoteData[0];
    name_f = quoteData[1];
    name_l = quoteData[2].substr(0, 1) + '.';
    state = quoteData[3];
    var att = '';
    if (name_f != '')
      att = name_f;
    if (name_f != '' && name_l != '')
      att += ' ' + name_l + '.';
    if (name_f != '' && state != '')
      att += ', ';
    if (state != '')
      att += state;
    $(window).load(function () {
      Shadowbox.open({
          content:    '<img src="/sites/all/micro/sfs/popup-confirm.png" alt="Thanks!" />'
                      + '<br /><div class="custom-sticky">"'
                      + quote + '"<br />- ' + att + '</div><div style="text-align:center;margin-top:10px;">Spread the word!<br />Post your reason on Facebook.</div>'
                      + fbLink(),
          player:     "html",
          height:     450,
          width:      450,
          title:      $('#sb-hidden-title').html()
      });
    });
  }
}

function fbLink()
{
  baseU = 'http://dosomething.org/staples-for-students';
  u = location.href.split('/');
  tester = u[u.length-2];
  if (tester == 'pretty-little-liar')
  {
    u = '?girl='+u[u.length-1];
    u = u.split('#');
    u = u[0];
  }
  else u = '';
  u = baseU+u;
  var str = '<a id="fb-link" onclick="return fbPopup(\''+u+'\');" target="_blank" rel="nofollow" href="http://www.facebook.com/share.php?u='+u+'"></a>';
  return str;
}

function fbPopup(u)
{
  window.open('http://www.facebook.com/sharer.php?u='+u,'sharer','toolbar=0,status=0,width=626,height=436');
  return false;
}

function prizeInit() {
  var yfeVal = "your friends' email";
  $('#webform-component-your-friends-emails input')
    .val(yfeVal)
    .css('color', '#aaa')
    .focus(function () {
      if ($(this).val() == yfeVal) $(this).val('');
      $(this).css('color', '#000');
    })
    .blur(function () {
      if ($(this).val() == '') {
        $(this).val(yfeVal);
        $(this).css('color', '#aaa');
      }
    });
    
    $('#webform-client-form-650078').submit(function () {
      $(this).find('input').each(function () {
        if ($(this).val() == yfeVal) $(this).val('');
      });
    });
}

function galleryInit() {
  $('.gallery-image').click(function () {
    window.location.hash = $(this).attr('href');
    $('html,body').animate({
      scrollTop: $('#image-title').offset().top
    });
    $('.gallery-image').removeClass('active-image');
    $(this).addClass('active-image');
    loadImage();
    return false;
  });
  
  $('#gallery-next img').click(function () {
    var current = $('.gallery-page:visible');
    current.fadeOut();
    if (current.next().length != 0) {
      current.next().fadeIn();
    }
    else {
      current.parent().children(':first-child').fadeIn();
    }
  });
  
  $('#gallery-back img').click(function () {
    var current = $('.gallery-page:visible');
    current.fadeOut();
    if (current.prev().length != 0) {
      current.prev().fadeIn();
    }
    else {
      current.parent().children(':last-child').fadeIn();
    }
  });
  
  $('.gallery-page').not('#gallery-page-0').hide();
  
  $('#gallery-page-0 a:first-child').addClass('active-image');
}

function flipQuote() {
    var current = $('.why-you-care-quote.visible');
    current.fadeOut(function () {
      current.removeClass('visible');
      var next;
      if (current.next().is('div'))
        next = current.next();
      else
        next = current.parent().children(':first-child');
      next.fadeIn().addClass('visible');
    });
  return false;
}

function dsLog(item) {
  if (window.console)
    console.log(item);
}