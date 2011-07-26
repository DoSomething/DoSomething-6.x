<?

global $current_day;
global $actual_day;

$current_day = (date("d"))-10;
$current_hour = (date("H"));
$current_minute = (date("i"));

if (! ($current_hour > 10 || ($current_hour == 10 && $current_minute >= 45))) {
  $current_day--;
}

if ($current_day < 1) {
  $current_day = 1;
}

//This should increment up to 11, then stop at 11
if ($current_day > 11) {
  $current_day = 11;
}
$current_day = 11; //Now that the campaign is over, always show all challenges..
$actual_day = $current_day;

if (user_access('administer nodes')) {
  $current_day = 11;
}

global $challenges;
$challenges = array(
  1 => array( 'name' => 'Environment',
              'tid' => 20,
              'link' => 'whatsyourthing/environment',
              'challenge' => <<<EOD
<li>Challenge #1: Collect 20 cans and recycle them <span class="lenovo-red">[+5 points]</span></li>
<li>Challenge #2: Create a work of art out of recyclables and put it in a public place to raise awareness about proper recycling. <span class="lenovo-red">[+15 points]</span></li>
<li class="bonus"><strong>BONUS:</strong> Send a picture of your artwork to <a href="mailto:art@dosomething.org">art@dosomething.org</a> for a chance to win a brand new Lenovo laptop. </li>
<li>Challenge #3: Post 5 flyers about local recycling guidelines next to trash and recycling bins. <span class="lenovo-red">[+10 points]</span></li>
EOD
            ),
  2 => array( 'name' => 'Education',
              'tid' => 25,
              'link' => 'whatsyourthing/education',
              'challenge' => <<<EOD
<li>Challenge #1: Every 26 seconds a student drops out! Have every member of your team share this stat on Facebook. "Like" and tag @Do Something in your post.  <span class="lenovo-red">[+10 points]</span></li>
<li>Challenge #2: Donate new school supplies at your local Staples store for Do Something's "Staples for Students."  <span class="lenovo-red">[+20 points]</span></li>
<li class="bonus"><strong>BONUS:</strong> Snap a picture and send it to <a href="mailto:notebooks@dosomething.org">notebooks@dosomething.org</a> for a chance to win a brand new Lenovo laptop. </li>
EOD
            ),
  3 => array( 'name' => 'Violence and Bullying',
              'tid' => 28,
              'link' => 'whatsyourthing/violence+and+bullying',
              'challenge' => <<<EOD
<li>Challenge #1: 1 in 3 teens will be abused in a relationship. Share this stat on Facebook and tag @Do Something to raise awareness<span class="lenovo-red"> [+10 points]</span></li>
<li>Challenge #2: Brainstorm 3 ways to prevent bullying in your school.<span class="lenovo-red"> [+15 points]</span></li>
<li class="bonus"><strong>BONUS:</strong> E-mail your ideas to <a href="mailto:brainstorm@dosomething.org">brainstorm@dosomething.org</a> for a chance to win a Lenovo laptop. </li>
EOD
            ),
  4 => array( 'name' => 'Disaster Response and Relief',
              'tid' => 27,
              'link' => 'whatsyourthing/Disaster+Response+And+Relief',
              'challenge' => <<<EOD
<li>Challenge #1: Create a disaster preparedness kit for your home including 3 of the following items: soap, bandages, tweezers, thermometer, gloves, scissors, safety pins, antiseptic. <span class="lenovo-red"> [+15 points]</span></li>
<li>Challenge #2: Make a risk map of your community. Draw a map of all the emergency response centers and important buildings like schools and nursing homes near you.<span class="lenovo-red"> [+15 points]</span></li> 
<li class="bonus"><strong>BONUS:</strong> E-mail a picture of your map to <a href="mailto:map@dosomething.org">map@dosomething.org</a> for a chance to win a Lenovo laptop.</li>
EOD
            ),
  5 => array( 'name' => 'Health and Fitness',
              'tid' => 26,
              'link' => 'whatsyourthing/Health+And+Fitness',
              'challenge' => <<<EOD
<li>Challenge #1: Walk 1 mile or 2000 steps. (Did you know 10,000 steps is the ideal distance per day?)<span class="lenovo-red"> [+10 points]</span></li>
<li>Challenge #2: Create a healthy recipe and share with your Facebook friends.<span class="lenovo-red"> [+10 points]</span></li> 
<li class="bonus"><strong>BONUS:</strong> E-mail your recipe to <a href="mailto:recipe@dosomething.org">recipe@dosomething.org</a> for a chance to win a Lenovo laptop.</li>
<li>Challenge #3: Set up a FREE suntan lotion stand in your community. Offer passers-by some SPF.<span class="lenovo-red"> [+20 points]</span></li> 
<li class="bonus"><strong>EXTRA EXTRA:</strong> Recruit more team members. Share your team page on Facebook and ask new members to join in the fun! Take a screenshot or pic of your screen and upload or e-mail it to <a href="mailto:huntpics@dosomething.org">huntpics@dosomething.org</a> for <span class="lenovo-red">25 bonus points!</span></li>
EOD
            ),
  6 => array( 'name' => 'Animal Welfare',
              'tid' => 29,
              'link' => 'whatsyourthing/Animal+Welfare',
              'challenge' => <<<EOD
<li>Challenge #1: In the time it takes to read this, one of our planet's unique species will become extinct. Raise awareness of this stat by posting on your Facebook page.<span class="lenovo-red"> [+15 points]</span></li>
<li>Challenge #2: Make a list of 5 reasons why you should adopt rather than buy an animal from a pet store.<span class="lenovo-red"> [+10 points]</span></li>
<li class="bonus"><strong>BONUS:</strong> Send your list to <a href="mailto:adopt@dosomething.org">adopt@dosomething.org</a> for a chance to win a Lenovo laptop!</li>
<li>Challenge #3: Go meat free for the day and snap a pic of what you ate instead.  E-mail the picture to <a href="mailto:nomeat@dosomething.org">nomeat@dosomething.org</a><span class="lenovo-red"> [+5 points]</span></li>
EOD
            ),
  7 => array( 'name' => 'Poverty and Homelessness',
              'tid' => 21,
              'link' => 'whatsyourthing/Poverty',
              'challenge' => <<<EOD
<li>Challenge #1: Collect 10 clothing items to donate to your local shelter or Salvation Army.<span class="lenovo-red"> [+10 points]</span></li>
<li>Challenge #2: Live below the line - the poverty line, that is. Spend $1.50 or less today.<span class="lenovo-red"> [+15 points]</span></li>
<li class="bonus"><strong>BONUS:</strong> At the end of the day, email <a href="mailto:below@dosomething.org">below@dosomething.org</a> with what you spent your money on for a chance to win a Lenovo prize.</li>
EOD
            ),
  8 => array( 'name' => 'Access to Tech',
              'tid' => 25, //tid for education
              'link' => 'whatsyourthing/Education',
              'challenge' => <<<EOD
<li>Challenge #1: Set up an e-mail address for a senior citizen and show them how to use it.<span class="lenovo-red"> [+20 points]</span></li>
<li class="bonus"><strong>BONUS:</strong> Send a picture of your senior to <a href="mailto:seniors@dosomething.org">seniors@dosomething.org</a> for a chance to win a Lenovo laptop.</li>
<li>Challenge #2: Set someone's Facebook/social network privacy settings to maximize security.<span class="lenovo-red"> [+10 points]</span></li>
EOD
            ),
  9 => array( 'name' => 'Troops',
              'tid' => 24,
              'link' => 'whatsyourthing/War,+Peace+And+Politics/Our+Troops',
              'challenge' => <<<EOD
<li>Challenge #1: Write a letter to a soldier. Not sure how? Check out <a target="_blank" href="http://www.amillionthanks.org">www.amillionthanks.org</a>.<span class="lenovo-red"> [+10 points]</span></li>
<li>Challenge #2: Approximately 20% of our Iraq and Afghanistan active duty and vets suffer from Post Traumatic Stress Disorder. Raise awareness about this stat by posting on Facebook.<span class="lenovo-red"> [+5 points]</span></li>
<li>Challenge #3: Visit a vet, ask for their story, and take note of the most moving moments.<span class="lenovo-red"> [+20 points]</span></li>
<li class="bonus"><strong>BONUS:</strong> E-mail the most moving moments to <a href="mailto:vets@dosomething.org">vets@dosomething.org</a> for a chance to win a Lenovo laptop.</li>
EOD
            ),
  10 => array( 'name' => 'Environment',
               'tid' => 25,
               'link' => 'whatsyourthing/Environment',
              'challenge' => <<<EOD
<li>Challenge #1: Slay vampire energy. Unplug appliances that aren't being used.<span class="lenovo-red"> [+5 points]</span></li>
<li>Challenge #2: Turn the AC settings to no lower than 78 degrees Farenheit to maximize energy efficiency.<span class="lenovo-red"> [+10 points]</span></li>
<li>Challenge #3: Hold a mini Earth Hour in your community. Switch all lights off and use candles for 1 hr after sunset tonight.<span class="lenovo-red"> [+10 points]</span></li>
<li class="bonus"><strong>BONUS:</strong> Send a picture to <a href="mailto:earthhour@dosomething.org">earthhour@dosomething.org</a> for a chance to win a Lenovo laptop.</li>
EOD
            ),
  11 => array( 'name' => 'Wildcard',
              'challenge' => <<<EOD
<li>Show us how much you love taking action.  Make a video (max. 2 min) about WHY YOU DO SOMETHING.  Upload your video to youtube, and include the link to your video along with your youtube username (for voting) when reporting back.</li>
<li><b>SCORING: </b>Views (1pt each), creativity (up to 100pts), people involved (5pts each), and votes (5pts each). In your video, ask viewers to text VOTING to 30644 to learn how to vote for you !</li>
<li><b>TIPS:</b>
<ul>
<li>Be Creative, be funny, and mention Do Something in your video.</li>
<li>Include your friends!</li>
<li>Have your friends vote for you.  Say "text VOTING to 30644" and the end of your video to make it easy for your friends to vote.  They'll need your youtube username to vote for you.</li>
</ul>
</li>
<li>Check out all the videos on our <a target="_blank" href="http://www.youtube.com/user/DoSomething1#p/c/7D78DDF5D046E01E">YouTube channel</a> under Playlists &gt; Scavenger Hunt Day 11. Share with your friends!</li>
EOD
            ),

          );
?>
