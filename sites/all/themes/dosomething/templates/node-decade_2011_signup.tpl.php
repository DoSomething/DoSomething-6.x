<?
//Adding redirect here because when the redirect is done via rules, sometimes the node has not yet been created, so if you try to view it within a view, it may not show up on the first page load.
drupal_goto('thanks','nid='.$node->nid);

?>
