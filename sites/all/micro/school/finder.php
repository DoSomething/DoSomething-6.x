<?php

include('/var/www/html/nd/school/finder.inc');
if (isset($_GET['state']) && isset($_GET['query'])) {
  print_searchSchools_query($_GET['state'],$_GET['query']);
} elseif (isset($_GET['state'])) {
  print_searchSchools_location($_GET['state'],$_GET['lat'],$_GET['lon']);
}

?>
