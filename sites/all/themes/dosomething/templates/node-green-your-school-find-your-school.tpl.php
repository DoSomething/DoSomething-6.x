<div class="node <?=$node->type ?>">
  <div class="node-gys">

<?php

 global $user;

  $next = $_GET['next'];
  $superdestination = $_GET['superdestination'];
  if (isset($next)) {
    $_SESSION['next'] = $next;
  }
  
  if (isset($superdestination) && $user->uid ) {
    $superdestination = str_replace('/', '&', $superdestination);
    $superdestination = str_replace('\\', '=', $superdestination);
    //print '<p>'.$superdestination.'</p>';
    //drupal_goto($path = 'green-your-school/find-your-school', $query = $superdestination, $fragment = NULL, $http_response_code = 301);
  }
?>
<?php if ((isset($_GET['gsid']) && isset($_GET['state'])) || isset($_GET['manual']) || isset($_GET['name'])): ?>


<?php
if (!$user->uid):
  $current_path = preg_replace('/^\//', '', drupal_get_path_alias(request_uri()));
  list($path, $args) = explode('?', $current_path);
  $args = str_replace('&', '/', $args);
  $args = str_replace('=', '\\', $args);
  //print '<p>'.$path.'</p>';
  //print '<p>'.$args.'</p>';
  $urlencode_current_path = urlencode($current_path);
?>

<img src='/nd/iyg-2011/find-your-school.png'/>

  <p>Please <a href="/user/login?destination=green-your-school/find-your-school<?=urlencode('?superdestination='.$args);?>">login</a> or <a href="/user/register?destination=green-your-school/find-your-school">sign up</a> to register with your school.</p>


<?php
 else:
 $node = new stdClass();
 $node->type = 'gys_2011';
 $node->name = $user->name;
 print drupal_get_form('gys_2011_node_form', $node);
 endif;
?>

<?php else: ?>

<img src='/nd/iyg-2011/find-your-school.png'/>

<p>Find your school to sign up.  Select your state and search for your school's name, or you can browse the map to see if you can find your school. If it's already been registered, then you will be taken to your school's page. If not, you'll be prompted to create one.</p>



<form action="#" id="find-your-school">
<select id="gys-state" >
<option value="AL" selected="selected">Alabama</option>
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
</select>
<br/>
<input id="gys-school" type="text" value="What's Your School's Name?" onfocus="if (this.value == this.defaultValue) { this.value=''; }" onblur="if (this.value=='') {this.value=this.defaultValue;}"  />
<input id="search-button" type="submit" value="" />
</form>

</p>

<p>Can't find your school?  <a href='?manual=1'>Enter it here!</a></p>

<div class="results"></div>

<?php

drupal_add_js('nd/iyg-2011/findSchools.js', 'theme', 'footer', FALSE, FALSE);
drupal_add_js('nd/iyg-2011/map.js', 'theme', 'footer', FALSE, FALSE);

?>

<script type="text/javascript">
$(document).ready(function() {
  $('div.node-gys table tr.odd, div.node-gys table tr.even').hover(function() {
    $(this).find('a.hideme').show();
  },
  function() {
    $(this).find('a.hideme').hide();
  }
  );
});
</script>




<div id="map_canvas"></div>
<div style="clear:both"></div>
<div id="greatschools-attrib">
<p>School data provided by,</p>
<a href='http://www.greatschools.org' target="_blank"><img src='/nd/school/greatschools.png'/></a>
</div>

<?php endif; ?>


  </div>
</div>
