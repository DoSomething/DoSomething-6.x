<?php

//$query = db_query("select n.nid,gsid.field_great_schools_id_value as 'gsid',province,n.title,nr.body,latitude,longitude from node n inner join location l on l.eid=n.vid inner join node_revisions nr on n.nid=nr.nid and n.vid=nr.vid left join content_field_great_schools_id gsid on n.nid=gsid.nid and n.vid=gsid.vid where n.type='gys_2011' and longitude is not null and latitude is not null");

$query = db_query("select n.nid from node n inner join location_instance li on li.nid=n.nid and li.vid=n.vid inner join location l on li.lid=l.lid where n.type='gys_2011' and longitude is not null and latitude is not null");
$results = array();


while ($nid = db_fetch_object($query)) {
  $node = node_load($nid->nid);
  $node_body = node_build_content($node)->body;
  if ($node_body) {
    $title = $node->title;
    $zip = $node->locations[0]['postal_code'];
    $title_with_link = '<a href="/green-your-school/browse-schools?name='.$title.'&zip='.$zip.'">'.$title.'</a>';
    $results[] = array('nid' => $node->nid,
                       'gsid' => $node->field_great_schools_id[0]['value'],
                       'province' => $node->locations[0]['province'],
                       'latitude' => $node->locations[0]['latitude'],
                       'longitude' => $node->locations[0]['longitude'],
                       'zip' => $node->locations[0]['postal_code'],
                       'name_with_link' => $title_with_link,
                       'name' => $title,
                       'body' => $node_body,
                     );
  }
}
//print print_r($node,TRUE);
print json_encode($results);

?>
