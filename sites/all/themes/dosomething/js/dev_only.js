$(document).ready(function() {
  $('#dev-notes-toggle').toggle( function() {
    $('#dev-notes-toggle').html('Hide Notes');
    $('#dev-notes-form-container').show();
    $('#dev-box > div:nth-child(2)').animate({
      width: 400
    });
  }, function() {
    $('#dev-notes-toggle').html('View/Add Notes');
    $('#dev-box > div:nth-child(2)').animate({
      width: 120
    });
    $('#dev-notes-form-container').hide();
  });
  return false;
});
