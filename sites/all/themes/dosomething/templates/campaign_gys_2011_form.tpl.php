<div id="gys-report-form">

<?php 
  global $user;
  $uid = $user->uid;
  $display_form = TRUE;
  if (! user_access('administer nodes')) {
    $display_form = FALSE;
    $sql = "select title,nid from node where type='gys_2011' and uid='%d' limit 1";
    $query = db_query($sql, $uid);
    $row = db_fetch_object($query);
    $title = ''; 
    $nid = ''; 
    if ($row) {
      $display_form = TRUE;
      $form['title']['#value'] = $profile['name'] = $row->title;
      $form['field_signup_nid'][0]['value']['#value'] = $row->nid;
    }
  } else {
    print '<p style="color:red">You are logged in as an administrator. The form will only work as expected when logged in as a normal user</p>';
  }
  if (! $display_form): ?>
  <p>Oops, you have not yet registered with your school.  Please <a href="/green-your-school/find-your-school?next=green-your-school/report-back">find your school and register or enroll</a>, then you can report back on all the amazing things you did!</p>
<?
endif; ?>
<p>Report back and share your project on Facebook or Twitter for your chance to win a $1,000 scholarship!</p>
<?  if ($display_form):
  $form['field_signup_nid'][0] = null;
  $form['group_show_us_what_you_did']['field_campaign_pictures']['#collapsible'] = false;
  $form['group_show_us_what_you_did']['field_campaign_video']['#collapsible'] = TRUE;
  $form['group_show_us_what_you_did']['field_campaign_video']['#collapsed'] = TRUE;

  //print drupal_render($form['title']);
  print drupal_render($form['field_signup_nid']);
  print drupal_render($form['field_campaign_number_of_people']);
  print drupal_render($form['field_iyg_technology']);
  print drupal_render($form['field_campaign_essay_why']);
  print drupal_render($form['field_campaign_essay_how']);
  print drupal_render($form['field_campaign_essay_challenge']);
  print drupal_render($form['field_campaign_next_year_yesno']);
  print drupal_render($form['field_campaign_why_participate']);
  print drupal_render($form['group_show_us_what_you_did']['field_campaign_pictures']);
  print drupal_render($form['group_show_us_what_you_did']['field_campaign_video']);
  //$form['taxonomy'][5]['dropbox']['hidden']['lineages_selections'][0] = 'a:1:{i:0;s:2:"20";}';
  //$form['#post']['taxonomy'][5]['dropbox']['hidden']['lineages_selections'][0] = 'a:1:{i:0;s:2:"20";}';
  //$form['taxonomy'][5]['#value'] = 'a:1:{i:0;s:2:"20";}';
  //
  //
  //$form['#post']['taxonomy'][5]['hierarchical_select']['selects'][0] = 'none';
  //$form['#post']['taxonomy'][5]['dropbox']['hidden']['lineages_selections'][0] = 'a:1:{i:0;s:2:"20";}';
  //$form['taxonomy'][5][0]['value']['#value'] = 20;
  //$form['taxonomy'][5][0]['value'] = 20;
  //$form['taxonomy'][5][0]['#value'] = 20;
  //if ($user->uid== 466855) {
    //print drupal_render($form['taxonomy']);
  //}
  if (user_access('administer nodes')) {
    print drupal_render($form['options']);
  }
  print drupal_render($form['buttons']['submit']); 
  if (user_access('administer nodes')) {
    print drupal_render($form['delete']); 
  }
?>
<p style="float: right;">Questions about this form?  Email <a href="mailto:green@dosomething.org">green@dosomething.org</a></p>
<div style="clear:both"></div>
<? endif; ?>

</div>

<?php $form['preview']['#access'] = false; ?>

<div style="display:none">
  <?php print drupal_render($form);?>
</div>
<?php
  if ($user->uid== 466855) {
    //print '<pre style="color:white;">'.print_r($form,TRUE).'</pre>';
  }

?>
