<div class="node <?=$node->type ?>">
  <div class="node-gys">


<?php
global $user;
//drupal_set_message('uid is '.print_r($user,TRUE));

$state = $_GET['state'];
$zip = $_GET['zip'];
$name = $_GET['name'];

$pageBuilt = 0;
$errorMsg = '';

if (isset($_SESSION['pagemsg'])) {
  drupal_set_message($_SESSION['pagemsg']);
  unset($_SESSION['pagemsg']);
}

$stateArray = array(
      "AL" => "Alabama",
      "AK" => "Alaska",
      "AZ" => "Arizona",
      "AR" => "Arkansas",
      "CA" => "California",
      "CO" => "Colorado",
      "CT" => "Connecticut",
      "DE" => "Delaware",
      "DC" => "District Of Columbia",
      "FL" => "Florida",
      "GA" => "Georgia",
      "HI" => "Hawaii",
      "ID" => "Idaho",
      "IL" => "Illinois",
      "IN" => "Indiana",
      "IA" => "Iowa",
      "KS" => "Kansas",
      "KY" => "Kentucky",
      "LA" => "Louisiana",
      "ME" => "Maine",
      "MD" => "Maryland",
      "MA" => "Massachusetts",
      "MI" => "Michigan",
      "MN" => "Minnesota",
      "MS" => "Mississippi",
      "MO" => "Missouri",
      "MT" => "Montana",
      "NE" => "Nebraska",
      "NV" => "Nevada",
      "NH" => "New Hampshire",
      "NJ" => "New Jersey",
      "NM" => "New Mexico",
      "NY" => "New York",
      "NC" => "North Carolina",
      "ND" => "North Dakota",
      "OH" => "Ohio",
      "OK" => "Oklahoma",
      "OR" => "Oregon",
      "PA" => "Pennsylvania",
      "RI" => "Rhode Island",
      "SC" => "South Carolina",
      "SD" => "South Dakota",
      "TN" => "Tennessee",
      "TX" => "Texas",
      "UT" => "Utah",
      "VT" => "Vermont",
      "VA" => "Virginia",
      "WA" => "Washington",
      "WV" => "West Virginia",
      "WI" => "Wisconsin",
      "WY" => "Wyoming",
      "AS" => "American Samoa",
      "FM" => "Federated States of Micronesia",
      "GU" => "Guam",
      "MH" => "Marshall Islands",
      "MP" => "Northern Mariana Islands",
      "PW" => "Palau",
      "PR" => "Puerto Rico",
      "VI" => "Virgin Islands"
);

$stateSelect = '<form id="browse-schools">
<select id="gys-state">
<option value="" selected="selected">Choose your state</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District Of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
<option value="AS">American Samoa</option>
<option value="FM">Federated States of Micronesia</option>
<option value="GU">Guam</option>
<option value="MH">Marshall Islands</option>
<option value="MP">Northern Mariana Islands</option>
<option value="PW">Palau</option>
<option value="PR">Puerto Rico</option>
<option value="VI">Virgin Islands</option>
</select></form>';

if (isset($zip) && isset($name)) {
  $query = db_query("select signup.nid as 'signup_nid', project.nid as 'project_nid', signup.title as 'school_name', firstname.value as 'firstname', lastname.value as 'lastname', u.name as 'username', u.uid as 'userid',
nr.body as 'plan', signup.changed as 'plan_date', project_node.changed as 'project_date', l.street as 'school_street', l.city as 'school_city', l.province as 'school_province', l.postal_code as 'school_zip', l.latitude as 'school_lat', l.longitude as 'school_lon',
essay_challenge.field_campaign_essay_challenge_value as 'essay_challenge',
people.field_campaign_number_of_people_value as 'num_people',
technology.field_iyg_technology_value as 'technology',
why.field_campaign_essay_why_value as 'why',
how.field_campaign_essay_how_value as 'how',
gsid.field_great_schools_id_value as 'gsid',
pictures.field_campaign_pictures_title as 'photo_title', files.filepath as 'photo_file', pictures.delta as 'photo_id',
video.field_campaign_video_embed as 'video_embed'

from node signup
inner join location_instance li on li.nid=signup.nid and li.vid=signup.vid
inner join location l on li.lid=l.lid
inner join node_revisions nr on signup.vid=nr.vid and signup.nid=nr.nid
inner join users u on signup.uid=u.uid
left join profile_values firstname on firstname.uid=signup.uid and firstname.fid=1
left join profile_values lastname on lastname.uid=signup.uid and lastname.fid=2
left join content_field_great_schools_id gsid on signup.nid= gsid.nid and signup.vid=gsid.vid

left join content_type_campaign_gys_2011 project on signup.nid=project.field_signup_nid_value
left join node project_node on project.nid=project_node.nid and project.vid=project_node.vid
left join content_field_campaign_essay_challenge essay_challenge on project.nid=essay_challenge.nid and project.vid=essay_challenge.vid
left join content_field_campaign_video video on project.nid=video.nid and project.vid=video.vid and video.field_campaign_video_embed != ''

left join content_field_campaign_number_of_people people on project.nid=people.nid and project.vid=people.vid
left join content_field_iyg_technology technology on project.nid=technology.nid and project.vid=technology.vid
left join content_field_campaign_essay_why why on project.nid= why.nid and project.vid=why.vid
left join content_field_campaign_essay_how how on project.nid= how.nid and project.vid=how.vid


left join content_field_campaign_pictures pictures on project.nid=pictures.nid and project.vid=pictures.vid
left join files on files.fid = pictures.field_campaign_pictures_fid

where signup.type='gys_2011' and signup.title='%s' and l.postal_code='%s'
", $name, $zip);
  $results = array();
  $schoolname = $name;
  $data = array();
  $photos = array();
  $photo_num = 0;
  $users = array();
  while ($result = db_fetch_object($query)) {
    $results[] = $result;
    $school_fields = array('gsid', 'school_name', 'school_street', 'school_city', 'school_province', 'school_zip', 'school_lat', 'school_lon');
    foreach ($school_fields as $field) {
      $newfield = str_replace('school_','',$field);
      if ($result->{$field} && ! $data['school'][$newfield]) {
        $data['school'][$newfield] = $result->{$field};
        //print '<p>Setting Data: '.$result->{$field}."</p>";
      }
    }
    if ($result->plan && ! $data['signup'][$result->signup_nid]['plan']) {
      $data['signup'][$result->signup_nid]['plan'] = $result->plan;
    }
    if ($result->plan_date && ! $data['signup'][$result->signup_nid]['date']) {
      $data['signup'][$result->signup_nid]['date'] = $result->plan_date;
    }

    $user_fields = array('firstname','lastname','username');
    if ($result->signup_nid && $result->userid) {
      foreach ($user_fields as $field) {
        if ($result->{$field} && ! $data['signup'][$result->signup_nid]['user'][$field]) {
          $data['signup'][$result->signup_nid]['user'][$field] = $result->{$field};
          $users[$result->userid][$field] = $result->{$field};
        }
      }
    }

   $project_fields = array('essay_challenge','num_people','technology','why','how','project_date');
   if ($result->project_nid) {
      foreach ($user_fields as $field) {
        if ($result->{$field} && ! $data['project'][$result->project_nid]['user'][$field]) {
          $data['project'][$result->project_nid]['user'][$field] = $result->{$field};
        }
      }
      foreach ($project_fields as $field) {
        if ($result->{$field} && ! $data['project'][$result->project_nid][$field]) {
          $data['project'][$result->project_nid][$field] = $result->{$field};
        }
      }
      $photo_fields = array('photo_title','photo_file');
      if (isset($result->photo_id)) {
        foreach ($photo_fields as $field) {
          $newfield = str_replace('photo_','',$field);
          if ($result->{$field} && ! $data['project'][$result->project_nid]['photos'][$result->photo_id][$newfield]) {
            $data['project'][$result->project_nid]['photos'][$result->photo_id][$newfield] = $result->{$field};
            $photos[$photo_num][$newfield] = $result->{$field};
          }
        }
        $photo_num++;
      }
    }




    #TODO: adjust SQL to RETRIEVE MULTIPLE VIDEOs


  }

  #POST PROCESSING
  foreach ($users as $i => $useri) {
     $name = $useri['username']; 
     if ($useri['firstname'] && $useri['lastname']) {
       $name = ucfirst($useri['firstname']).' '.ucfirst(substr($useri['lastname'],0,1)).'.';
     }   
     $users[$i]['nickname'] = $name;
  }
  foreach ($data['signup'] as $nid => $plan) {
     $useri = $plan['user']; 
     $name = $useri['username']; 
     if ($useri['firstname'] && $useri['lastname']) {
       $name = ucfirst($useri['firstname']).' '.ucfirst(substr($useri['lastname'],0,1)).'.';
     }
     $data['signup'][$nid]['user']['nickname'] = $name;
   }
  foreach ($data['project'] as $nid => $project) {
     $useri = $project['user']; 
     $name = $useri['username']; 
     if ($useri['firstname'] && $useri['lastname']) {
       $name = ucfirst($useri['firstname']).' '.ucfirst(substr($useri['lastname'],0,1)).'.';
     }
     $data['project'][$nid]['user']['nickname'] = $name;
   }


  ## END POST PROCESSING

  if (! count($results)) {
    $errorMsg = 'The provided school name was not found.  Be the first to <a href="/green-your-school/find-your-school">register your school</a>!';
  } else {
    $pageBuilt = 1;
?>
  <h2><?=$data['school']['name'];?></h2>
  <p id="school-location"><?=$data['school']['city'].', '.$stateArray[$data['school']['province']];?></p>
  
  <?
  if (sizeof($photos) > 0) {
    print theme('imagecache','project_highlighted_photo',$photos[0]['file'],'','');
  } else {
    print theme('imagecache','project_highlighted_photo','nd/iyg-2011/free-fb-large.png','','');
  }
?>
<?
    print '<div id="enrolled-students">';
    print '<a href="/green-your-school/report-back">';
    print '<img src="/nd/iyg-2011/submit-projects.png"><br/><br/>';
    print '</a>';
    print '<img src="/nd/iyg-2011/members.png"><br/><br/>';
    $enrolled = 0;
    foreach ($users as $uid => $useri) {
      print '<div class="nickname">'.$useri['nickname'].'</div>'; 
      if ($uid == $user->uid) {
        $enrolled = 1;
      }
    }
    $gsid_string = '';
    if (isset($data['school']['gsid'])) {
      $gsid_string = '&gsid='.$data['school']['gsid'];
    }
    if (! $enrolled) {
      print '<br/><a href="/green-your-school/find-your-school?'.
        'state='.$data['school']['province'].
        $gsid_string.
        '&zip='.$data['school']['zip'].
        '&name='.$data['school']['name'].
        '&enroll=true'. 
        '">';
      print '<img src="/nd/iyg-2011/enroll.png">';
      print '</a>';
      print ' - Click here to enroll in your school.  Your name will be added to the above list and you will receive special notifications of contests and prizes.';
    }
    print '</div>';
    print '<div style="clear:both"></div>';
?>
  <div class="subheading">What will you do to green your school?</div>
<?
    $plan_chars = 165;
    $zebra = 'odd';
    foreach ($data['signup'] as $nid => $plan) {
      if ($plan['plan']) {
        print "<div class='gys-teaser $zebra'><p>".substr($plan['plan'],0,$plan_chars);
        if (strlen($plan['plan']) > $plan_chars || user_access('administer nodes')) {
          print '... <a href="/'.drupal_get_path_alias('node/'.$nid).'">read the full plan</a>';
        }
        print '</p>';
        print '<p class="author">'.$plan['user']['nickname'].' | '.date('F j, Y', $plan['date']).'</p>';
        print '</div>';
        if ($zebra == 'even') {
          $zebra = 'odd';
        } else {
          $zebra = 'even';
        }
      }
    }

?>
  <div class="subheading">Completed projects</div>
<?
    if (sizeof($data['project']) > 0) {
      $zebra = 'odd';
      foreach ($data['project'] as $nid => $project) {
        $this_node = node_load($nid);
        print "<div class='gys-teaser $zebra'>";
        print node_view($this_node, TRUE, FALSE, FALSE);
        print '<p class="author">'.$project['user']['nickname'].' | '.date('F j, Y', $project['project_date']).'</p>';
        print '</div>';
        if ($zebra == 'even') {
          $zebra = 'odd';
        } else {
          $zebra = 'even';
        }
      }
    } else {
      print '<p>No projects have been submitted yet.  Be the first to <a href="/green-your-school/report-back">report back</a>!</p>';
    }
?>
  <?
      //print "<pre style='color:white;'>".print_r($data,TRUE)."</pre>";
  ?>


<?
  }
}

//STATE must be two upper case characters!
elseif (isset($state) && preg_match('/^[A-Z]{2}$/', $state)) {
  $pageBuilt = 1;
?>

<script type="text/javascript">
$(document).ready(function() {
  var state = '<?=$state;?>';
  $('#gys-state').val(state);
  $('#gys-state-name').html('the <a href="?state='+state+'">'+$('#gys-state option[value='+state+']').text()+'</a>');
  $('div.node-gys table tr.odd, div.node-gys table tr.even').hover(function() {
    $(this).find('a.hideme').show();
  },
  function() {
    $(this).find('a.hideme').hide();
  }
  );
});
</script>

<p id='pagenav'>Browse Schools &gt; <a>Schools By State</a></p>
<img src='/nd/iyg-2011/schools-by-state.png'/>

<p>Here are <span id="gys-state-name">your state's</span> schools that have already registered for the Green Your School Challenge.  Don't see your school on this list?  Make sure to <a href='/green-your-school/find-your-school/'>register your school</a>.</p>

<?php

$headers = array(array('data' => 'School Name', 'field' => 'title', 'sort' => 'asc', 'class' => 'name'),
                 array('data' => 'City', 'field' => 'city', 'class' => 'city'),
);

$rows = array();

//STATE must be two upper case characters!
$sql = "select title,city,province,postal_code,gsid.field_great_schools_id_value as 'gsid' from node n inner join location_instance li on li.nid=n.nid and li.vid=n.vid inner join location l on li.lid=l.lid left join content_field_great_schools_id gsid on n.nid=gsid.nid where n.type='gys_2011' and province='$state' group by title,city";
$count_sql = "select count(1) from node n inner join inner join location_instance li on li.nid=n.nid and li.vid=n.vid location l on li.lid=l.lid where n.type='gys_2011' and province='$state'";


$count = 25;

$tablesort = tablesort_sql($headers);

$query = pager_query($sql.$tablesort,$count, 0, $count_sql);
$i = 0;
while ($record = db_fetch_object($query)) {
 // $rows[] = array($record->title, $record->city);
  $args = '?name='.$record->title;
  $args .= '&zip='.$record->postal_code;
/* ENABLING THE BELOW ARGS WOULD MESS UP THE FACEBOOK SHARING URL*/
/*
  if (isset($record->gsid)) {
    $args .= '&gsid='.$record->gsid;
  }
  if (isset($record->province)) {
    $args .= '&state='.$record->province;
  }
 */
  $rows[] = array(
              array('data' => $record->title, 'class' => 'name'),
              array('data' => $record->city, 'class' => 'city'),
              array('data' => '<a class="hideme" href="/green-your-school/browse-schools'.$args.'">Visit this school\'s page.</a>', 'class' => 'missinglink'),
            );
  $i++;
}

if (sizeof($rows) == 0) {
  $rows[] = array( array('data' => 'No schools have registered yet.  <a href="/green-your-school/find-your-school">Be the first!</a>', 'class' => 'col1'), array('data' => '', 'class' => 'col2'));
}

print theme('table',$headers,$rows);
print theme('pager', NULL, $count, 0);
?>

<img class='subheader' src='/nd/iyg-2011/change-state.png'/>

<?=$stateSelect;?>

<?php }

if (! $pageBuilt || $errorMsg) {

drupal_set_message($errorMsg);

?>

<img src='/nd/iyg-2011/featured-schools.png'/>

<br/>

<?
$par = 'even';
foreach (array(642227,640108,639857,636354) as $id) {
  print '<div class="gys-teaser '.$par.'">';
  print node_view(node_load($id),TRUE,FALSE,FALSE);
  print '</div>';
  if ($par == 'even') { $par = 'odd'; } else {$par = 'even';}
}
?>

<br/>

<img src='/nd/iyg-2011/interactive-map.png'/>

<p>Curious to find out what schools across the country are doing to green their school?  Check out this fun, interactive map to find out.  You can also check out the <a href='/increase_your_green/take_action#ideas-2010'>ideas for Green Your School Challenge, 2010</a>.</p>

<?php

drupal_add_js('nd/iyg-2011/map.js', 'theme', 'footer', FALSE, FALSE);
drupal_add_js('nd/iyg-2011/plotSignups.js', 'theme', 'footer', FALSE, FALSE);

?>


<div id="map_canvas"></div>

<img class="subheader" src='/nd/iyg-2011/browse-schools-by-state.png'/>

<p>See what other schools in your state are up to.</p>
<?php

print $stateSelect;

}
?>


  </div>
</div>
