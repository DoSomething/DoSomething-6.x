<?php
// $Id: user-profile.tpl.php,v 1.2.2.2 2009/10/06 11:50:06 goba Exp $

/**
 * @file user-profile.tpl.php
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * By default, all user profile data is printed out with the $user_profile
 * variable. If there is a need to break it up you can use $profile instead.
 * It is keyed to the name of each category or other data attached to the
 * account. If it is a category it will contain all the profile items. By
 * default $profile['summary'] is provided which contains data on the user's
 * history. Other data can be included by modules. $profile['user_picture'] is
 * available by default showing the account picture.
 *
 * Also keep in mind that profile items and their categories can be defined by
 * site administrators. They are also available within $profile. For example,
 * if a site is configured with a category of "contact" with
 * fields for of addresses, phone numbers and other related info, then doing a
 * straight print of $profile['contact'] will output everything in the
 * category. This is useful for altering source order and adding custom
 * markup for the group.
 *
 * To check for all available data within $profile, use the code below.
 * @code
 *   print '<pre>'. check_plain(print_r($profile, 1)) .'</pre>';
 * @endcode
 *
 * Available variables:
 *   - $user_profile: All user profile data. Ready for print.
 *   - $profile: Keyed array of profile categories and their items or other data
 *     provided by modules.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 */
?>

<?php
  global $user;
  $this_user = user_load(array('uid' => arg(1)));
  $same = ($this_user->uid == $user->uid);
?>

<div class="profile">

  <h3><?php print $this_user->name; ?>'s DoSomething</h3>

  <?php

    $title = 'Actions you will take';
    $query = '
    select n.nid, n.title, n.status as nstatus, n.created
    FROM {node} n
    WHERE n.uid=%d AND n.type="ididthis"
    ORDER BY changed DESC';
    $empty_msg = ($same ? 'You haven\'t' : $this_user->name . ' hasn\'t') . ' found something to do! Find an <a href="/clubs/resources/what-you-get">action guide</a> and get started.'; 
    print club_profile_content_table($this_user->uid, $this_user->name, $title, $query, $empty_msg);

    $title = 'Your Projects';
    $query = '
    select n.nid, n.title, n.status as nstatus, n.created
    FROM {node} n
    WHERE n.uid=%d AND n.type="project"
    ORDER BY changed DESC';
    $empty_msg = ($same ? 'You haven\'t' : $this_user->name . ' hasn\'t') . ' found something to do! Find an <a href="/actnow">action guide</a> and get started.'; 
    print club_profile_content_table($this_user->uid, $this_user->name, $title, $query, $empty_msg);

    $title = 'Your Clubs';
    $query = '
    select nid, created
    FROM {og_uid} og
    WHERE uid=%d
    ORDER BY changed DESC';
    $empty_msg = ($same ? 'You haven\'t' : $this_user->name . ' hasn\'t') . ' joined a club yet. Find out more about <a href="/clubs">starting a club</a> and get started.'; 
    print club_profile_content_table($this_user->uid, $this_user->name, $title, $query, $empty_msg);

    print '<h3>All Grants & Scholarships, or general programs ' . $this_user->name . '  Has Applied For</h3>';

    $valid_grant_types = array(
      'sixflags_scholarships_app' => t('Six Flags Scholarhips app'),
      'plum_grant_app' => t('Plum Grant'),
      'aspca_grant_app' => t('ASPCA Grant'),
      'enviro_grant' => t('Green Grant'),
      'dsaward_app' => t('Do Something Award App'),
      'teach_grants' => t('Teach Something Grant'),
      'youth_grant_app' => t('Youth to Youth Grant'),
      'grammy_grant' => t('Key Change Grant'),
      'mdvoltage_application' => t('Voltage Scholarship'),
      'disaster_grant' => t('Disaster Grant'),
      'final_grant_update' => t('Final Grant Update'),
      'take_action_app' => t('Take Action Grant'),
      'general_grant_app' => t('General Grant'),
      'grant' => t('Grant Application'),
      'surge_scholarship' => t('Surge Scholarship'),
    );

    $valid_grants_string = "'" . (count($valid_grant_types) ? implode("', '", array_keys($valid_grant_types)) : 'no_valid_types') . "'";

    $grants_q = db_query(
      "select n.nid, n.title, n.status as nstatus, n.created, n.type 
       FROM {node} n 
       WHERE n.uid=%d AND n.type IN ($valid_grants_string)
       ORDER BY changed DESC"
      ,$this_user->uid);

    while ($grants_rez = db_fetch_object($grants_q)) {
      unset($grant);
      $grant = $grants_rez;
      $grant_status = (intval($grant->nstatus)==0) ? 'Draft' : 'Submitted';
      $rows[] = array(
        array('data'=> l($grant->title,'node/'.$grant->nid)),
        $valid_grant_types[$grant->type], 
        date('F j, Y',$grant->created),
        array('data'=> l('Edit','node/'.$grant->nid . '/edit')),
      );
    }
    $header = array('Title', 'Grant', 'Date Created', 'Edit');


    //Build the table
    if(sizeof($rows)) {
      print theme('table',$header,$rows,array('width'=>'450px'));
    } else {
      print ($same ? 'You haven\'t' : $this_user->name . ' hasn\'t') . ' applied for any grants.';
    }

    print '<h3>Cause Campaigns ' . ($same ? 'You\'ve' : $this_user->name) . ' Has Joined</h3>';
    unset($rows);
    //This is for campaigns, add new campaign submissions like grants queue above
    $valid_campaign_types = array(
      'botb' => t('Battle of the Bands'),
      'hp_art' => t('Make Art. Save Art.'),
      'healthy_schools_report' => t('Healthy Schools'),
    );

    $valid_campaigns_string = "'" . (count($valid_campaign_types) ? implode("', '", array_keys($valid_campaign_types)) : 'no_valid_types') . "'";
    $campaigns_q = db_query(
      "select n.nid, n.title, n.status as nstatus, n.created, n.type 
       FROM {node} n 
       WHERE n.uid=%d AND n.type IN ($valid_campaigns_string)
       ORDER BY changed DESC"
      ,$this_user->uid);

    while ($campaigns_rez = db_fetch_object($campaigns_q)) {
      unset($campaign);
      $campaign = $campaigns_rez;
      $campaign_status = (intval($campaign->nstatus)==0) ? 'Draft' : 'Submitted';
      $rows[] = array(
        array('data'=> l($campaign->title,'node/'.$campaign->nid)),
        $valid_campaign_types[$campaign->type], 
        date('F j, Y',$campaign->created),
        array('data'=> l('Edit','node/'.$campaign->nid . '/edit')),
      );
    }
    $header = array('Title', 'Campaign', 'Date Created', 'Edit');


    //Build the table
    if(sizeof($rows))
      print theme('table',$header,$rows,array('width'=>'450px'));
    else
      print 'Find a <a href="/campaigns">cause campaign</a>! ';

    print '<h3> ' . ($same ? 'Your' : $this_user->name) . '\'s' . ' Comments</h3>';
    unset($rows);
    // Load in comments by $this_user
    $comments_q = db_query("SELECT c.nid, c.comment, c.format FROM {comments} c WHERE c.uid=%d ORDER BY c.timestamp DESC",$this_user->uid);
    while ($comments_rez = db_fetch_object($comments_q)) {
      unset($comment);
      $comment = $comments_rez;
      $page = node_load($comment->nid);
      $rows[] = array(l($page->title,'node/'.$page->nid),check_markup($comment->comment, $comment->format, FALSE));
    }
    $header = array('Page','Comment');

    //Build the table
    if(sizeof($rows))
      print theme('table',$header,$rows,array('width'=>'450px'));
    else
      print ($same ? 'You haven\'t' : $this_user->name . ' hasn\'t') . ' posted any comments.';

  ?>

</div>

<?php

function club_profile_content_table($uid, $name, $title, $query, $empty_msg) {
  $output = '<h3>' . $title . '</h3>';
  $results = db_query($query, $uid);
  $rows = '';
  while ($result = db_fetch_object($results)) {
    $node = node_load($result->nid);
    $rows[] = array(
      array('data'=> l($node->title, 'node/' . $node->nid)),
      date('F j, Y',$node->created),
      array('data'=> l('Edit','node/' . $node->nid . '/edit')),
    );
  }
  $header = array('Title', 'Date Created', 'Edit');
  if(empty($rows)) {
    $output .= $empty_msg;
  } else {
    $output .= theme('table', $header, $rows, array('width'=>'450px'));
  }
  return $output;
}
