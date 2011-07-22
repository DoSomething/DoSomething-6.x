var emailShown = 0;
$(document).ready(function(){
  $('form#ididthis-form input#edit-email').parent().hide();
});

function ididthis_checkEmail() {
  if (emailShown == 0) {
    emailShown = 1;
    $('form#ididthis-form input#edit-email').parent().show('slow');
    return false;
  }
}