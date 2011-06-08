Shadowbox.init({skipSetup:true});
$(document).ready(function () {
  prizeInit();
  galleryInit();
  hashInit();
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

function hashInit() {
  var hash = location.hash.substring(1);
  if (hash == 'confirm') {
    console.log(Shadowbox);
    $(window).load(function () {
      Shadowbox.open({
          content:    "Thanks! We got your submission. You're now entered to win one of our awesome campaign giveaways.",
          player:     "html",
          height:     200,
          width:      200
      })
    });
  }
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
}