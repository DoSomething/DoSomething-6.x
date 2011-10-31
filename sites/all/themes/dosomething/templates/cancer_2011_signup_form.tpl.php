<?php
//print_r($form);
//  dpm($form);
  $form['buttons']['submit']['#value'] = 'submit';
//   $form['field_campaign_address'][0]['#default_value']= "123";
  //  $form['field_campaign_city']['#value'] = '456';
//   drupal_add_js('nd/campaigns/spit/try.js');
  //$form['buttons']['submit']['#attributes'] = array('class' => 'button button-medium shadow rounded');
  /*
  unset($form['field_sfs_subscriptions']['value']['#title']);
*/

/*

 if ($_GET['org']) {
//url
  $email = $_GET['email'];
  $type = $_GET['type'];
   $form['field_org_or_part']['#value']['value']="organizer";
//$form['field_campaign_email'][0]['value']['#required'] = 0;
//print stuff
    print drupal_render($form['field_campaign_address']);
    print drupal_render($form['field_campaign_city']);
    print drupal_render($form['field_campaign_state']);
    print drupal_render($form['field_campaign_zip']);
    print drupal_render($form['field_cancer_existing_drive_']);
    print drupal_render($form['field_cancer_drive_date']);
    print drupal_render($form['field_cancer_location']);
    print drupal_render($form['field_cancer_alternate_location']);
    print drupal_render($form['group_greek_info']);
    print drupal_render($form['field_cancer_frat_sor']);
     print drupal_render($form['field_org_or_part']);

  }
  else
  {
     print drupal_render($form['field_org_or_part']);
i  }
*/
print "<div class='schoolnamehelptext'>Make sure you enter the details below to receive the material for running your drive. <br/>Click your college name from the drop down list. Select Other if you can't find your school</div>";
print drupal_render($form['title']);
print '<div class="suggestionsBox" id="suggestions" style="display: none;">
          
        <div class="suggestionList" id="autoSuggestionsList">
          &nbsp;
        </div>
      </div>';
	print drupal_render($form['group_mailing_address']);
   print drupal_render($form['field_campaign_address']);
   print drupal_render($form['field_campaign_city']);
   print drupal_render($form['field_campaign_state']);
   print drupal_render($form['field_campaign_zip']);
   print drupal_render($form['field_cancer_existing_drive_']);
   print drupal_render($form['field_cancer_drive_date']);
   print drupal_render($form['field_cancer_drive_time1']);
   print drupal_render($form['field_cancer_location']);
     print drupal_render($form['field_cancer_alternate_location']);
       print drupal_render($form['group_greek_info']);
         print drupal_render($form['field_cancer_frat_sor']);


//  print drupal_render($form['field_campaign_school']);
//  print drupal_render($form['field_campaign_email']);
//  print drupal_render($form['field_campaign_phone']);

  //print drupal_render($form['field_org_or_part']);

  /*
  print drupal_render($form['field_sfs_subscriptions']);
  print drupal_render($form['field_sfs_terms']);
  */
print drupal_render($form['buttons']['submit']);


 if ($_GET['org']) {
       drupal_set_message('Welcome to the Scavenger Hunt!  Sign up with your team on the right side of this page.');
         //print drupal_render($form);
 }//end of if
// else
// {

 ?>

<div style="display:none">
  <?php print drupal_render($form);?>
</div>
<?php
//}
?>

