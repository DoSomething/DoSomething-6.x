<?php

    if (!isset($_GET['uid']))
        print $body;
    else
    {
        $r_uid = mysql_real_escape_string($_GET['uid']);
        echo $uid;
        $q = "INSERT INTO referrals VALUES ($uid, $r_uid)";
        db_query($q);
        drupal_goto('membership');
    }
?>