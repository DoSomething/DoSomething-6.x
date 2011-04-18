<div class="node <?=$node->type ?>">
<?php

$apply_height = array('login' => '200',
                      'fixfields' => '200',
                      'full' => '1055');

$apply_mode = 'login';

$apply_header = '<div class="relative">
<img id="application" class="header" src="/nd/att/apply-slant.png">
</div>';

$move_contact_css = '<style type="text/css">
div#container div.node div#att-contact {
  top: 250px !important;
}
</style>';

?>

<?php global $user; if ($user->uid) : // logged in ?>

<?php
  $user = user_load(array('uid' => $user->uid));

 $fields = array(
  'profile_fname' => 'First Name',
  'profile_lname' => 'Last Name',
  'profile_cell' => 'Cell Phone',
  'profile_address1' => 'Address',
  'profile_city' => 'City',
  'profile_state' => 'State',
  'profile_zip' => 'Zip',
 );

 $tabs = array(
  'First Name' => '/Personal+Information',
  'Last Name' => '/Personal+Information',
  'Cell Phone' => '/Subscriptions',
  'Address' => '/Location',
  'City' => '/Location',
  'State' => '/Location',
  'Zip' => '/Location',
 );

 $empty_fields = array();

 foreach ($fields as $field => $description) {
  if (strlen($user->$field) < 2) {
   $empty_fields[] = $description;
  }
 }

 if (count($empty_fields) > 0) { // need profile fields
  $apply_mode = 'fixfields';
  $dest = drupal_get_destination();

?>
<div class="apply-fixfields-height"></div>
<div class="apply-fixfields pink border"></div>
<div class="textbox apply-fixfields">

<?
  print $apply_header;
  print $move_contact_css;
  print '<p>Fill out the following ' . format_plural(count($empty_fields), 'field', 'fields') . ' before applying :';
  print '<ul>';
  foreach($empty_fields as $field) {
   print '<li><a href="/user/' . $user->uid . '/edit' . $tabs[$field]. '?'. $dest . '">' . $field . '</a></li>';
  }
  print '</ul></div>';
 
 } else { // required profile fields exist
  $apply_mode = 'full';
  $node = new stdClass();
  $node->type = 'scholarships_att';
  $full_name = $user->profile_fname . ' ' . $user->profile_lname;
  if (strlen($full_name)) {
   $node->title = $full_name;
  }
?>

<div class="apply-full-height"></div>
<div class="apply-full pink border"></div>
<div class="textbox apply-full">



<?
  print $apply_header;
  $form = drupal_get_form('scholarships_att_node_form', $node);
  print $form.'</div>';

 }

?>

<?php else: // not logged in

  $apply_mode = 'login';

  print $move_contact_css;

?>



<div class="apply-login-height"></div>
<div class="apply-login pink border"></div>
<div class="textbox apply-login">


<?php $dest = drupal_get_destination();

print $apply_header;

?>

<p>You need to <a href="/user/login?<?=$dest;?>">login</a> or <a href="/user/register?<?=$dest;?>">register</a> to get started!</p></div>

<?php endif; ?>

<div class="apply-judging blue border" style="top:<?=$apply_height[$apply_mode]+257;?>px;"></div>
<div class="textbox apply-judging" style="top:<?=$apply_height[$apply_mode]+267;?>px;">
<div class="relative">
<img class="header" src="/nd/att/judging-slant.png">
</div>

<div id="judging-criteria" class="sublist">
<ol class="highlighted">
<li>Adversity: <span>The scholarship applicant has faced and overcome significant adversity and has demonstrated personal growth from their experiences.</span></li>
<li>Strength of Inspirational Story: <span>The applicant has a compelling story that proves he or she not only deserves a DoSomething.org scholarship funded by AT&T, but is also ready to make the most of one.</span></li>
<li>Creativity: <span>The applicant had fun telling their story, personalizing their submission, engaging in the sharing process, and.most importantly.caught our attention. Please note: text entires should not exceed one page.</span></li>
<li>Measurable Change: <span>The scholarship applicant has produced tangible results and a measurable impact in his or her community.</span></li>
<li>Longetivity: <span>The applicant has made a strong argument for their potential for growth in a lasting, meaningful way, as a result of receiving a DoSomething.org scholarship funded by AT&T.</span></li>
</ol>
</div>

<p><span class="highlight">Please Note: </span>personal information obtained from your user profile (i.e. applicant.s birthday, email, and cell phone number) will remain private and will be viewed only by DoSomething.org (the "Sponsor") and scholarship judges, none of which are employed by or associated with AT&T.  All other information provided in the application will be public to all site viewers.</p>
</div>


<div class="apply-rules green border" style="top:<?=$apply_height[$apply_mode]+742;?>px;"></div>
<div class="textbox apply-rules" style="top:<?=$apply_height[$apply_mode]+752;?>px;">
<div class="relative">
<img class="header" src="/nd/att/rules-slant.png">
</div>

<p id="contest-rules"><strong>NO PURCHASE OR PAYMENT OF ANY KIND IS NECESSARY TO ENTER OR WIN.</strong></p>
<p><strong>OPEN ONLY TO RESIDENTS OF THE 50 UNITED STATES AND DISTRICT OF COLUMBIA WHO ARE AT LEAST 18 YEARS OLD AND UNDER 26 YEARS OLD AS OF THE DATE OF THIS APPLICATION</strong></p>
<p>By applying for a scholarship through this Program, applicants accept and agree to be bound by these Official Rules. Any violation of these rules may result in disqualification. All decisions of the judges regarding this Program are final and binding in all respects. PROGRAM PERIOD: Program begins 12:01 A.M. EST on March 15, 2011 and ends at 11:59pm on April 26, 2011 when all applications must be received ("Program Period").</p>
<p><strong>ELIGIBILITY: </strong> This Scholarship Program (the "Program") is only open to legal residents of the 50 United States and District of Columbia who are at least eighteen (18) years old and younger than (26) years old as of the date of entry, except officers, directors, members, and employees of the Sponsor, the judging organization (if applicable), or any other party associated with the development or administration of this Program, and the immediate family (i.e. parents, children, siblings, spouse), and persons residing in the same household, as such individuals. This Program is void outside the 50 United States and the District of Columbia, and where prohibited.</p>
<p><strong>HOW TO APPLY: </strong> Visit DoSomething.org/ATT during the Program Period and follow the instructions on the Application page ("Submission"). You can also receive instructions on how to apply by texting ACTION to 30644. Standard text messaging rates. All entries must be received during the Program Period. Sponsor's computer is the official timekeeping device for this Program. All applications become the property of the Sponsor and will not be acknowledged or returned. Limit: One application per person and per e-mail address during the Program Period. All applicant information, including e-mail addresses, is subject to the Sponsor's Privacy Policy.</p>
<p><strong>RECIPIENT SELECTION AND NOTIFICATION: </strong> Recipient selection will be conducted in consideration of judging criteria from all eligible applications on or about May 17, 2011 (the "Determination Date"). Each potential recipient will be notified by mail, email and/or telephone within three (3) weeks after selection. If a potential recipient cannot be contacted, does not respond within five (5) days from the date the Sponsor first tries to notify him/her, and/or the scholarship notification is returned as undeliverable, such potential recipient forfeits all rights to a scholarship, and an alternate potential recipient may be selected. Upon contacting a potential recipient and determining that he/she has met all eligibility requirements of the Program, including without limitation the execution of required waivers, publicity and liability releases and disclaimers, such individual will be declared a "recipient" of a scholarship from the Program.</p>
<p><strong>VALIDATION:</strong> Each Recipient is subject to validation and verification of compliance with these Official Rules by the Sponsor of the Program, whose decisions are final and binding in all aspects. Each Recipient may be required to sign and return, when requested, an affidavit of eligibility and a liability/publicity release within two (2) days of attempted notification. If such documents are not returned by the deadline or if the notification is returned as undeliverable, or a potential recipient is found not to be in compliance with these Official Rules, the recipient will be disqualified and, at Sponsor's discretion, an alternate recipient may be selected. If a recipient is 18 years of age but still a minor in his/her state of residence, documents must be signed by his or her parent or legal guardian. By taking part in this Program you agree to be bound by these rules and all decisions of the judges and Sponsor which are final and binding on all aspects of the Program.</p> 
<p><strong>SCHOLARSHIP DESCRIPTION:</strong> There will be multiple scholarship recipients, Twenty-Five (25) $1,000 scholarships and one $10,000 scholarship. Recipients currently enrolled in college or graduate school must use the scholarship funds towards educational costs at their school, and recipients not currently enrolled in college or graduate school must use the scholarship funds towards paying off their student loans. The scholarship funds will be held in escrow by Sponsor until the .recipient. notifies the Sponsor in writing of the school he or she is or will be attending or the financial institution servicing his or her student loans and where to send the scholarship funds. The Sponsor will then distribute the scholarship funds directly to the school or the financial institution, as applicable, on behalf of the recipient. The scholarships may only be used to defray education costs at a college or graduate school that the recipient attends, both 2 and 4-year institutions are acceptable. If, at the age of twenty-six (26), a recipient does not notify the Sponsor of an academic institution that he or she will be attending or a financial institution servicing his or her student loans, the scholarship is forfeited and will be returned to the Sponsor.</p>
<p><strong>TAXES: </strong> All federal, state and/or local income and other taxes, if any, are the recipient's sole responsibility. Additionally, the determination of whether any of the scholarships funds are subject to federal, state, and/or local income and other taxes is each recipient's sole responsibility.</p>
<p><strong>OWNERSHIP AND LICENSE: </strong> All application materials become the property of the Sponsor and will not be acknowledged or returned.</p>
<p><strong>GENERAL CONDITIONS/INDEMNIFICATION: </strong> By entering the Program, each applicant releases and discharges the Sponsor, judging organization (if applicable), AT&T Mobility LLC., and any other party associated with the development or administration of this Program, their parents subsidiary, and affiliated entities, and each of their respective officers, directors, members, shareholders, employees, independent contractors, agents, representatives, successors and assigns (collectively, "Program Parties"). By participating in this Program and/or by accepting any Scholarship you may be awarded, you agree that the Program Parties; and each of their respective successors, representatives and assigns shall not be liable for any and all actions, claims, including any third party claims, injury, loss or damage arising in any manner, directly or indirectly, arising from or relating to this Program, including entry and participation in this Program, or the acceptance, use or misuse of the Scholarship. By participating in the Program and/or accepting any Scholarship that you may be awarded, you agree to fully indemnify each of the Program Parties from any and all such claims by third parties without limitation. Entrants authorize the Program Parties to use their name, voice, likeness, biographical data, city and state of residence and entry materials in programming or promotional material, worldwide in perpetuity, or on a winner's list, if applicable, without further compensation unless prohibited by law. Sponsor is not obligated to use any of the above mentioned information or materials, but may do so and may edit such information or materials, at Sponsors' sole discretion, without further obligation or compensation. The Program Parties shall not be liable for: (i) late, lost, delayed, stolen, misdirected, incomplete, unreadable, inaccurate, garbled or unintelligible entries, communications or submissions, regardless of the method of transmission; (ii) telephone system, telephone or computer hardware, software or other technical or computer malfunctions, lost connections, disconnections, delays or transmission errors; (iii) data corruption, theft, destruction, unauthorized access to or alteration of entry or other materials; (iv) any injuries, losses or damages of any kind caused by your participation in this Program or resulting from acceptance, possession or use of a Scholarship; or (v) any printing, typographical, administrative or technological errors in any materials associated with the Program. The Program Parties disclaim any liability for damage to any phone or other electronic device resulting from participating in, or accessing or downloading information in connection with this Program, and reserves the right, at its sole discretion, to cancel, modify or suspend the Program should a virus, bug, computer or phone problem, unauthorized intervention or other causes beyond Sponsor's control, corrupt the administration, security or proper play of the Program, Sponsor may prohibit you from participating in the Program or winning a Scholarship if, at its sole discretion, it determines you are attempting to undermine the legitimate operation of the Program by cheating, hacking, deception, or any other unfair playing practices of intending to annoy, abuse, threaten or harass any other participants or Sponsor representatives. CAUTION: ANY ATTEMPT TO DELIBERATELY DAMAGE THE PROGRAM WEBSITE OR UNDERMINE THE LEGITIMATE OPERATION OF PROGRAM MAY BE IN VIOLATION OF CRIMINAL AND CIVIL LAWS AND SHALL RESULT IN DISQUALIFICATION FROM PARTICIPATION IN THE PROGRAM. SHOULD SUCH AN ATTEMPT BE MADE, SPONSOR RESERVES THE RIGHT TO SEEK REMEDIES AND DAMAGES (INCLUDING ATTORNEY FEES) TO THE FULLEST EXTENT OF THE LAW, INCLUDING CRIMINAL PROSECUTION.</p>
<p><strong>DISCLAIMERS: </strong>(i) Applications that are lost, late, misdirected, incorrect, garbled, or incompletely received, for any reason, including by reason of hardware, software, browser, or network failure, malfunction, congestion, or incompatibility at Sponsor's servers or elsewhere, will not be eligible. In the event of a dispute, applications will be deemed submitted by the authorized account holder of the e-mail address submitted at the time of entry. (ii) Sponsor, in its sole discretion, reserves the right to disqualify any person tampering with the entry process or the operation of the web site. Use of bots or other automated process to enter is prohibited and may result in disqualification at the sole discretion of Sponsor.
<p><strong>APPLICABLE LAWS AND JURISDICTION:</strong> This Program is subject to all applicable federal, state, and local laws and regulations. Issues concerning the construction, validity, interpretation and enforceability of these Official Rules shall be governed by the laws of the State of New York.</p>
<p><strong>SCHOLARSHIP RECIPIENT LIST:</strong> For the name of the recipients, send a self-addressed stamped envelope, within six (6) months of the Determination Date, to: Winner List: DoSomething.org Action Scholarships Program Funded by AT&T, DoSomething.org, 24-32 Union Square East, 4th floor, NY, NY 10003</p>
<p><strong>SPONSORSHIP:</strong> This Program is sponsored by DoSomething.org (24-32 Union Square East, 4th floor, NY, NY 10003)</p>
<p><strong>DIGITAL MILLENNIUM COPYRIGHT ACT</strong>
<p>A. If you are a copyright owner or an agent thereof and believe that any Content infringes upon your copyrights, you may submit a notification pursuant to the Digital Millennium Copyright Act ("DMCA") by providing our Copyright Agent with the following information in
writing (see 17 U.S.C 512(c)(3) for further detail):</p>
<ul><li>A physical or electronic signature of a person authorized to act on behalf of the owner of an exclusive right that is allegedly infringed;</li>
<li>Identification of the copyrighted work claimed to have been infringed, or, if multiple copyrighted works at a single online site are covered by a single notification, a representative list of such works at that site;</li>
<li>Identification of the material that is claimed to be infringing or to be the subject of infringing activity and that is to be removed or access to which is to be disabled and information reasonably sufficient to permit the service provider to locate the material;</li>
<li>Information reasonably sufficient to permit the service provider to contact you, such as an address, telephone number, and, if available, an electronic mail;</li>
<li>A statement that you have a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law; and</li>
<li>A statement that the information in the notification is accurate, and under penalty of perjury, that you are authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.</li>
<li>DoSomething.org's designated Copyright Agent to
receive notifications of claimed infringement is Peter Weinberg, 200 Park Avenue, New York, NY 10166, email: copyright@dosomething.org, fax: 212-254-2391. For clarity, only DMCA notices should go to the Copyright
Agent; any other feedback, comments, requests for technical support, and other communications should be directed to DoSomething.org user relations through user@dosomething.org. You acknowledge that if you fail to comply with all of the requirements of this Section 5(D),
your DMCA notice may not be valid.</li></ul>
<p>B. Counter-Notice. If you believe that your Content that was removed (or to which access was disabled) is not infringing, or that you have the authorization from the copyright owner, the copyright owner's agent, or pursuant to the law, to post and use the material in your Content, you may send a counter-notice containing the following
information to the Copyright Agent:</p>
<ul><li>Your physical or electronic signature;</li>
<li>Identification of the Content that has been removed or to which access has been disabled and the location at which the Content appeared before it was removed or disabled;</li>
<li>A statement that you have a good faith belief that the Content was removed or disabled as a result of mistake or a misidentification of the Content; and</li>
<li>Your name, address, telephone number, and e-mail address, a statement that you consent to the jurisdiction of the federal court in New York, New York, and a statement that you will accept service of process from the person who provided notification of the alleged infringement.</li></ul>
<p>If a counter-notice is received by the Copyright Agent, DoSomething.org may send a copy of the counter-notice to the original complaining party informing that person that it may replace the removed Content or cease disabling it in 10 business days. Unless the copyright owner files an action seeking a court order against the
Content provider, member or user, the removed Content may be replaced, or access to it restored, in 10 to 14 business days or more after receipt of the counter-notice, at DoSomething.org's sole discretion.</p></div>

  <div id="att-contact">
    <a target="_blank" href="http://www.att.com"><img id="presented" src='/nd/att/check-out-att.png'/></a>
    <br/>
    <a target="_blank" href="http://www.facebook.com/att"><img class="media first" src="/nd/att/facebook-small.png"/></a>
    <a target="_blank" href="http://www.twitter.com/att"><img class="media" src="/nd/att/twitter-small.png"/></a>
    <a target="_blank" href="http://www.youtube.com/shareatt"><img class="media" src="/nd/att/youtube-small.png"/></a>
  </div>
</div>
