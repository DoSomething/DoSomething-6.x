<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
                    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style type="text/css">
li{display:inline;}
</style>
  <script src="http://code.jquery.com/jquery-1.6.4.js"></script>
     <script type="text/javascript">
	function lookup(editString) {
	
		if(editString.length == 0) {
			// Hide the suggestion box.
			$('#suggestions').hide();
		} else {
			$.post("http://www.dosomething.org/nd/campaigns/spit/rpc.php", {queryString: ""+editString+""}, function(data){
			
				if(data.length >0) {
					$('#suggestions').show();
					$('#autoSuggestionsList').html(data);
				}
			});
		}
	} // lookup
	
	function fill(thisValue) {
	
		//$('#editString').val(thisValue);
		
		$('#editString').val(thisValue);
		setTimeout("$('#suggestions').hide();", 200);
	}
</script>
</head>
<body>
Hi  iiii 1111
  <div>
		<form>
			<div>
				Type your College name:
				<br />
				<!--
				<input type="text" size="30" value="" id="editString" onkeyup="lookup(this.value);" onblur="fill();" />
				-->
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
