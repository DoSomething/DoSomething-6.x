##FUNCTIONS
#
function object_to_array($obj) {
    if(is_object($obj)) $obj = (array) $obj;
    if(is_array($obj)) {
        $new = array();
        foreach($obj as $key => $val) {
            $new[$key] = object_to_array($val);
        }
    }
    else $new = $obj;
    return $new;
}


##SET UP THE DATA
$response = drupal_http_request('http://www.google.com/calendar/feeds/dosomething.org_jsgslvhnqu0joravjo6pfkp7g8%40group.calendar.google.com/public/full?alt=json&orderby=starttime&max-results=5&singleevents=true&sortorder=ascending&futureevents=true');

$results_array = object_to_array(json_decode($response->data));
$p = array();
foreach ($results_array['feed']['entry'] as $result) {
  $p[] = array(
     'title' => $result['title']['$t'],
     'when' => str_replace('-','/',substr($result['gd$when'][0]['startTime'],5)),
     'link' => $result['gd$where'][0]['valueString']
  );
}


##DISPLAY THE DATA

print '<ul>';
foreach ($p as $i) {
  print '<li><a href="http://twitter.com/intent/tweet?text='.urlencode($i['title']).'&url='.$i['link'].'"><img src="/nd/logos/twitter.jpg" title="Tweet This" alt="Tweet This"></a>'.
        '<span class="date">'.$i['when'].' -</span> '.$i['title'].' <a href="'.$i['link'].'">'.$i['link'].'</a></li>';
}
print '</ul>';
