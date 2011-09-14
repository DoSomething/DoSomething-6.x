<?php
  drupal_add_js(path_to_theme() . '/js/jcarousel/lib/jquery.jcarousel.min.js');
  drupal_add_js(path_to_theme() . '/js/project.js');
  drupal_add_css(path_to_theme() . '/js/jcarousel/style.css');
  drupal_add_css(path_to_theme() . '/js/jcarousel/skins/dosomething/skin.css');
  $path = isset($_GET['q']) ? $_GET['q'] : '<front>';
  $currPath = url($path, array('absolute' => TRUE));
  
    $url = url('node/'.$nid, array('absolute' => true));
    $request = "https://api.facebook.com/method/fql.query?format=json&query=select%20like_count%20from%20link_stat%20where%20url='$url'";
    $response = json_decode(file_get_contents($request), true);
    $likes = $response[0]['like_count'];
    
    $count = 0;
    $q = "SELECT name FROM users WHERE mail=";
    $users = array();
    
    foreach ($field_participant_emails as $email)
    {
        $res = db_result(db_query("$q'{$email['value']}'"));
        if($res != '')
        {
            $users[] = $res;
            $count++;
        }
    }
?>
    <div class="center">
    
    <?php if ($field_campaign_pictures && $field_campaign_pictures[0]['filepath']):
       $first_photo = array_shift($field_campaign_pictures);
       $full_size = image_get_info('/var/www/html/'.$first_photo['filepath']);
       $resized_path = imagecache_create_path('project_highlighted_photo', $first_photo['filepath']);
       $resized = image_get_info('/var/www/html/'.$resized_path);
       $full_size['file_size'] = 0;
       $resized['file_size'] = 0;
       $main_photo = $resized_path;
       ?>
       <a class="project-photo-wrapper" rel="lightbox[projectphotos]" title="<?=$first_photo['title'];?>" href="/<?=$first_photo['filepath'];?>">
         <img src="/<?=$main_photo;?>"/></a>
      <? if (sizeof($field_campaign_pictures)): ?>
      <ul id="project-carousel" class="jcarousel-skin-dosomething">
        <?php foreach($field_campaign_pictures as $photo) : ?>
          <li><?php print $photo['view']; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; endif; ?>
    
    <?php /*
    <div style="position: absolute; right: -3px; top: 135px; padding:5px; border: 3px solid #8d8e8d;" class="orange college">
    share this drive<br />
    <a rel="nofollow" href="http://www.facebook.com/share.php?u=<?php echo $currPath.'?social=true'; ?>" onclick="return popup(this)" target="_blank" class="fb_share_link"><img src="/sites/all/micro/icon-fb.png" alt="FB" /></a>
    <a rel="nofollow" href="http://twitter.com/share?url=<?php echo $node->field_short_url[0]['value']; ?>&text=<?php echo urlencode('Check out our Sports Equipment Drive and text SPORTSVOTE to 38383 and use our project code '.$node->nid.' when asked.'); ?>" target="_blank" onclick="return popup(this)" ><img src="/sites/all/micro/icon-twitter.png" alt="Twitter" /></a>
    </div>
    */?>
    <div style="margin-top: 20px;"><iframe src="http://www.facebook.com/plugins/like.php?app_id=257635354261217&amp;href=<?= urlencode(url('node/'.$nid, array('absolute' => true))); ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=trebuchet+ms&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe></div>
    <div class="college" id="text-info"><p><span class="orange">Like</span> this page to vote for our photo as<br /><span class="orange">Best picture of a team acting out a sports scene</span></p>
    <p>You can also text <span class="orange">SPORTSVOTE</span> to <span class="orange">38383</span> and enter our<br />team code (below) when prompted to vote for us AGAIN!</p>
    </div>
    <div id="special-code" class="orange college">use code: <?php echo $nid; ?></div>
    <h2 class="college"><span class="orange"><?php echo $field_votes[0]['value']; ?></span> mobile votes<br />
    <span class="orange"><?php echo $likes + $field_votes[0]['value']; ?></span> total votes</h2>
    <h2 class="college">Number of people involved: <span class="orange"><?php echo $field_campaign_number_of_people[0]['value']; ?></span></h2>
    <p class="college">What awesome things did you do to make your drive particularly successful?</p>
    <p><?php echo $field_campaign_essay[0]['value']; ?></p>
    
    <p class="college">Anything else we should know about your Sports Equipment Drive project?</p>
    <p><?php echo $field_anything_else[0]['value']; ?></p>
    
    </div>
    
    <div style="position:absolute; bottom: 50px; right:10px;">
        
    </div>