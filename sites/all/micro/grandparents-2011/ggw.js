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