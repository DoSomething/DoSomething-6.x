<?php

/**
 * Implementation of hook_node_info().
 */
function ds_grants_node_info() {
  $items = array(
    'final_grant_update' => array(
      'name' => t('Final Grant Update'),
      'module' => 'features',
      'description' => t('An update on how things turned out after a grant was awarded.'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => t('Tell us about how things turned out for you and your project.'),
    ),
    'grant' => array(
      'name' => t('Grant'),
      'module' => 'features',
      'description' => t('Common grant form'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => t('<h2> HAVE YOU SUBMITTED A PROJECT POSTING YET?</h2>
<div class = "box blue gainlayout">
<p><b>You must submit a project posting before you can submit a grant application.</b>  If you haven\'t posted your project yet <a href="http://www.dosomething.org/node/add/project" target="blank"> <b>CLICK HERE </b></a>.</p>
<p>(*Note the project posting is public and for all Do Something members to view, your application is private and will only be viewed by Do Something grant administers and grant judges.)</p></div>

<h2> GENERAL INFO</h2>
<div class = "box blue gainlayout">
<p>All fields with an * are required. </p>
<p><b>To save your application </b>and come back later just hit <b>"Submit"</b> at the bottom of the page and re-access your application through your profile page.  (Note: You must enter something in the required fields before hitting submit)</p>
<p><b> We strongly recommend that you write your essays in a separate document</b> (eg Microsoft Word, Google Docs) and then paste them into the boxes below, so that there\'s no chance you\'ll lose your essays if something goes wrong with the submission (not saying it will, but these are the interwebs, stuff happens).</p>
<p><b>Tech issues?</b> Submit a <a href="/node/add/help-ticket"><b>help ticket</b></a>  and we will get back to you really soon.</p>
<p><b>Other Questions?</b> Contact Amanda at 212-254-2390 ext. 234 or aashton@dosomething.org.  <b>When inquiring about your grant please provide your USERNAME and a link of your PROJECT POSTING in the e-mail.</b> </p>
</div>
<p><h2>ELIGIBILITY RULES:</h2>
<ul class="logolist" id="eligib">
<li>The applicant must be 25 OR UNDER.</li>
<li>The applicant must be a U.S. or Canadian citizen (You will be asked to prove citizenship and age if you win).</li>
<li>You can APPLY for as many grants as you\'d like, but you can only win ONE grant from Do Something in a twelve month period (excluding the Do Something Award). </li></ul></p>

<p><h2>DO SOMETHING GRANTS CANNOT BE USED TO FUND:</h2>
<ul class="logolist">
<li>Travel Costs (If you are looking for grants to help you cover a travel abroad experience check out mytravelbug.org or studyabroadfunding.org)</li>
<li>Individual Sponsorships</li>
<li>Shipping Costs </li>
<li>Individual School Fees (Do Something Grants are not educational scholarships)</li>
<li>Fundraisers</li></ul> </p>
'),
    ),
    'grant_alumni' => array(
      'name' => t('Grant Alumni Listing'),
      'module' => 'features',
      'description' => t('descriptions of winners of Do Something Grants, created by staff'),
      'has_title' => '1',
      'title_label' => t('Alumni Name'),
      'has_body' => '1',
      'body_label' => t('Updates'),
      'min_word_count' => '0',
      'help' => '',
    ),
    'grant_alumni_update_form' => array(
      'name' => t('Grant Alumni Update Form'),
      'module' => 'features',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Your Name'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => t('<p> Thank you for taking the time to submit an Alumni Update Form! We\'re excited to hear what you\'ve been up to!</p>

<p> The questions with an asterisk below them will be filtered into your Grant Alumni page so that other Do Something Alumni and Do Something users can see what you\'ve been up to. Any questions, email Amanda aashton@dosomething.org</p>  '),
    ),
    'grant_judge' => array(
      'name' => t('Grant Judging Form'),
      'module' => 'features',
      'description' => t('for judging grant applications'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => t('<b>Thanks for judging!</b>
'),
    ),
  );
  return $items;
}

/**
 * Implementation of hook_views_api().
 */
function ds_grants_views_api() {
  return array(
    'api' => '2',
  );
}
