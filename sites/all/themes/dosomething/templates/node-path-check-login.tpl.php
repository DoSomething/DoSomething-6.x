<?php
if($GLOBALS['user']->uid)
{
	header( 'Location: http://www.dosomething.org/dosomething/college-survey' ) ;
}
 else
{
	header( 'Location: http://www.dosomething.org/user/login?destination=dosomething/college-survey' ) ;	
}

?>