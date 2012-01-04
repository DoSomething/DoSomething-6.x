<?php
$query = $_POST['args'] //NY Livingston Public School 
$phone = $_POST['phone']
$query_words = explode(" ", $query)

// Check the first word. Is it a state? or a number code? or something else?
$first_word = array_shift($query_words)

if ($first_word.length == 2){ //State. Maybe verify against a list of the 50 state abbrevs
	$state = $first_word
	$search_term = $query_words.join(" ")
	//Search Greatschools
	$url = "http://api.greatschools.org/search/schools?key=".API_KEY."&state=".$state."&q=".urlencode($search_term)."&limit=5"
	$sxml = simplexml_load_file($url);
	if($sxml->school.size > 0){
		//Possible Schools:
		$response = "We found " .($sxml->school.size). " matches:\n"
		foreach ($sxml->school as $school) {
			$response .= $school->gsid . ") " . $school->name . "\n"
		}
		$response .= "Please reply with the ID of your school"
	}else{
		//No results
		//Maybe try a shorter query, by dropping one word from $query_words until we do get results.
		//This is useful for dealing with signatures
		echo("I did not understand your reply, but I've asked a human to help.")
	}
	//Ask the user which one they meant
	//By using the GreatSchools id, we skip the need for remembering anything about the user.
}elseif(is_numeric($first_word)){ //Likely a Greatschools id
	$school_code = $first_word
	//Update Mobile Commons
	$update_url = "http://dosomething.mcommons.com/profiles/join?person[phone]=".$phone."&person[gs_school_code]=".$school_code."&opt_in_path=9999"
	post($update_url)

	//Thank the user
	echo("Thanks! You'll receive important alerts soon.")
}else{
	//Notify us that we couldn't process this
	mail("developers@dosomething.org", "Error from mData", "Error understanding: " . $query)
	echo("I did not understand your reply, but I've asked a human to help.")
}
?>