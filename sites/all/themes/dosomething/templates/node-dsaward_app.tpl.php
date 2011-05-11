<?php if (arg(1) == '29050' && arg(0) == 'node') { ?>
	<?=$content;?>
<?php } else { ?>
<?php if (!$page) {//Teaser?>
	<div class="node <?=$node->type ?>">
	    <h2><?=l($title,'node/'.$node->nid);?></h2>
		<?=$content;?>
	</div>
<? } else {//Full view ?>
	<div class="node <?=$node->type ?>">
        <?php

          if (user_access('administer nodes')) {
            print $node->content['group_personal_information']['field_name']['#value'];
            print $node->content['group_personal_information']['field_phone_number_1']['#value'];
            print $node->content['group_personal_information']['field_plumgrant_email']['#value'];
            print $node->content['group_personal_information']['field_plumgrant_address']['#value'];
            print $node->content['group_personal_information']['field_state_plain']['#value'];
            print $node->content['group_personal_information']['field_zip_code_2']['#value'];
            print $node->content['group_personal_information']['field_age']['#value'];
            print $node->content['group_personal_information']['field_dsaward_app_birthdate']['#value'];
            print $node->content['group_personal_information']['field_gender']['#value'];
          }

          print $node->content['group_project_info']['field_plumgrant_project']['#value'];
          print $node->content['group_project_info']['field_plumgrant_onesentence']['#value'];
          print $node->content['group_project_info']['field_when_did_your_projectorga']['#value'];
          print $node->content['group_project_info']['field_number_people_in_organiza']['#value'];
          print $node->content['group_project_info']['field_people_impacted']['#value'];

?>

<h3>See It</h3>
<p>
<strong>
<ul>
<li>What inspired you to take action?</li>
<li>What are the skills, attributes and strengths that help make you a strong leader and someone who makes a positive difference in the world?</li>
<li>Describe the problem your project addresses. Provide evidence (statistics, testimony or research) that shows why this is an important problem.</li>
</ul>
</strong>
</p>
<?php
          print $node->field_essay_1[0]['view'];
          //print $node->content['group_essays']['field_essay_1']['#value'];
?>

<h3>Believe It</h3>
<p><strong>Describe your project/organization and how it addresses the above problem. Be clear about its mission, its goals and its impact. Let us know what makes your project/organization special compared to other projects and organizations (if they exist) that work to combat the same problems.</strong></p>
<?php
          print $node->field_essay_2[0]['view'];
?>

<h3>Build It</h3>
<p><strong>Describe the measurable results you've achieved towards the problem you are addressing (include antidotes and hard impact numbers). How have you reached these results? Who has helped you (ie. community, business and/or media partners) reach them?</strong></p>
<?php
          print $node->field_essay_3[0]['view'];
?>

<h3>Next Steps</h3>
<p><strong>What are the next steps that you are going to take to make your project sustainable and stronger? Please explain how you would use the $100,000 if you were chosen as the Grand Prize Do Something Award winner? Please provide specifics (i.e. We would build a clinic that would provide health care for 60,000 Malian slum residents).</strong></p>

<?php
          print $node->field_essay_4[0]['view'];

          $result = db_fetch_object(db_query("SELECT nid FROM {content_type_dsaward_rec} dr WHERE dr.field_dsaward_nid_value = %d AND dr.field_dsaward_rec_which_value = %d", $node->nid, 1));

          global $user;
          // try to find both rec form
          if (user_access('administer nodes') || ($user->uid == $node->uid)) {
            print '<div>';
            if ($result->nid) {
              print '<h3 style="color:green">Recommendation #1 received</h3>';
            } else {
              print '<h3 style="color:red">Recommendation #1 not yet received</h3>';
            }
            print '</div>';

            print $node->content['group_recommendations']['field_recommenders_name']['#value'];
            print $node->content['group_recommendations']['field_recommenders_email']['#value'];
          }

          if (user_access('administer grant applications') && $result->nid) {
            $rec = node_load($result->nid);
            $rec = node_build_content($rec);
            print '<h3>Recommendation 1</h3>';
            if ($rec->field_dsaward_recommendation[0]['view']) {
            print "<div style=\"margin: 1em 0\">".$rec->field_dsaward_recommendation[0]['view']."</div>";
            }
            if ($rec->field_dsaward_rec_pdf[0]['view']) {
              print "<div style=\"margin: 1em 0\">".$rec->field_dsaward_rec_pdf[0]['view']."</div>";
            }
          }

          // try to find rec form
          $result = db_fetch_object(db_query("SELECT nid FROM {content_type_dsaward_rec} dr WHERE dr.field_dsaward_nid_value = %d AND dr.field_dsaward_rec_which_value = %d", $node->nid, 2));
          if (user_access('administer nodes') || ($user->uid == $node->uid)) {
            print '<div>';
            if ($result->nid) {
              print '<h3 style="color:green">Recommendation #2 received</h3>';
            } else {
              print '<h3 style="color:red">Recommendation #2 not yet received</h3>';
            }
            print '</div>';
            print $node->content['group_recommendations']['field_recommenders_name_0']['#value'];
            print $node->content['group_recommendations']['field_recommenders_email_0']['#value'];
          }

          if (user_access('administer grant applications') && $result->nid) {
            $rec = node_load($result->nid);
            $rec = node_build_content($rec);
            print '<h3>Recommendation 2</h3>';
            if ($rec->field_dsaward_recommendation[0]['view']) {
            print "<div style=\"margin: 1em 0\">".$rec->field_dsaward_recommendation[0]['view']."</div>";
            }
            if ($rec->field_dsaward_rec_pdf[0]['view']) {
              print "<div style=\"margin: 1em 0\">".$rec->field_dsaward_rec_pdf[0]['view']."</div>";
            }
          }

          if (isset($node->content['group_additional_info_0ptional']['#children'])) {
            print '<h3>Additional Info</h3>';
            print $node->content['group_additional_info_0ptional']['#children'];
          }

          if (user_access('administer nodes')) {
            print $node->content['group_legal_stuff']['#children'];
            print $node->content['field_where_did_you_hear']['#value'];
            print $node->content['field_application_status']['#value'];
          }

          ?>
	</div>
	  <?php if ($links): ?>
    <div class="links">
      <?php //print $links; ?>
    </div>
  <?php endif; ?>
<? } }?>
