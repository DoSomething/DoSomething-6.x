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
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">
  <?php print $user_picture; ?>

  <?php if (!$page): ?>
    <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>

  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <?php if ($display_submitted || $terms): ?>
    <div class="meta">
      <?php if ($display_submitted): ?>
        <span class="submitted">
          <?php
            print t('Submitted by !username on !datetime',
              array('!username' => $name, '!datetime' => $date));
          ?>
        </span>
      <?php endif; ?>

      <?php if ($terms): ?>
        <div class="terms terms-inline"><?php print $terms; ?></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <div class="content">
<h3>HAVE YOU SUBMITTED A PROJECT POSTING YET?</h3>
<div class = "box blue gainlayout">
<p><b>You must submit a project posting before you can submit a grant application.</b>  If you haven't posted your project yet <a href="http://www.dosomething.org/node/add/project" target="blank"> <b>CLICK HERE </b></a>.</p>
<p>(* This project posting can be a project idea that has not yet been completed. The project posting is public and for all Do Something members to view, your application is private and will only be viewed by Do Something grant administrators and grant judges.)</p></div>

<h3>GENERAL INFO</h3>
<div class = "box blue gainlayout">
<p>All fields with an * are required. </p>
<p><b>To save your application </b>and come back later just hit <b>"Submit"</b> at the bottom of the page and re-access your application through your profile page.  (Note: You must enter something in the required fields before hitting submit)</p>
<p><b> We strongly recommend that you write your essays in a separate document</b> (eg Microsoft Word, Google Docs) and then paste them into the boxes below, so that there's no chance you'll lose your essays if something goes wrong with the submission (not saying it will, but these are the interwebs. stuff happens).</p>
<p><b>Tech issues?</b> Submit a <a href="/node/add/help-ticket"><b>help ticket</b></a>  and John will get back to you really soon.</p>
<p><b>Other Questions?</b> Contact Mike at 212-254-2390 ext. 232 or <a href="mailto:clubs@dosomething.org">clubs@dosomething.org</a>.  <b>When inquiring about your grant please provide your USERNAME and a link of your PROJECT POSTING in the e-mail.</b> </p>
</div>
<h3>ELIGIBILITY RULES:</h3>
<p>
<ul class="logolist" id="eligib">
<li>The applicant must be 25 OR UNDER.</li>
<li>The applicant must be a U.S. or Canadian citizen (You will be asked to prove citizenship and age if you win).</li>
<li>You can APPLY for as many grants as you'd like, but you can only win ONE grant from Do Something in a twelve month period (excluding the Do Something Award). </li>
<li>You must be an Active Do Something Club to apply</li></ul></p>

<h3>DO SOMETHING GRANTS CANNOT BE USED TO FUND:</h3>
<p>
<ul class="logolist">
<li>Travel Costs (If you are looking for grants to help you cover a travel abroad experience check out mytravelbug.org or studyabroadfunding.org)</li>
<li>Individual Sponsorships</li>
<li>Shipping Costs </li>
<li>Individual School Fees (Do Something Grants are not educational scholarships)</li>
<li>Fundraisers</li></ul> </p>

<h3>CLUB GRANT APPLICATION</h3>

<?php

global $user;

if ($user->uid) {
module_load_include('inc', 'node', 'node.pages');
$node = new stdClass();
$node->type = 'grant';
print drupal_get_form('grant_node_form', $node);


} else { ?>

<p>To submit your application, you need to <a href="http://www.dosomething.org/user/login?destination=node%2F591579">login</a>. If you don't already have an account, you can <a href="http://www.dosomething.org/user/register?destination=node%2F591579">register</a> for one.</p>

<?php } ?>
  </div>

  <?php print $links; ?>
</div> <!-- /.node -->
