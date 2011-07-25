<?php
  require_once './includes/bootstrap.inc';
  drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
  echo dechex(crc32('CHRIS JOHNSON'));
  
  $file = fopen('teams.csv', 'r');
  
  while ($row = fgetcsv($file))
  {
    $node = new StdClass();
    $node->type = 'scavenger_2011_signup';
    $node->created = time();
    $node->changed = $node->created;
    $node->status = 1;
    $node->promote = 0;
    $node->sticky = 0;
    $node->uid = 1;
    $node->title = $row[1];
    
    $node->locations[0]['postal_code'] = '_'.dechex(crc32($row[0]));
    node_save($node);
  }
?>