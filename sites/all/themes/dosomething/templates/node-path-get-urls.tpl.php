<?

$types_q = db_query("SELECT name,type from node_type");
$types = array();
while ($type = db_fetch_object($types_q)) {
  $types[trim($type->type)] = trim($type->name);
}


if ($_GET['content-type']) {

print '<h3>'.$types[$_GET['content-type']].'</h3>';
$urls_q = db_query("SELECT src,concat('http://www.dosomething.org/',dst) as 'dst' FROM node
inner join url_alias on concat('node/',nid)=src WHERE type='%s' AND dst not like '%%/feed'", $_GET['content-type']);

print '<textarea cols="100" rows="20" readonly="readonly">';
while ($url = db_fetch_object($urls_q)) {
  print $url->dst."\n";
}
print '</textarea>';
}
?>

<form method="get">
<select name="content-type">
<?

foreach ($types as $type => $name) {
  $selected = '';
  if ($_GET['content-type'] == $type) {
    $selected = ' selected ';
  }
  print '<option value="'.$type.'"'.$selected.'>'.$name.'</option>';
}

?>
</select><br>
<input type="submit" value="Get URLs">
</form>
