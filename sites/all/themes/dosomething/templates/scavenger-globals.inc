<?

global $current_day;
$current_day = (date("d"))-10;
if ($current_day < 1) {
  $current_day = 1;
}

$current_day = 2; //hardcoding for now

if (user_access('administer nodes')) {
  $current_day++;
}

//This should increment up to 11, then stop at 11
if ($current_day > 11) {
  $current_day = 11;
}

global $challenges;
$challenges = array(
  1 => array( 'name' => 'Environment',
              'tid' => 20,
              'link' => '',
              'challenge' => <<<EOD
<li>Challenge #1: Collect 20 cans and recycle them <span class="lenovo-red">[+5 points]</span></li>
<li>Challenge #2: Create a work of art out of recyclables and put it in a public place to raise awareness about proper recycling. <span class="lenovo-red">[+15 points]</span></li>
<li class="bonus"><strong>BONUS:</strong> Send a picture of your artwork to <a href="mailto:art@dosomething.org">art@dosomething.org</a> for a chance to win a brand new Lenovo laptop. </li>
<li>Challenge #3: Post 5 flyers about local recycling guidelines next to trash and recycling bins. <span class="lenovo-red">[+10 points]</span></li>
EOD
            ),
  2 => array( 'name' => 'Education',
              'tid' => 25,
              'challenge' => <<<EOD
<li>Challenge #1: Every 26 seconds a student drops out! Have every member of your team share this stat on Facebook. "Like" and tag @Do Something in your post.  <span class="lenovo-red">[+10 points]</span></li>
<li>Challenge #2: Donate new school supplies at your local Staples store for Do Something.s "Staples for Students."  <span class="lenovo-red">[+20 points]</span></li>
<li class="bonus"><strong>BONUS:</strong> Snap a picture and send it to <a href="mailto:notebooks@dosomething.org">notebooks@dosomething.org</a> for a chance to win a brand new Lenovo laptop. </li>
EOD
            ),
  3 => array( 'name' => 'Violence and Bullying',
              'tid' => 28,
              'challenge' => <<<EOD
<li>Challenge #1: 1 in 3 teens will be abused in a relationship. Share this stat on Facebook and tag @Do Something to raise awareness<span class="lenovo-red"> [+10 points]</span></li>
<li>Challenge #2: Brainstorm 3 ways to prevent bullying in your school.<span class="lenovo-red"> [+15 points]</span></li>
<li class="bonus"><strong>BONUS:</strong> E-mail your ideas to <a href="mailto:brainstorm@dosomething.org">brainstorm@dosomething.org</a> for a chance to win a Lenovo laptop. </li>
EOD
            ),
  4 => array( 'name' => 'Disaster Response and Relief',
              'tid' => 27,
            ),
  5 => array( 'name' => 'Health and Fitness',
              'tid' => 26,
            ),
  6 => array( 'name' => 'Animal Welfare',
              'tid' => 29,
            ),
  7 => array( 'name' => 'Poverty and Homelessness',
              'tid' => 21,
            ),
  8 => array( 'name' => 'Access to Tech',
              'tid' => 25, //tid for education
            ),
  9 => array( 'name' => 'Troops',
              'tid' => 24,
            ),
  10 => array( 'name' => 'Environment',
               'tid' => 25,
            ),
  11 => array( 'name' => 'Wildcard',
            ),

          );
?>
