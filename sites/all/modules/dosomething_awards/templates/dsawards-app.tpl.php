<h1 class="title"><?php echo $app['project_title'];?></h1>
<p><?php echo $app['short_description']; ?></p>

<ul>
  <li><?php echo $app['project_title']; ?> has been around for <?php echo $app['project_existence']; ?></li>
  <li><?php echo format_plural($app['people_involved'], '1 person is', '@count people are'); ?> involved</li>
  <li><?php echo $app['people_helped']; ?> people have been helped by <?php echo $app['project_title']; ?></li>
</ul>

<h2>Essays</h2>
<ol style="font-weight: bold;">
  <li>Tell us your story! Describe the problem your project addresses. Provide evidence (statistics, testimony or research) that shows why this is an important problem.</li>
  <li>What inspired you to take action?</li>
  <li>What are the skills, attributes and strengths that help make you a strong leader and someone who makes a positive difference in the world?</li>
</ol>

<p><?php echo nl2br($app['essay'][0]); ?></p>

<p style="font-weight: bold;">
Describe your project/organization and how it addresses the above problem. Be clear about its mission, its goals and its impact. Let us know what makes your project/organization special compared to other projects and organizations (if they exist) that work to combat the same problems. Please provide specific examples.
</p>

<p><?php echo nl2br($app['essay'][1]); ?></p>

<p style="font-weight: bold;">
Describe the measurable results you've achieved towards the problem you are addressing (please include both anecdotes and hard impact numbers). How have you reached these results? Who has helped you (ie. community, business and/or media partners) reach them?
</p>

<p><?php echo nl2br($app['essay'][2]); ?></p>

<p style="font-weight: bold;">
What are the next steps that you are going to take to make your project sustainable and stronger? Please explain how you would use the $100,000 if you were chosen as the Grand Prize Do Something Award winner? Please provide specifics (i.e. We would build a clinic that would provide health care for 60,000 Malian slum residents).
</p>

<p><?php echo nl2br($app['essay'][3]); ?></p>

<h2>Budget</h2>
<?php
  $current_budget = field_file_load($app['budget']);
  $next_budget = field_file_load($app['next_years_budget']);
?>
<ul>
  <li><?php echo l('Current Budget', $current_budget['filepath'], array('absolute' => true)); ?></li>
  <li><?php echo l('Next Year Budget', $next_budget['filepath'], array('absolute' => true)); ?></li>
</ul>

<?php
  $extras = array('website_url', 'facebook_url', 'twitter_handle', 'youtube_or_video_url');
  $e_text = '';
  foreach ($extras as $extra) {
    if (!empty($app[$extra])) {
      $e_text .= '<li>'.$app[$extra].'</li>';
    }
  }
  
  if (!empty($e_text)) : ?>
<h2>Additional project URLs</h2>
<ul>
<?php echo $e_text; ?>
</ul>
<?php endif; ?>

<h2>Recommendations</h2>
<?php
  foreach ($rec as $rec) {
    echo '<h3>Recommendation</h3>';
    if (!empty($rec['recommendation_file'])) {
      $f = field_file_load($rec['recommendation_file']);
      echo l('Recommendation file', $f['filepath'], array('absolute' => true));
    }
    else {
      echo 'test';
      echo $rec['recommendation'];
    }
  }
?>
