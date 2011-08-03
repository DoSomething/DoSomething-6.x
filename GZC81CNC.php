<?php
  require_once './includes/bootstrap.inc';
  drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
  
  $file = fopen('scavpoints.csv', 'r');
  
  while ($row = fgetcsv($file))
  {
    $title = trim($row[0]);
    $zip = trim($row[1]);
    $points = $row[2];
    $error = 0;
    if ($title && $zip && $points) {
      $query = db_query("
  select n.nid,n.title,postal_code from node n
  inner join location_instance li on li.nid=n.nid
  inner join location l on li.lid=l.lid
  where postal_code='%s'
  and n.type='scavenger_2011_signup'
  and title like '%%%s%%' 
  ",$zip,$title);
      $error = 1;
      while ($nid = db_result($query)) {
        $error = 0;
        $node = node_load($nid);
        $node->field_team_points[0]['value'] = $points;
        //print '<pre>'.print_r($node).'</pre>';
        node_save($node);
      }
    } else {
      $error = 1;
    }
    if ($error) {
      print $title.','.$zip.','.$points.'<br>';
    }
  }
?>
