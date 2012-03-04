<?php
  $img_style = array('style' => 'display:inline;padding:0 5px 0 0;margin:0px;vertical-align:bottom;');
  $img_y = theme_image('files/yes.png', 'RECEIVED!', 'Recommendation received', $img_style) . 'Recommendation received!';
  $img_n = theme_image('files/no.png', 'NOT RECEIVED!', 'Recommendation not received', $img_style) . 'Recommendation pending...';
  $r_text = '%s (%s) <a href="/dsawards/resend/%d/%d">Resend request email</a>'
?>

<div class="box blue">
<h2>Application status</h2>
<?php if ($draft) : ?>
  Your application is not yet complete. <a href="/programs/awards/apply">Finish it now</a>.
<?php elseif(!isset($sid)): ?>
  <strong>This application no longer exists. If you believe this is in error, please email <a href="mailto:help@dosomething.org">help@dosomething.org</a>.</strong>
<?php else: ?>
  Your application has been submitted.
<?php endif; ?>
</div>

<p>The application deadline is March 15st, 2012(5PM EST). If you have any questions or concerns, please email <a href="mailto:dsawards@dosomething.org">dsawards@dosomething.org.</a></p>
<p>If you are having difficulty accessing your grant application or other technical issues please contact <a href="mailto:help@dosomething.org">help@dosomething.org</a>.</p>
<p>Thank you for taking the time to share your extraordinary ideas and achievements with us.</p>

<?php if (isset($sid)): ?>
<div class="box blue" style="margin-top: 2em;">
<h2>Recommendation Status</h2>
<?php if ($draft) : ?>
<p>If any of the following information is incorrect, <a href="/programs/awards/apply">update it in your application!</a></p>
<?php endif; ?>
<h3>Recommendation 1</h3>
<p><?php
  if (empty($recommendations[0]['email']))
    echo '<em>Email not yet provided</em>';
  else
    printf($r_text, $recommendations[0]['name'], $recommendations[0]['email'], $sid, 1);
?></p>
<p><?php echo ($recommendations[0]['received']) ? $img_y : $img_n; ?></p>

<hr style="border-width: 1px 0px 0px; border-top: 1px solid #055494; height: 0px; margin: 1em 0px; padding: 0px;">

<p><?php
  if (empty($recommendations[1]['email']))
    echo '<em>Email not yet provided</em>';
  else
    printf($r_text, $recommendations[1]['name'], $recommendations[1]['email'], $sid, 2);
?></p>
<p><?php echo ($recommendations[1]['received']) ? $img_y : $img_n; ?></p>

</div>
<?php endif; ?>
