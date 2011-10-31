<?php

echo "<img src='http://www.dosomething.org/sites/all/micro/spit/schoolprofilepage.png' alt='School Profile Page' class ='schoolprofilepage'/>";
$val= $_GET["school"];
$val= urldecode($val);
$arr=array($val); 
echo "<br/>";
?>
<div class="views-field-title">
                <span class="field-content"><?php echo $val;?></span>
  </div>
<?
//echo $val;
$view = views_get_view('cancerorganizerviewtest_2');
print $view->execute_display('page_2', $arr);
echo "<br/>";
    module_load_include('inc', 'webform', 'includes/webform.submissions');
    $nom = 680696;
    $app = 688464;
    $rec = 688536;
	
	$participant = 682753;
	$participant_team = 704188;
	/*
	$apps = webform_get_submissions($app);
    $recs = webform_get_submissions($rec);
    $noms = webform_get_submissions($nom);
	*/
    $participants = webform_get_submissions($participant);
	$participants_team= webform_get_submissions($participant_team);
	
	/*
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
    }*/
	/*Remember to subsitute the below school name with the variable val on top*/
	//print_r($participants);
	$parnames = array();
	$orgnames = array();
	$parteams= array();
	
	foreach ($participants as $participant)        
    {	
		if($participant->data[8]['value'][0] == $val)
		{
			if($participant->data[6]['value'][0] == "organizer")
			{
				$orgnames[]=$participant->data[1]['value'][0];
				//echo $participant->data[1]['value'][0];
			}
			if($participant->data[6]['value'][0] == "participant")
			{
				$parnames[]=$participant->data[1]['value'][0];
				//echo $participant->data[1]['value'][0];
			}			
		}
    }
	foreach ($participants_team as $participant_team)
    {	
		if($participant_team->data[5]['value'][0] == $val)
		{
			$parteamnames[]=$participant_team->data[1]['value'][0];			
		}
    }
	?>
	<div class="organizerbackground">
		<div class="meetorganizer">
			Meet the organizer!
			
			<?php
			if(!$orgnames)
			echo "<br/>There is no organizer for this drive yet. Register again as an organizer to manage this drive. " ;
			foreach ($orgnames as $v) {
				echo "<h4 class ='value'>$v</h4><br/>";
			}
			
			?>
		</div>
	</div>
	<?
	/*
	foreach ($orgnames as $v) {
    echo $v;
	}
	*/
	echo "<br/>";
	echo "<h3 class='blackflag'>Who's Involved</h3>";
	foreach ($parnames as $v) {
		echo $v."<br/>";
	}
	foreach ($parteamnames as $v) {
		echo $v."<br/>";
	}
	?>
	
	<!-- Drive Tools Block -->
	
		<div class="drive2">
		<h3 class="blackflag">Drive Tools</h3>
		<ul class="triarrows">
		<li><a href="http://www.dosomething.org/sites/all/micro/spit/giveaspitflyer.pdf" target="_blank">Download flyers</a> </li>
		<li><a href="https://docs.google.com/document/d/1CyFhIsFjnZEZlA_GXyIEQ7bLclZ23dMDLXANXgQWB4M/edit?hl=en_US" target="_blank">Sample Press Release</a> </li>
		<li><a href="http://www.dosomething.org/sites/all/micro/spit/giveaspitpostcard.pdf" target="_blank">Post Card</a> </li>
		</ul>
		</div>
	
	<!--
	Old code
		<div class="drive2">
		<h3 class="rightflag">Drive Tools</h3>
		<ul class="triarrows">
		<li><a href="http://www.dosomething.org/sites/all/micro/spit/giveaspitflyer.pdf" target="_blank">Download flyers</a> </li>
		<li>Sample Press Release </li>
		<li><a href="http://www.dosomething.org/sites/all/micro/spit/giveaspitpostcard.pdf" target="_blank">Post Card</a> </li>
		</ul>
		</div>
		-->
	<!-- End of Drive Tools Block -->
	<?
	
	/*
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
 */
