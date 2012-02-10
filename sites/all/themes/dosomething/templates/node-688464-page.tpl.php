<?php
global $user;
if (!in_array('administrator', array_values($user->roles))) {
  $remove = array(
    'webform-component-personal-information--mobile-number',
    'webform-component-personal-information--email',
    'webform-component-personal-information--school',
    'webform-component-personal-information--street-address',
    'webform-component-personal-information--street-address-2',
    'webform-component-personal-information--city',
    'webform-component-personal-information--state',
    'webform-component-personal-information--zip',
    'webform-component-personal-information--gender',
    'webform-component-personal-information--birthday',
  /*  'webform-component-recommendations--character--phone',
    'webform-component-recommendations--character--email',
    'webform-component-recommendations--athletic--phone',
    'webform-component-recommendations--athletic--email',
   */ );
  $emails = <<<EOM
<p>Immediately after you submit your application, we will email your recommenders below with a request to fill out an online recommendation form.  All recommendations must be submitted via this online system by January 9th at 5:00pm EST.  We strongly encourage you to submit your application early to give your recommenders plenty of time to respond.  </p>
<p>IMPORTANT: Before you submit the application, please double check to make sure you entered the correct info below so that the recommendation request gets to the right people!  You will not be able to edit the application after you hit submit.</p>
EOM;
foreach ($remove as $id) {
  $pos = strpos($content, $id)-61;
  $end = strpos($content, '</div><div', $pos)+6;;
  $content = substr($content, 0, $pos) . substr($content, $end, strlen($content));
}
  $page3 = strpos($content, '<h2 class="webform-page">Page 3</h2>');
  $page3end = strpos($content, '</fieldset>', $page3)+12;
  $page3end = strpos($content, '</fieldset>', $page3end)+12;
  $content = substr($content, 0, $page3) . substr($content, $page3end, strlen($content));
  $content = str_replace($emails, '', $content);
  $content = str_replace('Or upload a file:', '', $content);
  $content_bottom = nl2br($content_bottom);
  $content_bottom = preg_replace('/(Recommender ID(.*))|(Application SID(.*))/', '', $content_bottom);
  $content_bottom = str_replace('How has the student demonstrated great character on and off the field?', '<strong>How has the student demonstrated great character on and off the field? </strong>', $content_bottom);
  $content_bottom = str_replace('How has the student demonstrated great character on and off the field?', '<strong>How has the student demonstrated great character on and off the field?</strong>', $content_bottom);
}
  include_once('page-footlocker.tpl.php');
?>
<script>
var $scrollingDiv = $(".region-right");

$(window).scroll(function(){      
  var pos = $(window).scrollTop() - $('#webform-component-personal-information').offset().top;
  if ( pos < 0 ) pos = 0;
  else if (pos > $('#content-area .section').height() - $scrollingDiv.height()) pos = $scrollingDiv.css('margin-top');
  $scrollingDiv
  .stop()
  .animate({"marginTop": pos + "px"}, "slow" );      
});
</script>
