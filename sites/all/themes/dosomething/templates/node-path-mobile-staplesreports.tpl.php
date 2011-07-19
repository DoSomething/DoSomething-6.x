<?php
header("Content-type: application/csv");
header("Content-Disposition: attachment; filename=mobile-staples-signups-reports.csv");
header("Pragma: no-cache");
header("Expires: 0");

$create_date = '2011-06-30';
$proj_date = '2011-06-23';

//Need the following config since connecting to another database outside the production drupal database
global $db_url; // the internal variable that contains database link
if (!is_array($db_url)) {
	$default_db = $db_url;
	$db_url = array('default' => $default_db);
}
//set up the new database value
$db_url['mydb'] = 'mysql://dosomething:ZanzibaR1@db.dosomething.org/jqdev';
db_set_active('mydb');    // activation & execution same as explained above

//Executing query
$sql = "SELECT * FROM {staples_signups}"; 

$result = db_query($sql);

$field_map = array(
	 'Date' => 'date',
	 'Name' => 'name', 
	 'Email' => 'email',
	 'School' => 'school',
	 'Phone' => 'phone',
	 'Zip' => 'zip'
);

print implode(',', array_keys($field_map)) . ',"'. "\"\n";

while ($data = db_fetch_object($result)) {
	$row = array();
	foreach ($field_map as $col) {
		$row[] = '"' . str_replace('"', '""', $data->$col) . '"';  
	}
print implode(',', $row) . "\n";
}

db_set_active('default'); // set back to original
exit();

?>
