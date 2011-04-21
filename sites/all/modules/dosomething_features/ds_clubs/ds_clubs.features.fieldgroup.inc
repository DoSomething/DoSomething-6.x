<?php

/**
 * Implementation of hook_fieldgroup_default_groups().
 */
function ds_clubs_fieldgroup_default_groups() {
  $groups = array();

  // Exported group: group_agreement
  $groups['club-group_agreement'] = array(
    'type_name' => 'club',
    'group_name' => 'group_agreement',
    'label' => 'Club Agreement',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'weight' => '-10',
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '2' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '3' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
        'teaser' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'full' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'description' => '',
      ),
    ),
    'weight' => '-10',
    'group_type' => 'standard',
    'fields' => array(),
  );

  // Exported group: group_club_details
  $groups['club-group_club_details'] = array(
    'type_name' => 'club',
    'group_name' => 'group_club_details',
    'label' => 'Club Details',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'weight' => '-10',
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '2' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '3' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
        'teaser' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'full' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'description' => '',
      ),
    ),
    'weight' => '-10',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_clubs_meeting_location',
      '1' => 'field_club_meeting_frequency',
      '2' => 'field_club_first_meeting',
      '3' => 'field_club_first_meeting_when',
      '4' => 'field_field_club_new',
      '5' => 'field_club_url',
      '6' => 'field_school',
      '7' => 'field_yacapp_school_type',
      '8' => 'field_school_level',
    ),
  );

  // Exported group: group_club_leader_info
  $groups['club-group_club_leader_info'] = array(
    'type_name' => 'club',
    'group_name' => 'group_club_leader_info',
    'label' => 'Club Leader',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => 'This information won\'t be visible on the club\'s page, but we need to collect it in order to get your club approved. Please complete these fields to the best of your ability.',
      ),
      'display' => array(
        'weight' => '-10',
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '2' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '3' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
        'teaser' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'full' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'description' => '',
      ),
    ),
    'weight' => '-10',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_name',
      '1' => 'field_name_last',
      '2' => 'field_club_leader_birthdate',
      '3' => 'field_email',
      '4' => 'field_phone_required',
      '5' => 'field_club_intended_role',
    ),
  );

  // Exported group: group_club_members
  $groups['club-group_club_members'] = array(
    'type_name' => 'club',
    'group_name' => 'group_club_members',
    'label' => 'Club Members',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => 'Please provide 4 email addresses of other Club Members.
Contact Clubs@dosomething.org if this is an issue, we\'re here to help :-)',
      ),
      'display' => array(
        'weight' => '-6',
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '2' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '3' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
        'teaser' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'full' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'description' => '',
      ),
    ),
    'weight' => '-6',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_club_expected_members',
      '1' => 'field_club_member_1_email',
      '2' => 'field_club_member_1_role',
      '3' => 'field_club_member_2_email',
      '4' => 'field_club_member_2_role',
      '5' => 'field_club_member_3_email',
      '6' => 'field_club_member_3_role',
      '7' => 'field_club_member_4_email',
      '8' => 'field_club_member_4_role',
    ),
  );

  // Exported group: group_club_photos_and_albums
  $groups['club-group_club_photos_and_albums'] = array(
    'type_name' => 'club',
    'group_name' => 'group_club_photos_and_albums',
    'label' => 'Club Media',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'weight' => '-4',
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '2' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '3' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
        'teaser' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'full' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'description' => '',
      ),
    ),
    'weight' => '-4',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_club_picture',
      '1' => 'field_project_photo',
      '2' => 'field_club_video',
    ),
  );

  // Exported group: group_student_leader_contact_i
  $groups['club-group_student_leader_contact_i'] = array(
    'type_name' => 'club',
    'group_name' => 'group_student_leader_contact_i',
    'label' => 'Student Leader Contact Information',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => 'These fields are required for anyone 26 and older! If you are 25 and under please ignore.',
      ),
      'display' => array(
        'weight' => '-9',
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '2' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '3' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
        'teaser' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'full' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'description' => '',
      ),
    ),
    'weight' => '-9',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_club_student_leader_first',
      '1' => 'field_club_leader_last_name',
      '2' => 'field_club_leader_email',
    ),
  );

  // Exported group: group_what_project_ideas_do_yo
  $groups['club-group_what_project_ideas_do_yo'] = array(
    'type_name' => 'club',
    'group_name' => 'group_what_project_ideas_do_yo',
    'label' => 'What project ideas do you have?',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => 'Need ideas? Check out our easy-to-run <a href="/campaigns" target="_blank">Cause Campaigns</a> or browse our <a href="/projects" target="_blank">Projects Section</a> for inspiration.',
      ),
      'display' => array(
        'weight' => '-8',
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '2' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '3' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
        'teaser' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'full' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'description' => '',
      ),
    ),
    'weight' => '-8',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_club_project_idea_1',
      '1' => 'field_club_project_idea_2',
      '2' => 'field_club_project_idea_other',
    ),
  );

  // Exported group: group_where_should_we_send_the
  $groups['club-group_where_should_we_send_the'] = array(
    'type_name' => 'club',
    'group_name' => 'group_where_should_we_send_the',
    'label' => 'Where should we send the Clubs Mailing',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'weight' => '-5',
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '2' => array(
          'format' => 'fieldset',
          'exclude' => 1,
        ),
        '3' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'label' => 'above',
        'teaser' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'full' => array(
          'format' => 'no_style',
          'exclude' => 1,
        ),
        'description' => '',
      ),
    ),
    'weight' => '-5',
    'group_type' => 'standard',
    'fields' => array(
      '0' => 'field_club_address',
      '1' => 'field_club_city',
      '2' => 'field_club_state',
      '3' => 'field_club_zip',
      '4' => 'field_field_club_country',
      '5' => 'field_club_is_school',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Club Agreement');
  t('Club Details');
  t('Club Leader');
  t('Club Media');
  t('Club Members');
  t('Student Leader Contact Information');
  t('What project ideas do you have?');
  t('Where should we send the Clubs Mailing');

  return $groups;
}
