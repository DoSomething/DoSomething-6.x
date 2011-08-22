<?
function get_profile($cell) {
  $params = array(
      'phone_number' => $cell
  );
  $url = 'https://dosomething.mcommons.com/api/profile?' . http_build_query($params, '', '&');
  $c = curl_init($url);
  
  curl_setopt($c, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($c, CURLOPT_USERPWD, 'gweiner@dosomething.org:weinersomething');
  curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
  $return = curl_exec($c);
  curl_close($c);
  return $return;
}
?>

<?
/*$raw = get_profile($_GET['phone']);
$xml = new SimpleXMLElement($raw);
//drupal_set_message('<pre>'. print_r($xml,1).'</pre>');
$zip = $xml->profile->address->postal_code;*/

$zip = $_GET['profile_postal_code'];
if (! $zip) {
  $zip = '16845';
}
$msg = $_GET['args'];
$phone = $_GET['phone'];
if ($zip && $msg && $phone) {
  $node = new StdClass();
  $node->type = 'decade_2011_signup';
  $node->created = time();
  $node->changed = $node->created;
  $node->title = 'mobile-message';
  $node->body = $msg;
  
  $node->field_campaign_first_name[0]['value'] = 'Mobile';
  $node->field_campaign_last_name[0]['value'] = 'Mobile';
  $node->field_campaign_phone[0]['value'] = $phone;
  $node->locations[0]['postal_code'] = $zip;
  node_save($node);
}

//This response does not get sent to the phone as long as there is text in the mData template
print '<?xml version="1.0" encoding="UTF-8"?>
<response>
 <reply>
  <text>
   <![CDATA[Awesome!]]>
  </text>
 </reply>
</response>';
exit;
?>
