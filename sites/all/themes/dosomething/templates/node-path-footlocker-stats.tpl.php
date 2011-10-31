<?php
    module_load_include('inc', 'webform', 'includes/webform.submissions');
    $nom = 680696;
    $app = 688464;
    $rec = 688536;
    $apps = webform_get_submissions($app);
    $recs = webform_get_submissions($rec);
    $noms = webform_get_submissions($nom);
    $num_drafts = 0;
    
    foreach ($apps as $app)
        if ($app->is_draft)
            $num_drafts++;
    
    $num_apps = count($apps);
    $num_completed = $num_apps - $num_drafts;
    $num_recs = count($recs);
    $num_noms = count($noms);
    
    $app_emails = array();
    foreach ($apps as $app)
    {
        $email = rtrim($app->data[4]['value'][0]);
        $app_emails[$email] = TRUE;
    }
    $conversions = 0;
    $nominators = array();
    foreach ($noms as $nom)
    {
        $email = rtrim($nom->data[5]['value'][0]);
        if ($app_emails[$email])
            $conversions++;
        $nominators[] = rtrim($nom->data[3]['value'][0]);
    }
    
    $sids = array();
    foreach ($recs as $rec)
        $sids[] = $rec->data[15]['value'][0];
        
    $num_unique_noms = count(array_unique($nominators));
    $rec_counts = array_count_values(array_count_values($sids));
    
    $header = array('', '');
    $report = array(
        array('Nominations', $num_noms),
        array('Unique Nominators', $num_unique_noms),
        array('Nomination->Application (based on email)', $conversions),
        array('Application Drafts', $num_drafts),
        array('Completed Applications', $num_completed),
        array('Total Applications', $num_apps),
        array('Number of Recommendations', $num_recs),
        array('Applications with completed (2) recommendations', $rec_counts[2])
    );
?>

<div class="node">

<h2 class="title"><?=$title;?></h2>
<?php
    global $user;
    if (!in_array('administrator', array_values($user->roles))):
?>
What are you doing here? This is for admins only.
<?php else: 
    echo theme_table($header, $report);
endif; ?>
</div>
