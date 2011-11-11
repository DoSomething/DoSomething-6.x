<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=152997941450126";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>

  
<div class="content"<?php print $content_attributes; ?>>
<div id="artwork-page">
<h2><?php print $title ?> by <a href="/<?php print drupal_get_path_alias('user/' . $node->uid); ?>"><?php print $field_art2011_first[0]['value']; ?></a></h2>
<img src="/<?php print $url = imagecache_create_path('500_either_way', 
            $node->field_art2011_file[0]['filepath']); ?>" id="artwork">
<h3>SHARE THIS ARTWORK</h3>
<div id="artwork-fb">
<div class="fb-like" data-send="false" data-layout="box_count" data-width="50" data-show-faces="true"></div>
</div>
<div id="artwork-tw">
<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
<div>
   <a href="https://twitter.com/share" class="twitter-share-button"
      data-url="http://www.dosomething.org/<?php print drupal_lookup_path('alias',"node/".$node->nid) ?>"
      data-text="Support art in schools & help artists win $5000 by sharing @dosomething Make Art. Save Art designs! #makeartsaveart"
      data-related="dosomething:DoSomething.org"
      data-count="vertical">Tweet</a>
</div>
</div>
<div id="artwork-share">
<p>Is this your favorite "Make Art. Save Art." design? Share it with your social networks and the artist's representative to show that you support arts education in schools. 
</p>
<p>The design with the most "shares" will win $5000 for their school art program a $1000 college scholarship and a personal laptop computer.<p>
</div>

<h4>WHY IS ART EDUCATION IMPORTANT TO YOU?</h4>
<div id="artwork-why">
<?php print $field_art2011_whyart[0]['value']; ?>
</div>
</div>
</div>