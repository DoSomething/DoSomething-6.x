<?php
// $Id: cron.php,v 1.36 2006/08/09 07:42:55 dries Exp $

/**
 * @file
 * Handles incoming requests to fire off regularly-scheduled tasks (cron jobs).
 */

include_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

$errors = array();
$errors[1] = "No username/password entered";
$errors[2] = "username/password not found";

if(empty($_REQUEST['username']) || empty($_REQUEST['password'])){
  $err = 1;
}
else {
  $form_values = array('name' => $_REQUEST['username'], 'pass' => $_REQUEST['password']);
  $account = user_authenticate($form_values);
  if(empty($account->uid)){ $err = 2; }
}

?>
<auth-response>
<?

if($err){
?>
<result-type>ERROR</result-type>
<result-description><?=$errors[$err]?></result-description>
<?
}
else{
?>
  <result-type>OK</result-type>
  <username><?=$account->name?></username>
  <real-name><?=$account->name?></real-name>
<? } ?>
</auth-response>
<?
$tmp = fopen('/tmp/ds_authlog', 'a');
fwrite($tmp, "attempt for {$_REQUEST['username']}\n" );
fclose($tmp);
die();

