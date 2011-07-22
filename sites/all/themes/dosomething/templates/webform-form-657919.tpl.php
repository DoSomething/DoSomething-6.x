<?php

echo drupal_render($form);

?>


<script type="text/javascript">
  $('#webform-component-next').nextAll('div').hide();
  $('#webform-component-next').click(function () {
    $(this).slideToggle();
    $(this).prevAll('div').slideToggle();
    $(this).nextAll('div').slideToggle();
    return false;
  });
</script>