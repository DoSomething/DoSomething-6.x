<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
                    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <script src="jquery-latest.js"></script>
  <link rel="stylesheet" href="main.css" type="text/css" />
  <link rel="stylesheet" href="jquery.autocomplete.css" type="text/css" />
  <script type="text/javascript" src="jquery.bgiframe.min.js"></script>
   <script type="text/javascript" src="jquery.autocomplete.js"></script>
  <script>
  $(document).ready(function(){
    var data = "Core Selectors Attributes Traversing Manipulation CSS Events Effects Ajax Utilities".split(" ");
$("#example").autocomplete(data);
  });
  </script>
  <script type="text/javascript">
	function lookup(inputString) {
	
		if(inputString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("rpc.php", {queryString: ""+inputString+""}, function(data){
			
				if(data.length >0) {
					$('#suggestions').show();
					$('#autoSuggestionsList').html(data);
				}
			});
		}
	} // lookup
	
	function fill(thisValue) {
	
		$('#inputString').val(thisValue);
		setTimeout("$('#suggestions').hide();", 200);
	}
</script>
</head>
<body>
<!--
  API Reference: <input id="example" /> (try "C" or "E")
  -->
  <div>
		<form>
			<div>
				Type your College name:
				<br />
				<input type="text" size="30" value="" id="inputString" onkeyup="lookup(this.value);" onblur="fill();" />
			</div>
			
			<div class="suggestionsBox" id="suggestions" style="display: none;">
				
				<div class="suggestionList" id="autoSuggestionsList">
					&nbsp;
				</div>
			</div>
		</form>
	</div>
</body>
</html>
<?php

// Database configuration details
$database = array(
    'hostname' => 'db.dosomething.org',
    'username' => 'mobile',
    'password' => '7rmeQNAhEMqS2j6a',
    'database' => 'jqdev'
);

// Connect to the database using PDO.  Do not modify below.

// Well, I guess you could modify it if you want to.  You might want to change that
// "Could not connect to database message."  Maybe display a sad face instead.
try {
    $db = new PDO('mysql:host=' . $database['hostname'] . ';dbname=' . $database['database'], $database['username'], $database['password']);
	
} catch (PDOException $e) {
    echo 'Could not connect to database.';
    exit;
}

// Use PDO's prepared statements for security.
$queryString = 'SELECT * FROM `collegelist` order by college_name asc ';
$query = $db->prepare($queryString);

// Execute our prepared statement.  We don't particularly care about the result.
try {
echo "<br>";
    if($query->execute())
	 while ($row = $query->fetch()) {
	//print_r($row['college_name']);
	}
   $success = TRUE;	

} catch (PDOException $e) {
    $success = FALSE;
}

?>
