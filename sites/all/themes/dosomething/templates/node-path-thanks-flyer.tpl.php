<?

global $user;
$uid;

print '<span class="left">DoSomething.org/thanks</span><img class="logo" src="/sites/all/micro/decade/flyer-header.jpg"/><span class="right">Decadeofthanks.org</span><br>';
print '<img class="dslogo" src="/files/dslogo.jpg"/>';
print '<br>';
print '<b>In remembrance of the 10th anniversary of 9/11, we’ve collected messages from all around the country to thank you for your incredible commitment to service.  Below are a few of the messages we wanted to share with you.</b>';

if ($user->uid) {
  $uid = $user->uid;
  print views_embed_view('thanks_911_signups', 'block_1', $uid);
  print views_embed_view('thanks_911_signups', 'block_2', $uid);
} else {
  print views_embed_view('thanks_911_signups', 'block_1');
}


?>
