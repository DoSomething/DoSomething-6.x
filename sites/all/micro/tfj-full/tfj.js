Drupal.behaviors.tfjGallery = function (context) {
  var imageDisplay = $('#photo-viewer');
  var first = $('.update-display:first-child');
  var newImg = $('<img />').attr('src', first.attr('href'));
  imageDisplay.html(newImg);

  $('.update-display').click(function (event) {
    var img = $(event.currentTarget).attr('href');
    var newImg = $('<img />').attr('src', img);
    imageDisplay.html(newImg);
    return false;
  });
};

$(document).ready(function () { 
  $('#webform-component-address-info').hide(); $('#edit-submitted-receive-tfj-banner-1').click(function () { $('#webform-component-address-info').slideToggle();}); 

  // FAQ
  $('#faq').click(function () {
    Shadowbox.open({
        content: $('#tfj-faq').html(),
        player: 'html',
        width: 1000,
        height: 900
    });
    return false;
  });
});
