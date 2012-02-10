<?php

if($_POST['submit-zip-code'] == "Submit") {
	header("Location: http://www.hivtest.org/Results.aspx?strUrl=http://www.hivtest.org&Zip=" . $_POST['zip-code'] . "&SearchRadius=10&SrvcSTDTestCodes=0");
}

?>