Shadowbox.init();
$(document).ready(function () {
    galleryInit();
    $('#block-block-300 #edit-submit').hide();
    $('#signup-next-page').click(function () {
        $('#signup-page-1').animate({left: '-860px'});
        $('#signup-page-2').animate({left: '0'});
        $('#block-block-300 #edit-submit').fadeIn();
        $('#signup-next-page').fadeOut();
    });
    $('#signup-back').click(function () {
        $('#signup-page-1').animate({left: '0'});
        $('#signup-page-2').animate({left: '860px'});
        $('#block-block-300 #edit-submit').fadeOut();
        $('#signup-next-page').fadeIn();
        return false;
    });
    
    $('.what-is-link').click(function () {
        Shadowbox.open({
            content: $('#what-is-ewaste-popup').html(),
            player: 'html',
            height: 575,
            width: 700
        });
        return false;
    });
    $('.drive-steps-link').click(function () {
        Shadowbox.open({
            content: $('#drive-steps-popup').html(),
            player: 'html',
            height: 575,
            width: 700
        });
        return false;
    });
});


function loadImage() {
    var loader = $('#current-image');
    loader.html('<img src="/sites/all/themes/dosomething/images/ajax-loader.gif" />');
    
    hash = location.hash.substring(1);
    img_src = hash;
    img = new Image();
    
    $(img).load(function () {
      loader.html(this);
      loader.removeAttr('src').removeAttr('onload');
      $(this).show();
      $('#image-title').html(galleryImages[hash]['title']);
      $('#image-description').html(galleryImages[hash]['description']);
      //loader.animate({height: galleryImages[hash]['height']+'px'});
    }).attr('src', img_src);
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

function pledge() {
    window.open('http://www.energystar.gov/index.cfm?fuseaction=globalwarming.showPledge&iFrame=1&cpd_id=22572', 'pledge', 'status=1,scrollbars=0,width=600,height=600');
    return false;
}