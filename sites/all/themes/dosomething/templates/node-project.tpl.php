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

<?php
  drupal_add_js(path_to_theme() . '/js/jcarousel/lib/jquery.jcarousel.min.js');
  drupal_add_js(path_to_theme() . '/js/project.js');
  drupal_add_css(path_to_theme() . '/js/jcarousel/style.css');
  drupal_add_css(path_to_theme() . '/css/project.css');
  drupal_add_css(path_to_theme() . '/js/jcarousel/skins/dosomething/skin.css');
?>

<?
if ($node->locations[0]) {
  $lat_lng_str = $node->locations[0]['latitude'].','.$node->locations[0]['longitude'];
?>
  <script type="text/javascript"> 
    function initialize() {
      var myLatlng = new google.maps.LatLng(<?=$lat_lng_str;?>);
      var myOptions = {
        zoom: 4,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
      
      var marker = new google.maps.Marker({
          position: myLatlng, 
          map: map,
          title:"<?=$title;?>"
      });   
    }
    $(document).ready(function() {
      initialize();
    });
  </script> 
<? } ?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">
  <?php print $user_picture; ?>

  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <?php if ($display_submitted) : ?>
    <div class="meta">
        <span class="submitted"><?php print $updated; ?></span>
    </div>
  <?php endif; ?>

  <div class="content">

    <?php if ($field_project_photo): ?>
      <ul id="project-carousel" class="jcarousel-skin-dosomething">
        <?php foreach($field_project_photo as $photo) : ?>
          <li><?php print $photo['view']; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <div class="box blue">
      <h2>the problem:</h2>
      <?php print check_markup($field_essay_see_it[0]['value']); ?>
    </div>

    <div id="stats" class="box blue">
      <h2>vital stats:</h2>
      <p>people impacted:</p>
      <?php print $field_num_people_impacted[0]['value']; ?>
      <p>people involved:</p>
      <?php print $field_num_people_involved_rendered; ?>
    </div>
    <div id="map_canvas"></div>

    <div style="clear:both"></div>

    <div class="box">
    <h2>why it's important:</h2>
      <?php print check_markup($field_essay_believe_it[0]['value']); ?>
    </div>

    <div class="box">
    <h2>the plan of action:</h2>
      <?php print check_markup($field_essay_build_it[0]['value']); ?>
    </div>

    <div class="box">
    <h2>how you can get involved:</h2>
      <?php print check_markup($field_others_involved[0]['value']); ?>
    </div>

    <div class="box">
    <h2>project updates</h2>
      <?php print views_embed_view('project_updates', 'default', $nid); ?>
    </div>

  </div>

  <?php print $links; ?>

</div> <!-- /.node -->
