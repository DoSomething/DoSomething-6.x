<?php
echo "<br/>";
echo "<h3 class='blackflag'>Report Back</h3>";
if($_GET['reported'])
{
	echo "<br/><div class='form-item'>Thank you for reporting back</div>";
}
else
{
	if($GLOBALS['user']->uid)
	{

	 module_load_include('inc', 'node', 'node.pages');
	 $node = new stdClass();
	 $node ->type = 'campaign_cancer_2011';
	 $node ->name = $user->name;
	 print drupal_get_form('campaign_cancer_2011_node_form', $node);
	}
	 else
	{
		echo "<br/>You need to be <a href='http://www.dosomething.org/user/login?destination=node%2F713276'>logged in </a>to Report back";
		
	}
}
?>