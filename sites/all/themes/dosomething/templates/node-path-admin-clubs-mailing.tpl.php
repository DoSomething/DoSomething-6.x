<?php
header("Content-type: application/csv");
header("Content-Disposition: attachment; filename=clubs-mailing.csv");
header("Pragma: no-cache");
header("Expires: 0");

$create_date = '2011-05-15';
$proj_date = '2010-12-23';

$sql = "
SELECT

n.title AS club_name,
n.status AS published,
DATE(FROM_UNIXTIME(n.created)) AS created,
cc.nid AS club_nid,
CONCAT('http://www.dosomething.org/node/', cc.nid) AS url,
CONCAT('http://www.dosomething.org/user/', n.uid, '/edit') AS leader,

cc.field_club_address_value AS add1,
cc.field_club_city_value AS city,
cs.field_club_state_value AS state,
cfcz.field_club_zip_value AS zip,
cc.field_clubs_meeting_location_value AS meetings,
cfys.field_yacapp_school_type_value AS school_type,
cc.field_school_level_value AS school_level,

cfn.field_name_value AS fname,
cfnl.field_name_last_value AS lname,
cfclb.field_club_leader_birthdate_value AS bday,
cfe.field_email_value AS mail,
cfpq.field_phone_required_value AS phone,
cc.field_club_intended_role_value AS role,
cc.field_club_member_1_email_value AS me1,
cc.field_club_member_2_email_value AS me2,
cc.field_club_member_3_email_value AS me3,
cc.field_club_member_4_email_value AS me4,

cc.field_club_student_leader_first_value AS student_leader_first,
cc.field_club_leader_last_name_value AS student_leader_last,
cc.field_club_leader_email_value AS student_leader_email,

(SELECT COUNT(DISTINCT pn.nid) FROM og_ancestry ogp INNER JOIN node pn ON pn.nid = ogp.nid WHERE ogp.group_nid = cc.nid AND pn.type = 'project') AS number_of_projects,
cc.field_club_expected_members_value AS expected_members,
(SELECT COUNT(*) FROM og_uid WHERE og_uid.nid = n.nid AND og_uid.is_active = 1) AS site_members,
(SELECT DATE(FROM_UNIXTIME(created)) FROM og_ancestry ogp INNER JOIN node pn ON pn.nid = ogp.nid WHERE ogp.group_nid = cc.nid AND pn.type = 'project' GROUP BY pn.nid ORDER BY changed DESC LIMIT 0,1) AS p1_created,
(SELECT DATE(FROM_UNIXTIME(changed)) FROM og_ancestry ogp INNER JOIN node pn ON pn.nid = ogp.nid WHERE ogp.group_nid = cc.nid AND pn.type = 'project' GROUP BY pn.nid ORDER BY changed DESC LIMIT 0,1) AS p1_updated,
(SELECT DATE(FROM_UNIXTIME(created)) FROM og_ancestry ogp INNER JOIN node pn ON pn.nid = ogp.nid WHERE ogp.group_nid = cc.nid AND pn.type = 'project' GROUP BY pn.nid ORDER BY changed DESC LIMIT 1,1) AS p2_created,
(SELECT DATE(FROM_UNIXTIME(changed)) FROM og_ancestry ogp INNER JOIN node pn ON pn.nid = ogp.nid WHERE ogp.group_nid = cc.nid AND pn.type = 'project' GROUP BY pn.nid ORDER BY changed DESC LIMIT 1,1) AS p2_updated,
(SELECT name FROM `term_node` tn INNER JOIN term_data td ON tn.tid = td.tid WHERE nid = cc.nid AND (tn.vid = 15 OR tn.vid = 17) ORDER BY tn.tid DESC LIMIT 0,1) AS heard_about,
(SELECT GROUP_CONCAT(IF(nid, name, '') SEPARATOR ':')
FROM term_hierarchy th
INNER JOIN term_data td ON th.tid = td.tid
LEFT JOIN term_node tn ON tn.tid = th.tid
WHERE th.parent = 0 AND td.vid = 5 AND nid = cc.nid
ORDER BY name) AS causes

FROM

node n

INNER JOIN content_type_club cc ON cc.vid = n.vid
LEFT JOIN users u ON n.uid = u.uid
LEFT JOIN content_field_club_state cs ON cs.vid = cc.vid

LEFT JOIN content_field_name cfn ON cfn.vid = cc.vid
LEFT JOIN content_field_name_last cfnl ON cfnl.vid = cc.vid
LEFT JOIN content_field_email cfe ON cfe.vid = cc.vid
LEFT JOIN content_field_club_leader_birthdate cfclb ON cfclb.vid = cc.vid
LEFT JOIN content_field_phone_required cfpq ON cfpq.vid = cc.vid
LEFT JOIN content_field_club_zip cfcz ON cfcz.vid = cc.vid
LEFT JOIN content_field_yacapp_school_type cfys ON cfys.vid = cc.vid

WHERE

n.type = 'club'
 AND
DATE(FROM_UNIXTIME(n.created)) > '$create_date' OR (SELECT DATE(FROM_UNIXTIME(changed)) FROM og_ancestry ogp INNER JOIN node pn ON pn.nid = ogp.nid WHERE ogp.group_nid = cc.nid AND pn.type = 'project' GROUP BY pn.nid ORDER BY changed DESC LIMIT 0,1) > '$proj_date'
GROUP BY cc.nid
";

$result = db_query($sql);

$field_map = array(
 'Club' => 'club_name',
 'Published' => 'published',
 'Created' => 'created',
 'Club NID' => 'club_nid',
 'URL' => 'url',
 'Leader' => 'leader',
 'Address' => 'add1',
 'City' => 'city',
 'State' => 'state',
 'Zip' => 'zip',
 'Meetings' => 'meetings',
 'School_Type' => 'school_type',
 'School_Level' => 'school_level',
 'First' => 'fname',
 'Last' => 'lname',
 'Birthday' => 'bday',
 'Mail' => 'mail',
 'Phone' => 'phone',
 'Role' => 'role',
 'SL_First' => 'student_leader_first',
 'SL_Last' => 'student_leader_last',
 'SL_Email' => 'student_leader_email',
 '# of projects' => 'number_of_projects',
 'Expected # of Members' => 'expected_members',
 '# of Members on site' => 'site_members',
 'Project 1 Created' => 'p1_created',
 'Project 1 Updated' => 'p1_updated',
 'Project 2 Created' => 'p2_created',
 'Project 2 Updated' => 'p2_updated',
 'Heard About' => 'heard_about',
 'Member 1' => 'me1',
 'Member 2' => 'me2',
 'Member 3' => 'me3',
 'Member 4' => 'me4',
);

$cause_list = db_query("
SELECT name FROM term_hierarchy th INNER JOIN term_data td ON th.tid = td.tid WHERE th.parent = 0 AND td.vid = 5 ORDER BY name");
$causes = array();
while ($cause = db_fetch_object($cause_list)) {
 $causes[] = $cause->name;
}

print implode(',', array_keys($field_map)) . ',"' . implode('","', $causes) . "\"\n";

while ($club = db_fetch_object($result)) {
 $row = array();
 foreach ($field_map as $col) {
  $row[] = '"' . str_replace('"', '""', $club->$col) . '"';
 }
 $interests = explode(':', $club->causes);
 foreach ($causes as $cause) {
  $row[] = in_array($cause, $interests) ? TRUE : FALSE;
 }
 print implode(',', $row) . "\n";
}

exit();

?>
