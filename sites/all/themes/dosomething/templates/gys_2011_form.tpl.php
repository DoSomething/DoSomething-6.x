<?php
include('/var/www/html/nd/school/finder.inc');

global $user;
/*
if (user_access('administer nodes') || $user->uid == 466855) {
  drupal_set_message('<pre>'.print_r($form['locations'],TRUE).'</pre>');
}
*/

function first_signup_text($school_name) {
  $school_wording = '';
  if ($school_name) {
    $school_wording = '<a>'.$school_name.'</a>';
  } else {
    $school_wording = 'your school';
  }
  return "<p id='pagenav'>Find Your School &gt; <a>Register Your School</a></p>
          <img src='/nd/iyg-2011/register-your-school.png'/>
          <p>You're the first person from $school_wording, so you get to officially register your school.  Once you submit the following info, you can start posting your awesome green projects.</p>";
}


$enroll = $_GET['enroll'];
$gsid = $_GET['gsid'];
$state = $_GET['state'];
$name = $_GET['name'];
$user_zip = $_GET['zip'];
$zip;

if (isset($gsid) && isset($state)) {
  $form['field_great_schools_id'][0]['value']['#value'] = $gsid;
  $form['locations'][0]['province']['#value'] = $state;
  $profile = (array)schoolProfile($state,$gsid);
  if ($profile['name']) {
    $form['locations'][0]['city']['#value'] = $profile['city'];
    $form['locations'][0]['latitude']['#value'] = $profile['lat'];
    $form['locations'][0]['longitude']['#value'] = $profile['lon'];
    $form['title']['#value'] = $profile['name'];
    $name = $profile['name'];
    $address = $profile['address'];
    $addressParts = explode(',', $address);
    if (sizeof($addressParts) == 3) {
      $street = trim($addressParts[0]);
      $state_zip = preg_replace('/ +/', ' ', trim($addressParts[2]));
      list($junk, $zip) = explode(' ', $state_zip);
      if ($zip) {
         $form['locations'][0]['street']['#value'] = $street;
         $form['locations'][0]['postal_code']['#value'] = $zip;
      }
    }
  } else {
    //Unable to retrieve profile information
  }
}

if (isset($name)) {
  $form['title']['#value'] = $name;
}

if ($user_zip && ! isset($zip)) {
  $form['locations'][0]['postal_code']['#value'] = $user_zip;
}

?>

<div id="gys-signup-form">

  
<?php
  //print drupal_render($form['field_great_schools_id']);
  $button = 'enroll';
  $school_name;
  if ($name) {
    $first_signup = true;
    $final_zip = $form['locations'][0]['postal_code']['#value'];
    if ($final_zip) {
      $gsidOr='';
      $params = array($final_zip, $name);
      if (isset($gsid)) {
        $gsidOr=' OR field_great_schools_id_value = %d ';
        $params[] = $gsid;
      }
      $sql = "select title from node n inner join location_instance li on li.nid=n.nid and li.vid=n.vid inner join location l on l.lid=li.lid left join content_field_great_schools_id cfgsid on n.vid=cfgsid.vid and n.nid=cfgsid.nid where n.type='gys_2011' and l.postal_code='%s' and (n.title='%s' $gsidOr ) limit 1";
      $query = db_query($sql, $params);
      $row = db_fetch_object($query);
      if ($row) {
        $first_signup = false;
      }
    }
    if ($first_signup) {
      $button = 'register';
      print first_signup_text($name);
    } else {
      $button = 'enroll';
      ?>
      <p id='pagenav'>Find Your School &gt; <a>School Found</a></p>
      <img src='/nd/iyg-2011/school-found-almost-there.png'/>
      <?
        //CODE ADJUSTMENT 2011-02-23
        $newpath = 'green-your-school/browse-schools';
        $args = 'name='.$name.'&zip='.$form['locations'][0]['postal_code']['#value'];
        if (! $enroll) {
          drupal_set_message("Great, we found $name.  Click the enroll button below to enroll in your school.");
          drupal_goto($path = $newpath, $query = $args, $fragment = NULL, $http_response_code = 301);
        }
        //END CODE ADJUSTMENT 2011-02-23
      ?>
      <p>Great, we've found <a href="/green-your-school/browse-schools?name=<?=$name;?>&zip=<?=$form['locations'][0]['postal_code']['#value'];?>"><?=$name;?></a>. Now, we need to officially enroll you in your school's group, so that you can start posting your awesome green projects.</p>
 <?
 }
  } else {
    $button = 'register';
    print first_signup_text();
    print drupal_render($form['title']);
  }


  if ($zip) {
    //print '<br/><div class="formdata">'.$street.'<br/>'.$profile['city'].', '.$profile['state'].' '.$zip.'</div>';
  }

  print '<div class="textarea">'.drupal_render($form['body_filter']['body']).'</div>';

  if (! $zip) {
    print "<p>Fill in your school's location below (only zip is required)!</p>";
    print drupal_render($form['locations'][0]['street']);
    print drupal_render($form['locations'][0]['city']);
    print drupal_render($form['locations'][0]['province']);
    print drupal_render($form['locations'][0]['postal_code']);
  }

  if (user_access('administer nodes')) {
    print drupal_render($form['field_great_schools_id']);
  //  print drupal_render($form['locations'][0]['latitude']);
  //  print drupal_render($form['locations'][0]['longitude']);
  }

  print '<div class="'.$button.'">'.drupal_render($form['submit']).'</div>';
?>
  <br/>
  <p style="float: right;">Questions about this form?  Email <a href="mailto:green@dosomething.org">green@dosomething.org</a></p>
<div style="clear:both"></div>
</div>

<?php $form['preview']['#access'] = false; ?>

<div style="display:none">
  <?php print drupal_render($form);?>
</div>

<?php
if ($enroll) {
/* $newnode = new stdClass();
 $newnode->type = 'gys_2011';
 $newnode->name = $user->name;
 $newnode->locations = $form['locations'];*/
 $newnode = array('type' => 'gys_2011', 'name' => $user->name);

 $form_values = array('locations' => array( 0 =>  
                                       array(
                                         'street' => $form['locations'][0]['street']['#value'],
                                         'city' => $form['locations'][0]['city']['#value'],
                                         'province' => $form['locations'][0]['province']['#value'],
                                         'postal_code' => $form['locations'][0]['postal_code']['#value'],
                                         'latitude' => $form['locations'][0]['latitude']['#value'],
                                         'longitude' => $form['locations'][0]['longitude']['#value'],
                                       ),
                                     ),
                     'field_great_schools_id' => $form['field_great_schools_id'][0]['value']['#value'],
                     'title' => $form['title']['#value'],

                   );
 drupal_execute('gys_2011_node_form',$form_values,$newnode);
}
?>
