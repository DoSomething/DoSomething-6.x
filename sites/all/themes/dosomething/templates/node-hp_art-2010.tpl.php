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
<?php if (!$page) { //Teaser ?>
  <div class="node <?=$node->type ?>">
    <div class="gallery-design">
      <a href="<?='/'.drupal_lookup_path('alias', 'node/'.$node->nid)?>"><img src="/files/imagecache/<?=(arg(1) === 'gallery') ? 'hp_art_gallery' : 'hp_art_gallery_mini'; ?>/<?=$node->field_hp_art_design[0]['filepath'];?>" alt="<?=$node->title;?>" /></a>
    </div>
  </div>
<? } else { //Full view ?>
  <?php // print '<pre>'.print_r($node, TRUE).'</pre>'; ?>
  <div class="node <?=$node->type;?> gallery">
    <h2 class="title"><em><?=$title;?></em> by <?=$node->field_campaign_first_name[0]['value'];?></h2>
    <div id="design">
      <img src="/files/imagecache/hp_art_main/<?=$node->field_hp_art_design[0]['filepath'];?>" alt="<?=$node->field_campaign_first_name[0]['value'];?>" />
    </div>
    <div id="essay">
      <p class="question">Why is art education important to you?</p>
      <p class="answer"><?=$node->field_hp_art_essay[0]['value'];?></p>
    </div>

  <h2 style="margin-top: 1em;"><img src="/nd/hp_art/header_see_more.png" alt="See More" /></h2>
  <div style="width: 720px; margin: 0 auto;">
  <?php
    print views_embed_view('hp_art_gallery_mini');
  ?>
  </div>
  <div style="clear: both; padding: 0.5em 0;"></div>
  <a href="/make-art-save-art/gallery">&laquo; back to gallery</a>

    <div id="share" style="display:none;">
      <a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
    </div>
  </div>
<?php } ?>
