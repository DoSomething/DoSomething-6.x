/*$(document).ready( function() {
  $('div.live-profile .field').show();
  $('div.live-profile div.profile-value').hide();
  $('div.live-profile div.no-javascript-info').hide();
});*/

function updateProfile(theForm) {
    var returnVal=true;
    var errorString='';
    $(theForm).find('div.live-profile .field').each( function() {
      var field = $(this).attr('id');
      var new_value = $(this).val();
      var path = '/live_profile_v2_router/' + field + 'ASjfMA2319M' + encodeURIComponent(new_value);
      $.ajax({
          cache: 'false',
          url: path,
          dataType: 'json',
          async: false,
          success: function(data) {
            if (data.success != true) {
              returnVal = false;
              errorString = errorString + (data.msg) + "\n";
            } else if (returnVal != false) {
              returnVal=true;
            }
          },
          error: function(data) {
            returnVal = false;
          }
      });
    });
    if (returnVal == false) {
      alert(errorString);
    }
    return returnVal;
}
