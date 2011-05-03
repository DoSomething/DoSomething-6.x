<div class="botbBody">

<?php

$view_2011 = views_get_view('botb_entries_2011');
$view_2011->is_cacheable = 0;

$types = array();
$user_type = $_GET['type'];
if ($user_type == 'project' || $user_type == 'video') {
   $types[] = $user_type;
} else {
   $types[] = 'project';
   $types[] = 'video';
}

$position = count($view_2011->filter);

/*
$view_2011->filter[] =     array (
      'vid' => 230,
      'tablename' => '',
      'field' => 'node_data_field_campaign_project_type.field_campaign_project_type_value_default',
      'value' => $types,
      'operator' => 'OR',
      'options' => '',
      'position' => $position,
      'id' => 'node_data_field_campaign_project_type.field_campaign_project_type_value_default');
*/

//print views_build_view('block', $view_2011, NULL, TRUE, 10);
print $view_2011->execute_display('block');
print '<div style="clear:both"></div>';
?>

<!--<form id="browse-projects">
<label for="select-type">Browse by videos or advocacy projects:</label>
<select id="select-type">
<option value="" selected="selected">All</option>
<option value="video">Videos</option>
<option value="project">Advocacy projects</option>
</select>
</form>-->


<script type="text/javascript">
$(document).ready(function() {
  var type = '<?=$user_type;?>';
  $('#select-type').val(type);
  $('form#browse-projects select#select-type').change(function() {document.location = '?type='+this.value;});
});
</script>

<?


$view_2010 = views_get_view('botb_entries');
$view_2010->is_cacheable = 0;
//print views_build_view('block', $view_2010, NULL, TRUE, 10);
print $view_2010->execute_display('block');
print '<div style="clear:both"></div>';

?>

</div>
