<?php

//$query = db_query("select n.nid,n.title,nr.body,latitude,longitude from node n inner join location l on l.eid=n.nid inner join node_revisions nr on n.nid=nr.nid and n.vid=nr.vid where n.type='gys_2011' and longitude is not null and latitude is not null");
$query = db_query("select n.nid,gsid.field_great_schools_id_value as 'gsid',province,n.title,nr.body,latitude,longitude from node n inner join location l on l.eid=n.vid inner join node_revisions nr on n.nid=nr.nid and n.vid=nr.vid left join content_field_great_schools_id gsid on n.nid=gsid.nid and n.vid=gsid.vid where n.type='gys_2011' and longitude is not null and latitude is not null");
$results = array();

while ($node = db_fetch_object($query)) {
  $results[] = $node;
}

print json_encode($results);

?>
