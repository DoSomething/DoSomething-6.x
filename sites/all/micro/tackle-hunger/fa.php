
<div id="signup-form">
<?php if($GLOBALS['user']->uid)
{ ?>
<? if ($signedup=='true') { ?>

<p id="signed-up-text">You're now signed up!</p>

<p id="text-your-friends-text">Why not <a href="#text-your-friends">text your friends</a> some information about Tackle Hunger? </p>

<?php } else {  ?>

<img id="sign-up-img" src="/sites/all/micro/tackle-hunger/sign-up-now-n.png">

<?php
 global $user;
 $type = 'tackle_hunger';
 $node = array('uid' => $user->uid, 'name' => $user->name, 
'type' => $type);
 module_load_include('inc', 'node', 'node.pages');

  $form = drupal_get_form($type .'_node_form',  $node);

 print_r($form);
?>
<?php } ?>

<?php } else {  ?>
<img id="sign-up-img" src="/sites/all/micro/tackle-hunger/sign-up-now.png">
<p id="log-in-text">You need to be <a href='http://www.dosomething.org/user/login?destination=node%2F719048'>logged in</a> to join Tackle Hunger.</p>
<?php } ?>
</div>
<div class="clear-both"></div>

<div id="psa"><iframe width="420" height="236" src="http://www.youtube.com/embed/ma9ZKm9qFk4" frameborder="0" allowfullscreen></iframe></div>
<!--<div id="everyones-doing-it"></div>-->
<div id="hunger-affects"></div>
<div id="share-with-friends">

<a href="http://www.facebook.com/sharer.php?u=http://www.dosomething.org/tackle-hunger" onclick="return popup(this)" target="_blank"><img src="/sites/all/micro/icon-fb.png" alt"FB Share" width="24" /></a>
         
<a href="http://www.twitter.com/share?url=&text=I+just+joined+up+with+@DoSomething's+TackleHunger+campaign.+Text+HUNGER+to+38383+to+join+us+or+visit+www.dosomething.org/tackle-hunger" target="_blank" onclick="return popup(this);"><img src="/sites/all/micro/icon-twitter.png" alt="Tweet" width="24" /></a>
  
</div>

<div class="clear-both"></div>

<!--<div id="do-this"></div>-->
<div id="do-this-title"><h2 class="float-left">Do This</h2><h2 class="float-right">NOV 1st-DEC 25th</h2></div>
<div id="do-this-content">
<div id="yellow-list-bullets" class="float-left"></div>
<div id="do-this-list" class="float-left mid-text">
<p>Register your food drive by filling out the form up top and we'll give you all the tips and support you need to rock your drive.</p>
<p>Run you food drive in your school or community.</p>
<p><a href="https://docs.google.com/a/dosomething.org/spreadsheet/viewform?hl=en_US&formkey=dGFvdWs5NVRtdXgwTXBUeW52V1BQUkE6MQ#gid=0">Submit your results</a> by December 25th.</p>
</div>
</div>

<div id="email-us"></div>


<div class="clear-both"></div>

<div id="scholarships"></div>
<div id="food-bank-finder">
<form action="/sites/all/micro/tackle-hunger/zip-search.php" method="post">
<input alt="Enter your zip code" id="zip-code" name="zip-code" placeholder="zip code" type="text">
<input type="submit" name="submit-zip-code" id="submit-zip-code" value="Submit">
</form>
</div>

<div id="text-your-friends" name="text-your-friends">
<form action="http://dosomething.mcommons.com/profiles/join" method="POST">
<input type="hidden" name="redirect_to" value="http://www.dosomething.org/tackle-hunger-beta?confirm=true" />
      <label>Your First Name:<br /><input type="text" name="person[first_name]" class="space-after" /></label><br />
      <label>Your Cell #:<br /><input type="text" name="person[phone]" class="space-after" /></label><br />
      <label>Friends' Cell #s:<br /><input type="text" name="friends[]"/></label><br />
      <label><input type="text" name="friends[]"/></label>
      <label><input type="text" name="friends[]"/></label>
      <label><input type="text" name="friends[]"/></label><br />
      <label><input type="text" name="friends[]"/></label><br />
      <input type="hidden" name="friends_opt_in_path" value="88401" />
      <input type="hidden" name="opt_in_path" value="87651">
      <input type="submit" class="submit" value="Submit" />
</form>
</div>

<div id="rock-your-drive">
<a href="http://www.dosomething.org/tipsandtools/11-facts-about-hunger-us" TARGET="_blank"><img src="/sites/all/micro/tackle-hunger/11-facts-about-hunger.png"></a>
<a href="http://www.dosomething.org/actnow/actionguide/11-foods-donate-collection-drives" TARGET="_blank"><img src="/sites/all/micro/tackle-hunger/11-foods-requested-by-shelters.png"></a>
<a href="http://www.dosomething.org/actnow/actionguide/11-ideas-a-food-drive" TARGET="_blank"><img src="/sites/all/micro/tackle-hunger/11-ideas-for-a-food-drive.png"></a>
<a href="http://www.dosomething.org/actnow/actionguide/11-tips-how-have-a-collection-drive" TARGET="_blank"><img src="/sites/all/micro/tackle-hunger/11-tips-on-running-a-drive.png"></a>
</div>

<div class="clear-both"></div>

<div id="powered-by-walmart"></div>

<div class="clear-both"></div>