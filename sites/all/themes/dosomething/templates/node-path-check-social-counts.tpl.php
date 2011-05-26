<?

$urls = preg_split('/\s+/', $_POST['urls']);

if ($_POST['group1'] != 'csv') {

?>

<p>Enter full URLs in the box below to check the number of Facebook and Twitter shares/likes/tweets.</p>

<form method="post">
<textarea name="urls" rows="20" cols="100"><?=implode("\n",$urls);?></textarea>
<input type="radio" name="group1" value="html" checked>View as HTML<br/>
<input type="radio" name="group1" value="csv">Download as Excel<br/>
<input type="checkbox" name="twitter" value="twitter">Include Twitter counts (takes longer to load) <br/>
<input type="submit">
</form>

<?
}

if (! $_POST['urls']) {
  return;
}

if ($_POST['group1'] == 'html') { ?>

  <style type="text/css">
    table { margin-top: 100px; }
  </style>

<? }


$max_from_fb_at_once = 100;

$i = 0;
$fql_url_base = 'http://api.facebook.com/method/fql.query?query=';
$url_base = 'http://www.dosomething.org/';
$fql_in_str = '';
$fql_str_array = array();

foreach ($urls as $url) {
    if (! $url) {
       continue;
     }
    $i++;
  if (! preg_match('/^http:/', $url)) {
    $url = $url_base.$url;
  }

    //drupal_http_request('http://developers.facebook.com/tools/lint/?url='.urlencode($url));

    $fql_in_str .= "'".$url."',";
    if ($i % $max_from_fb_at_once == 0) {
       $fql_in_str = substr($fql_in_str,0,-1);
       $query = 'SELECT url,like_count,total_count,share_count FROM link_stat WHERE url IN ('.$fql_in_str.')';
       $fql_str_array[] = $fql_url_base.urlencode($query);
       //print '<pre>Req: '.$fql_url_base.urlencode($query).'</pre>';
       $fql_in_str = '';
    }
}

if ($fql_in_str != '') {
        $fql_in_str = substr($fql_in_str,0,-1);
        $query = 'SELECT url,like_count,total_count,share_count FROM link_stat WHERE url IN ('.$fql_in_str.')';
        $fql_str_array[] = $fql_url_base.urlencode($query);
        //print '<pre>Req: '.$fql_url_base.urlencode($query).'</pre>';
        $fql_in_str = '';
}

$results = array();
$rows = array();

foreach ($fql_str_array as $i => $fb_query_url) {
   $response = drupal_http_request($fb_query_url);
   $fb_data = $response->data;

   $dom = new DOMDocument();                 
   $dom->loadXML( $fb_data );                

   $domlist=$dom->getElementsByTagName('*');   
   $sxe=(array)simplexml_import_dom($domlist->item(0));  

   $url_data = (array)$sxe['link_stat'];
   $url = $url_data['url'];
  if ($url_data['url']) {
    $row = array($url, $url_data['like_count'], $url_data['share_count'], $url_data['total_count']);
    if ($_POST['twitter']) {
       $count = get_twitter_count($url);
       $row[] = $count;
    }
    $rows[] = $row;
  } else {
   foreach ($url_data as $url_data_obj) {
      $url_data_array = (array)$url_data_obj->url;
      $url = $url_data_array[0];
      foreach (array('like_count','share_count','total_count') as $i => $field) {
        $field_data_array = (array)$url_data_obj->{$field};
        
        $field_data = $url_data_obj->{$field};
        $results[$url][$field] = $field_data_array[0];
      }
      $row = array($url, $results[$url]['like_count'], $results[$url]['share_count'], $results[$url]['total_count']);
      if ($_POST['twitter']) {
         $count = get_twitter_count($url);
         $row[] = $count;
      }
      $rows[] = $row;
   }
  }
}

$headers = array('url', 'FB Like Count', 'FB Share Count', 'FB Total Count');

if ($_POST['twitter']) {
  $headers[] = 'Tweet Count';
}

if ($_POST['group1'] == 'html') {
  print '<div id="results">'.theme_table($headers, $rows, array()).'</div>';
?>
<script type="text/javascript">
$(document).ready(function() { window.location.hash = "results"; });
</script>

<?
} else {

  header("Content-type: application/csv");
  header('Content-Disposition: attachment; filename=social-media-counts-'.date('Y-m-d').'.csv');
  header("Pragma: no-cache");
  header("Expires: 0");
  print implode(',', $headers)."\n";
  foreach ($rows as $row) {
    print implode(',', $row)."\n";
  }
  exit();

}

function get_twitter_count($url = '') {
   $response = drupal_http_request('http://urls.api.twitter.com/1/urls/count.json?url='.$url);
   $data = json_decode($response->data);
  return $data->count;
}






?>

