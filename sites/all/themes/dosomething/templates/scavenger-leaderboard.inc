<img class="header" src="/sites/all/micro/hunt/headers/leaderboard.png" alt="Leaderboard"/>
<?

$current_path = preg_replace('/^\//', '', drupal_get_path_alias(request_uri()));
$twitter_text = "I'm pumped for @DoSomething & @Lenovo's Scavenger Hunt on 7/11. Are you signed up yet? Join my team! #DShunt";

$fb_twitter_links = '
<a target="_blank" href="http://facebook.com/sharer.php?u='.urlencode('http://www.dosomething.org/'.$current_path).'"><img class="social" src="/sites/all/micro/hunt/fb-small.png" alt="Share this on Facebook" /></a>
<a target="_blank" href="http://twitter.com/intent/tweet?text='.urlencode($twitter_text).'&url='.urlencode('http://www.dosomething.org/'.$current_path).'"><img class="social" src="/sites/all/micro/hunt/tw-small.png" alt="Share this on Twitter" /></a>';

print $fb_twitter_links;
print '<div style="display: none;"><div id="twitter-fb-links">'.$fb_twitter_links.'</div></div>';

$team_name = $_GET['team_name'];
$zip = $_GET['zip'];
$found_team = 0;
$team_obj = '';

if ($team_name && $zip) {
  $indiv_team_lookup = db_query("select title,l.city,l.province,l.latitude,l.longitude,
    f.field_campaign_first_name_value as 'first',
    last.field_campaign_last_name_value as 'last',
    e.field_email_value as 'email',
    p.field_campaign_phone_value as 'cell'
    from node n
    inner join location_instance li on n.nid=li.nid and n.vid=li.vid
    inner join location l on l.lid=li.lid
    inner join content_field_campaign_first_name f on f.nid=n.nid and f.vid=n.vid
    inner join content_field_campaign_last_name last on last.nid=n.nid and last.vid=n.vid
    left join content_field_email e on e.nid=n.nid and e.vid=n.vid
    left join content_field_campaign_phone p on p.nid=n.nid and p.vid=n.vid
    where n.type='scavenger_2011_signup' and n.title='%s' and l.postal_code='%s'", $team_name, $zip);
  $result = db_fetch_object($indiv_team_lookup);
  if ($result) {
    $found_team = 1;
    $team_obj['name'] = $result->title;
    $team_obj['city'] = $result->city;
    $team_obj['province'] = $result->province;
    $team_obj['lat'] = $result->latitude;
    $team_obj['lon'] = $result->longitude;
  }
  $emails_cell_seen = array();
  $normalized_email = strtolower(trim($result->email));
  $normalized_cell = preg_replace('/[^\d]/', '', $result->cell);

  $emails_cell_seen[$normalized_email] = 1;
  $emails_cell_seen[$normalized_cell] = 1;
  $team_obj['teammates'] = array();
  $team_obj['teammates'][
    strtolower(trim($result->first)).'+'.
    strtolower(trim($result->last)).'+'.
    $normalized_email.'+'.
    $normalized_cell
    ] = trim($result->first);
  while ($result = db_fetch_object($indiv_team_lookup)) {
    $normalized_email = strtolower(trim($result->email));
    $normalized_cell = preg_replace('/[^\d]/', '', $result->cell);
    $email_is_unique = 0;
    $cell_is_unique = 0;

    /*
    If the email is unique and cell is unique, add user

    How is email unique?

    ( (Email is defined and doesn't already appear) OR email is not defined)
    */
    if (($normalized_email && ! $emails_cell_seen[$normalized_email]) ||
         ! $normalized_email) {
      $email_is_unique = 1;
    }
    if (($normalized_cell && ! $emails_cell_seen[$normalized_cell]) ||
         ! $normalized_cell) {
      $cell_is_unique = 1;
    }
    if ($email_is_unique ||
        $cell_is_unique ) {
      $team_obj['teammates'][
        strtolower(trim($result->first)).'+'.
        strtolower(trim($result->last)).'+'.
        $normalized_email.'+'.
        $normalized_cell
        ] = trim($result->first);
      $emails_cell_seen[$normalized_email] = 1;
      $emails_cell_seen[$normalized_cell] = 1;
    }
  }
  ksort($team_obj['teammates']);
}

if ($found_team) {
  if ($_GET['signedup']) {
  ?>
    <script type="text/javascript">
    sharePopup();
    </script>
  <?
  }
  print '<p>To join this team, complete the form on the right.</p>';
  $city_province = '';
  if ($team_obj['city'] && $team_obj['province']) {
    $city_province = $team_obj['city'].', '.$team_obj['province'];
  }
  
  print '<div class="sub-nav"><a href="/scavenger-hunt/leaderboard"><div class="space"></div>&lt;&lt;Back to Leaderboard</a>&nbsp;&nbsp;&nbsp;<a class="prev" href="#">Prev</a>&nbsp;&nbsp;<a class="next" href="#">Next</a><img class="rhombus" src="/sites/all/micro/hunt/rhombus.png"/></div>';
  print '<div style="display:none;"><h2 class="team-name-for-sb">'.$team_obj['name'].'</h2></div>';
  print '<h2 class="team-name">'.$team_obj['name'].'</h2>';
  print '<h3>'.$city_province.'</h3>';
  print '<div class="leaderboard-school-info clearfix">';
  print '<div class="place">';
  print '<div class="number">'.'n/a'.'</div>'.'<img class="rankheader" src="/sites/all/micro/hunt/current-place.png"/>';
  print '</div>';
  print '<div class="points">';
  print '<img class="rankheader" src="/sites/all/micro/hunt/total-points.png" /><div class="number">'.'n/a'.'</div>';
  print '</div>';
  print '<br style="clear:both">';
  print '<div id="map_canvas"></div>';
  print '<div class="challenges">';
  print '<div class="description">Number of challenges completed</div>';
  print '</div>';
  print '</div>';

  print '<div class="teammates"><div class="top"></div>';
  print '<div class="middle">';
  print '<img src="/sites/all/micro/hunt/current-teammates.png"/>';
  foreach ($team_obj['teammates'] as $first) {
    print '<div class="name">'.$first.'</div>';
  }
  print '</div>'; 
  print '<div class="bottom"></div></div>';

  if ($team_obj['lat'] && $team_obj['lon']) {
    $lat_lng_str = $team_obj['lat'].','.$team_obj['lon'];
  ?>
    <script type="text/javascript">
      function initialize() {
        var myLatlng = new google.maps.LatLng(<?=$lat_lng_str;?>);
        var myOptions = {
          zoom: 4,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title:"<?=$team_obj['name'];?>"
        });
      }
      $(document).ready(function() {
        initialize();
      });
    </script>
    <br style="clear:both">
  <? }

} else {
  $team_lookup = db_query("select title,l.city,l.province,l.postal_code from node n
  inner join location_instance li on n.nid=li.nid and n.vid=li.vid
  inner join location l on l.lid=li.lid
  where n.type='scavenger_2011_signup'");

  $teams = array();
  while ($result = db_fetch_object($team_lookup)) {
    $teams[strtolower(trim($result->title)).'++'.$result->postal_code] = array('name' => $result->title, 'zip' => $result->postal_code,'city' => $result->city, 'province' => $result->province);
  }

  ksort($teams);

  print '<p>To join your team, click the name of your team below, or register a new team with the form on the right.  On July 11th, check this page to see points standings.</p>';

  print '<ul class="map-marker">';
  foreach ($teams as $team) {
    print '<li><a href="/scavenger-hunt/leaderboard?team_name='.urlencode($team['name']).'&zip='.urlencode($team['zip']).'">'.trim($team['name']).'</a> - '.$team['city'].', '.$team['province'].'</li>';
  }
  print '</ul>';
}
?>
