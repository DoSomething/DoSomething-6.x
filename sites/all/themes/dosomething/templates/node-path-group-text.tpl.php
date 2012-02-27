<h1>Group Texting (beta)</h1>
<?php
$columns = '-moz-column-count: 4;-moz-column-gap: 20px;-webkit-column-count: 4;-webkit-column-gap: 20px;column-count: 4;column-gap: 20px;';
$clubs = array(
  680190,
  695627,
  741783,
  740738,
  410876,
  741277,
  443811,
  587374,
  649293,
  741450,
  684872,
  685621, // DELETE ME
  584577, // DELETE ME, MAYBE (Mike's test)
  741859,
);
$club = null;
$c_messages = array();
$signature = "\n- A DoSomething Club";
global $user;
foreach ($user->og_groups as $key=>$group) {
  if (in_array($key, $clubs) && $group['is_admin']) {
    $club = node_load($key);
    og_load_group($club);
    if (!empty($club->field_mc_signature[0]['value']))
      $signature = "\n- " . $club->field_mc_signature[0]['value'];
  }
}

if (is_null($club)) {
  echo "You don't have access to this page.";
  if (!user_is_logged_in()) {
    echo " Try <a href=\"/user/login?destination=group-text\">logging in</a>?";
  }
  return;
}

else if (date('N') === 1) {
  echo "Sorry, this system is not available on Mondays. Please try again tomorrow.";
  return;
}

// if there is a $_GET['number']
if (isset($_POST['number']) && !empty($_POST['number'])) {
  opt_in($club, $_POST['number']);
  $num = $_POST['number'];
  $c_messages['warning'] = "The mobile number $num has been sent a request to join. It will not show up in this list until they confirm their subscription.";
}

if (isset($_POST['message']) && !empty($_POST['message'])) {
  send_message($club, $_POST['message']);
  drupal_goto('group-text', 'sent=true');
}

if (isset($_GET['sent']) && $_GET['sent'] == 'true') {
  $c_messages['warning'] = 'Message sent.';
}

// print errors
if (isset($c_messages['warning'])): ?>
  <div class="messages warning"><?php echo $c_messages['warning'];?></div>
<?php elseif (isset($c_messages['error'])): ?>
  <div class="messages error"><?php echo $c_message['error'];?></div>
<?php endif;


// get a list of subscribers
$subs = get_subscribers($club);
echo theme('item_list', $subs, 'Current Subscribers', 'ul', array('style' => $columns));
?>
<form action="/group-text" method="post">
<label for="add-member">Add a member:<input type="text" name="number" id="add-member"/></label>
<input type="submit" value="Add member" />
</form>

<h2>Send a message</h2>
<form action="/group-text" method="post">
<label for="send-message">Send a message<br /><textarea rows="6" cols="50" name="message" id="send-message"></textarea>
<br /><div><span id="char-count">NO JS</span> characters left</div>
<br /><input type="submit" value="Send to all subscribers" />
</form>
<?php

/**
 * Opt in a mobile number to the campaign. This function depends on the
 * club leader having their cell number and name in their profile. This
 * is a requirement for now because Mobile Commons will not support
 * refer-a-friend without a referring number. The name is optional.
 */
function opt_in(&$club, $number) {
  global $user;
  profile_load_profile($user);
  $cell = $user->profile_cell;
  if (empty($cell)) {
    $cell = $club->field_phone_required;
  }
  $url = 'https://dosomething.mcommons.com/profiles/join';
  $opt_in = $club->field_mc_optin[0]['value'];
  $fields = array(
    'opt_in_path'         => $opt_in,
    'friends_opt_in_path' => $opt_in,
    'person[phone]'       => $cell,
    'person[first_name]'  => $user->profile_fname,
    'person[last_name]'   => $user->profile_lname,
    'friends[]'           => $number,
  );

  //not sure why this is here, but leaving it just in case
  $args = implode(' ', array($cell, $user->profile_fname, $user->profile_lname, $number));

  $res = mc_post($url, $fields);
}

/**
 * NOTE: We are assuming that no group will have over 1000 subscribers
 * at any point in time. The mobile commons API supports paging by passing
 * the 'page' parameter, but by default it returns 1000 items per page.
 *
 * Later, we will have to loop over pages until
 * (int)$data->subscriptions->attributes()->num is 0.
 */
function get_subscribers(&$club) {
  $url = 'https://dosomething.mcommons.com/api/campaign_subscribers';
  $res = mc_post($url, array('campaign_id' => $club->field_mc_campaign[0]['value']));
  $data = simplexml_load_string($res);
  $in = 0;
  $numbers = array();
  foreach ($data->subscriptions->sub as $number) {
    if (empty($number->opted_out_at) && !empty($number->activated_at)) {
      $raw = (string)$number->phone_number;
      $numbers[] = preg_replace("/(1{1})([0-9]{3})([0-9]{3})([0-9]{4})/", "($2) $3-$4", $raw);
    }
  }
  return $numbers;
}

/**
 * Send a blast to all campaign subscribers.
 */
function send_message($club, $message) {
  if (!empty($club->field_mc_signature[0]['value']))
    $signature = "\n- " . $club->field_mc_signature[0]['value'];
  else
    $signature = "\n".'A DoSomething.org Club';
  $url = 'https://dosomething.mcommons.com/api/schedule_broadcast';
  $res = mc_post($url, array('campaign_id' => $club->field_mc_campaign[0]['value'], 'body' => $message.$signature));
}

function mc_post($url, $fields) {
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_HTTPAUTH,CURLAUTH_BASIC);
  curl_setopt($ch,CURLOPT_USERPWD,'gweiner@dosomething.org:Kickba11'); 
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_POST,count($fields));
  curl_setopt($ch,CURLOPT_POSTFIELDS,$fields);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}

?>

<h2>Need a poll?</h2>
Send an email to <a href="mailto:mfantini@dosomething.org">mfantini@dosomething.org</a> to request a poll to be sent to your group.
<script type="text/javascript">
var limit = <?php echo 160-strlen($signature); ?>;
$('#char-count').html(limit);
$('#send-message').keyup(function () {
  if ($(this).val().length > limit) {
    $(this).val($(this).val().substring(0, limit));
  }
  $('#char-count').html(limit - $(this).val().length);
});
</script>
