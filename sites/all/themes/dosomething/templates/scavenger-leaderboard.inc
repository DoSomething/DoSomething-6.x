<img class="header" src="/sites/all/micro/hunt/headers/teams.png" alt="Teams"/>
<?

$current_path = preg_replace('/^\//', '', drupal_get_path_alias(request_uri()));
$twitter_text = "I'm pumped for @DoSomething & @Lenovo's Scavenger Hunt. Are you signed up yet? Join my team! #DShunt";

$fb_twitter_links = '
<a target="_blank" href="http://facebook.com/sharer.php?u='.urlencode('http://www.dosomething.org/').$current_path.'"><img class="social" src="/sites/all/micro/hunt/fb-small.png" alt="Share this on Facebook" /></a>
<a target="_blank" href="http://twitter.com/intent/tweet?text='.urlencode($twitter_text).'&url='.urlencode('http://www.dosomething.org/'.$current_path).'"><img class="social" src="/sites/all/micro/hunt/tw-small.png" alt="Share this on Twitter" /></a>';

print $fb_twitter_links;
print '<div style="display: none;"><div id="twitter-fb-links">'.$fb_twitter_links.'</div></div>';

$team_name = $_GET['team_name'];
$zip = $_GET['zip'];
$found_team = 0;
$team_obj = '';

if ($team_name && $zip) {
  $indiv_team_lookup = db_query("select title,l.city,l.province,l.latitude,l.longitude,field_team_points_value as 'points',
    f.field_campaign_first_name_value as 'first',
    last.field_campaign_last_name_value as 'last',
    e.field_email_value as 'email',
    p.field_campaign_phone_value as 'cell',
    n.nid as 'nid'
    from node n
    inner join location_instance li on n.nid=li.nid and n.vid=li.vid
    inner join location l on l.lid=li.lid
    inner join content_field_campaign_first_name f on f.nid=n.nid and f.vid=n.vid
    inner join content_field_campaign_last_name last on last.nid=n.nid and last.vid=n.vid
    inner join content_type_scavenger_2011_signup signup on signup.vid=n.vid
    left join content_field_email e on e.nid=n.nid and e.vid=n.vid
    left join content_field_campaign_phone p on p.nid=n.nid and p.vid=n.vid
    where n.type='scavenger_2011_signup' and n.title='%s' and l.postal_code='%s' order by n.created asc", $team_name, $zip);
  $result = db_fetch_object($indiv_team_lookup);
  if ($result) {
    $found_team = 1;
    $team_obj['name'] = $result->title;
    $team_obj['city'] = $result->city;
    $team_obj['province'] = $result->province;
    $team_obj['lat'] = $result->latitude;
    $team_obj['lon'] = $result->longitude;
    $team_obj['points'] = $result->points;
    $team_obj['leadernid'] = $result->nid;
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

  $view = views_get_view('scavenger_hunt_team_reportbacks');
  $view2 = views_get_view('scavenger_hunt_team_reportbacks');

  $filter = $view->get_item('default','filter','postal_code');
  $filter['value'] = $zip;
  $view->set_item('default', 'filter', 'postal_code', $filter);

  $filter = $view2->get_item('block_1','filter','postal_code');
  $filter['value'] = $zip;
  $view2->set_item('block_1', 'filter', 'postal_code', $filter);


  //No longer calling it a leaderboard
  //print '<div class="sub-nav"><a href="/scavenger-hunt/leaderboard"><div class="space"></div>&lt;&lt;Back to Leaderboard</a>&nbsp;&nbsp;&nbsp;<a class="prev" href="#">Prev</a>&nbsp;&nbsp;<a class="next" href="#">Next</a><img class="rhombus" src="/sites/all/micro/hunt/rhombus.png"/></div>';
  print '<div style="display:none;"><h2 class="team-name-for-sb">'.$team_obj['name'].'</h2></div>';
  print '<h2 class="team-name">'.$team_obj['name'].'</h2>';
  print '<h3>'.$city_province.'</h3>';
  print '<div class="leaderboard-school-info clearfix">';
  print '<!--<div class="place">';
  print '<div class="number">'.'n/a'.'</div>'.'<img class="rankheader" src="/sites/all/micro/hunt/current-place.png"/>';
  print '</div>-->';
  global $user;
  if (in_array('administrator', array_values($user->roles))) {
    print '<p>Admin only: <a href="/node/'.$team_obj['leadernid'].'/edit">Edit points</a>'; 
  }
  if ($team_obj['points']) {
    print '<div class="points">';
    print '<img class="rankheader" src="/sites/all/micro/hunt/total-points.png" /><div class="number">'.number_format($team_obj['points']).'</div>';
    print '</div>';
  }
  print '<br style="clear:both">';
  print '<div id="map_wrapper">';
  if (! preg_match('/^_/', $zip)) {
    print '<div id="map_canvas"></div>';
  }
  print '</div>';
  print '<div class="challenges">';
  print '<a class="button button-wide shadow rounded" href="/scavenger-hunt/challenges">Report Back</a>';
  print '<div class="clearfix team-photos">';
  print $view2->preview('block_1', array($team_obj['name']));
  print '</div>';
  print '<div class="description">Number of challenges completed</div>';
  print $view->preview('default', array($team_obj['name']));
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
  print '<p>To join your team, click the name of your team below, or register a new team with the form on the right</p>';
  print views_embed_view('scavenger_signups','block_1');

}
?>
