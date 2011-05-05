<?

// remove fields from all versions of the application
unset($form['group_personal_info']['field_where_did_you_hear']);

// hide "Which grant are you applying for?" question
$form['group_personal_info']['field_which_grant']['#prefix'] = '<div class="hide-me">';
$form['group_personal_info']['field_which_grant']['#suffix'] = '</div>';

$node = node_load(arg(1));
/* additions for ASPCA grant
   check for application form's node id
   or editing of created nodes
 */
if (arg(1) == 534583 ||
    $node->type = 'grant' &&
    $node->field_which_grant[0]['value'] === 'Animal Action') { // Animal Action Grants
 // add in the new fields
  $form['group_additional_info']['field_grant_optional_number_1'][0]['value']['#title'] = 'How many animals are predicted to be impacted by this grant?';
  $form['group_additional_info']['field_grant_optional_essay_1'][0]['value']['#title'] = 'Are you or your project involved with a local shelter?';
  $form['group_additional_info']['field_grant_optional_essay_1'][0]['value']['#description'] = 'If so, describe your involvement and how long you have been involved.';
  $form['buttons']['preview']['#access'] = false;
  /*
     $form['group_project_info'] =
     array_merge($form['group_project_info'], $form['field_grant_optional_number_1']);
     $form['group_project_info'] =
     array_merge($form['group_project_info'], $form['field_grant_optional_essay_1']);
     unset($form['field_grant_optional_number_1']);
     unset($form['field_grant_optional_essay_1']);
   */
  $form['field_which_grant']['key']['#value'] = 'Animal Action';
} else if (arg(1) == 591579) { // Club Grant Application
  //print '<pre>'; print_r($form); print '</pre>';
  $form['field_budget_0']['#suffix'] = "<p>Please provide us with a rough outline of what the $250 will be used for. Indicate the different things you will use the money for and how much money each item costs. If you need help check out our <a target='_blank' href='/clubs/budget'>sample budget</a>. Note: this $250 can be used for the project described above and your Club in general throughout the year.</p>";
  $form['group_personal_info']['field_which_grant']['key']['#value'] = 'Club Grant';
  $form['field_which_grant']['#prefix'] = '<div class="hide-me">';
  $form['field_which_grant']['#suffix'] = '</div>';
  $form['group_personal_info']['field_plumgrant_highschool'][0]['value']['#title'] = 'Name of School (if applicable)';
  $form['group_personal_info']['field_your_college_if_applicabl'][0]['value']['#title'] = 'Club Name';
  $form['group_essays']['field_essay_one'][0]['value']['#description'] = '1) Tell us about the community you are helping or the problem you are trying to solve. 2) Provide evidence (statistics, testimony or research) that shows why this is an important problem.  3) Why is your club the right group of people to solve this problem? (Max. 1500 characters including spaces)';
  $form['group_essays']['field_essay_two'][0]['value']['#description'] = 'What is the vision of your project/Club?  (Your long-term goal, ie.  Decrease my school.s energy use) Tell us how you are or plan to achieve your vision, by providing us with detailed goals for your project/Club.  Please make them as specific as possible. (Change all light bulbs in the school to CF lights, Reduce the time lights are left by a 2 hours a day etc.) (Max. 1500 characters including spaces)';
  $form['group_essays']['field_essay_three'][0]['value']['#description'] = 'What\'s your plan of action? Describe the steps you have and/or you will take to achieve your goals.  Please detail your role in the project/Club.  (Max 1500 characters including spaces)';
  $form['group_recommendation']['#description'] = 'You can come back and add your recommendation in, but a  RECOMMENDATION IS REQUIRED to complete your application. This can come from any non-friend including a Club Advisor.';
  unset($form['field_budget_0']['new']['field_budget_0_upload']['#description']);
  $form['group_additional_info']['#access'] = false;
} else if (arg(1) == 591689) { // Club Startup Grant Application
  //print '<pre>'; print_r($form); print '</pre>';
  $form['field_budget_0']['#suffix'] = "<p>Please provide us with a rough outline of what the $250 will be used for. Indicate the different things you will use the money for and how much money each item costs. If you need help check out our <a target='_blank' href='/clubs/budget'>sample budget</a>. Note: this $250 can be used for the project described above and your Club in general throughout the year.</p>";
  $form['field_which_grant']['key']['#value'] = 'Club Startup Grant';
  $form['field_which_grant']['#prefix'] = '<div class="hide-me">';
  $form['field_which_grant']['#suffix'] = '</div>';
  $form['group_project_numbers']['field_num_people_involved'][0]['value']['#title'] = 'How many people will be directly involved in your Club this year?';
  $form['group_project_numbers']['field_num_people_involved'][0]['value']['#description'] = '(includes number of Club Members you anticipate to have this year plus potential volunteers throughout the year)';
  $form['group_project_numbers']['field_num_people_inspired'][0]['value']['#title'] = 'Number of people who you anticipate will donate goods or time to your projects this year';
  $form['group_project_numbers']['field_num_people_impacted'][0]['value']['#title'] = 'Number of people your Club will help through its projects this year';
  $form['group_project_numbers']['field_num_people_impacted'][0]['value']['#description'] = '(i.e. # of people you provided food for through you.re a food drive, etc.)';
  $form['group_personal_info']['field_plumgrant_highschool'][0]['value']['#title'] = 'Name of School (if applicable)';
  $form['group_personal_info']['field_your_college_if_applicabl'][0]['value']['#title'] = 'Club Name';
  $form['group_essays']['field_essay_one'][0]['value']['#title'] = 'What are the issues/problems your Club will be working on this year?';
  $form['group_essays']['field_essay_one'][0]['value']['#description'] = '1) Tell us about the community you will be helping or the problems you will be trying to solve. 2) Tell us why these problems are important to your Club and provide evidence (i.e. any statistics, testimonies, or research you have) that shows why this is an important problem in your community. (Max. 1000 characters)';
  $form['group_essays']['field_essay_two'][0]['value']['#title'] = 'How is your Club going to solve the problems above?';
  $form['group_essays']['field_essay_two'][0]['value']['#description'] = 'What\'s your plan of action? Are you going to run a Do Something <a href="/campaigns">Cause Campaign</a>? Please provide some of the details of how you will run at least two of your projects this year. (max. 1500 characters including spaces)';
  $form['group_essays']['field_essay_three'][0]['value']['#title'] = 'Please provide the details of how you will run your Club this year';
  $form['group_essays']['field_essay_three'][0]['value']['#description'] = 'Questions to answer: 1) Will you have officers? If so, what will these positions and responsibilities be? If not, how will you share responsibilities? 2) How will you recruit members? 3) Will you have an adult advisor? If so, who and how involved will this advisor be? 4) How often will your Club meet? 5) Where will you hold your meetings? (max. 1500 characters including spaces)';
  $form['group_essays']['field_essay_four'][0]['value']['#description'] = 'How would winning a Club Startup Grant help you achieve your goals? How will you measure the success of your Club? How are you going to make sure you Club keeps going once the leaders have graduated or left the Club? (max. 1500 characters including spaces)';
  $form['group_recommendation']['#description'] = 'You can come back and add your recommendation in, but a  RECOMMENDATION IS REQUIRED to complete your application. This can come from any non-friend including a Club Advisor.';
  unset($form['field_budget_0']['new']['field_budget_0_upload']['#description']);
  $form['group_additional_info']['field_grant_optional_essay_1'][0]['value']['#title'] = 'How long has your Club been active for?';
  $form['group_additional_info']['field_grant_optional_number_1']['#access'] = false;

} else if (arg(1) == 626921) { // PBTeen Grant
  //print '<!-- <pre>'.print_r($form, true).'</pre> -->';
  $form['group_personal_info']['field_which_grant']['key']['#value'] = 'Be Amazing Grant';
  $form['group_additional_info']['#access'] = false;
} else if (arg(1) == 632810) { // Starbucks Grant
  $form['group_personal_info']['field_which_grant']['key']['#value'] = 'Starbucks Grants';
  $form['group_additional_info']['#access'] = false;
  $form['field_optional_checkbox']['#access'] = false;
} else { // General grant apps

  // Add type of grant as h2
  preg_match('/key\]=(.*)$/', $form['#action'], $matches);
  $grant_type = strtoupper(urldecode($matches[1]));
  $form['#prefix'] = '<h2>'.($grant_type ? $grant_type : 'GRANT APPLICATION').'</h2>';

  // Hide custom fields from general grant apps
  $form['group_additional_info']['#access'] = false;
  $form['field_optional_checkbox']['#access'] = false;

}

$form['#validate']['grant_form_validate'] = array();

$preview = drupal_render($form['buttons']['preview']);
$submit = drupal_render($form['buttons']['submit']);

print drupal_render($form);
print $preview.$submit;
?>
