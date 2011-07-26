<?php
// $Id: node.tpl.php,v 1.10 2009/11/02 17:42:27 johnalbin Exp $

/**
 * @file
 * Theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: Node body or teaser depending on $teaser flag.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $display_submitted: whether submission information should be displayed.
 * - $links: Themed links like "Read more", "Add new comment", etc. output
 *   from theme_links().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 *   The following applies only to viewers who are registered users:
 *   - node-by-viewer: Node is authored by the user currently viewing the page.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $build_mode: Build mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $build_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * The following variables are deprecated and will be removed in Drupal 7:
 * - $picture: This variable has been renamed $user_picture in Drupal 7.
 * - $submitted: Themed submission information output from
 *   theme_node_submitted().
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see zen_preprocess()
 * @see zen_preprocess_node()
 * @see zen_process()
 */
?>
  <div class="bg-body-top rounded"></div>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">
  <?php print $user_picture; ?>
<?
$current_path = preg_replace('/^\//', '', drupal_get_path_alias(request_uri()));
$last_path_item = preg_replace('/[?#].*/','',
                    array_pop(explode('/', $current_path)));
?>

<?
//global $user; if ($user->uid == 454869) { print '<pre>'.print_r($last_path_item,true).'</pre>'; }

?>

  <?php if (!$page): ?>
    <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>

  <div class="content">
  <div id="hunt-signup">
  <div class="longline"></div>

<?

if ($_GET['signedup']) {
  drupal_set_message('Great, you are signed up!  Here is your team page.  To invite more teammates, share the link to this page with your friends by using the facebook and twitter icons below, or send them an email!');
} ?>
<?
  if ($_GET['invite']) {
    $node = node_load(651742);
    $node->title = '';
    $submission = array();
    $enabled = TRUE;
    $preview = FALSE;
    $form = drupal_get_form('webform_client_form_651742', $node, $submission, $enabled, $preview);
    print $form; 
  } elseif ($_GET['key']) {
?>
  <p>Sweet, you're signed up!  We'll give you a heads before the next scavenger hunt.</p>
  <p>For now, stay tuned to our <a href="/campaigns">campaigns page</a> to participate in similar programs.  Share how you are taking action in your community and have a chance to win grants, scholarships, and other prizes.</p>
<?
  } else {
?>
<form id="dia-signup" action="http://org2.democracyinaction.org/dia/api/process.jsp" method="get">
<h3>Sign up for more info</h3>
<p>Wow, you guys rocked the scavenger hunt!  Be sure to check out photos on the <a href="/scavenger-hunt">home</a> and <a href="/scavenger-hunt/challenges">challenges</a> pages.  Sign up below to receive updates on the next hunt.</p>
<input type="hidden" value="supporter" name="table"/>
<input type="hidden" value="5216" name="organization_KEY"/>
<input type="hidden" value="groups" name="link"/>
<input type="hidden" value="103519" name="linkKey"/>
<input type="hidden" value="" target="_blank" name="redirect"/>
<label for="signup-fname">First Name:</label>
<input class="styled" id="signup-fname" type="text" name="First_Name" value="<?=$first;?>" />
<label for="signup-lname">Last Name:</label>
<input class="styled" id="signup-lname" type="text" name="Last_Name" value="<?=$last;?>" />
<label for="signup-email">Email:</label>
<input class="styled" id="signup-email" type="text" name="Email" value="<?=$email;?>"  />
<label for="signup-cell">Cell:</label>
<input class="styled" id="signup-cell" type="text" name="Cell_Phone" value="<?=$cell;?>"  />
<label for="signup-zip">Postal code:</label>
<input class="styled" id="signup-zip" type="text" name="Zip" value="<?=$zip;?>" />
<br/>
<input class="button button-wide shadow rounded" id="signup-button" type="submit" value="keep me posted" />
</form>

<?
/*    module_load_include('inc', 'node', 'node.pages');
    $node = new stdClass();
    $node ->type = 'scavenger_2011_signup';
    $node ->name = $user->name;
    print drupal_get_form('scavenger_2011_signup_node_form', $node);*/
  }
?>
  </div>
  <div id="hunt-node-body">
    <?php print $content; ?>
  </div>
  </div>

  <?php print $links; ?>
</div> <!-- /.node -->
 <div class="bg-body-bottom rounded"></div>
