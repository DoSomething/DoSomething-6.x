<?php

global $user;
if (arg(2) == '') exit(1);
$nid = arg(2);

og_save_subscription($nid, $user->uid, array('is_active' => 1));

drupal_goto('node/'.$nid);

?>