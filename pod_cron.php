<?php

// Bootstrap Drupal
require_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
watchdog('POD cron', 'Starting POD cron');

// check if this has already run today (prevent anonymous users from sending out spam, etc)
// date('z') returns the current day of the year, 0-365
$today_date = date('z');
if (variable_get('pod_cron', '-1') == $today_date)
	exit(0);
watchdog('POD cron', 'POD cron passed variable check');

$tomorrow = date('F jS, Y', strtotime('+1 day'));
$projects = nodequeue_load_nodes(33, false, 0, 3);
if (count($projects) < 3)
	exit(0);
	
watchdog('POD cron', 'POD cron passed project count check');

$remove = $projects[0];
$new = $projects[1];
$notify = node_load($projects[2]->field_project_reference[0]['nid']);
$notify_user = user_load($notify->uid);

nodequeue_subqueue_remove(33, 1);
// the switch has happened, so we now set the variable saying that it is
variable_set('pod_cron', $today_date);

// email message
$name = ($notify_user->profile_fname == '') ? $notify_user->name : $notify_user->profile_fname;
$body = <<<MESSAGE
Hi $name,

Congratulations! Your project, $notify->title, has been selected to be a Do Something Project of the Day.

It will be featured on the Do Something homepage tomorrow, $tomorrow.

Let the world know that you're an all-star of social change by sending them to DoSomething.org to check it out.

Keep up the phenomenal work, and be sure to update your project with any new developments, accomplishments, videos or photos.

Need a little cash to get your project to the next level? Apply for a Do Something Grant:
http://www.dosomething.org/grants

Want a scholarship to take action in college? Apply for a Do Something Scholarship:
http://www.dosomething.org/scholarships

Want to take action year round? Grab your friends and start a Do Something Club to get prizes, cash, and tons of resources:
http://www.dosomething.org/clubs

Join our monthly campaigns. Every month there's a new cause and a new way to take action:
http://www.dosomething.org/campaigns

Want to volunteer in your community? Text "DoSomething" to 30644 to get 2 local volunteer opportunities texted to you each month.

Need more action ideas? Pick your cause and check out a list of ways you can Do Something:
http://www.dosomething.org/whatsyourthing

Thanks for changing the world,
The Do Something Team

MESSAGE;

// shoot off the email
$subject = "Your project will be featured on DoSomething.org as Project of the Day";
$message = array(
  'to' => $notify_user->mail,
  'subject' => t($subject),
  'body' => t($body),
  'headers' => array('From' => 'pod@dosomething.org',
					 'Bcc' => 'pod@dosomething.org'),
);
watchdog('POD cron', 'POD cron ran successfully');
drupal_mail_send($message);

echo 'end of line';
