<?php

if($_POST['submit-zip-code'] == "Submit") {
	header("Location: http://feedingamerica.org/foodbank-results.aspx?zip=" . $_POST['zip-code']);
}

?>