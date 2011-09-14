<div class="node project grant-alumni">
<? $photos = array(
      'grant' => 'GrantAlum.jpg',
      'scholarship' => 'scholarship-alumni.jpg'
    );
    $photo_file = $photos['grant'];
    $type = 'grant';
    if ($field_money_for[0]['value']) {
      $type = $field_money_for[0]['value'];
      $photo_file = $photos[$type];
    }
?>
  
  <img src="/files/layout/<?=$photo_file;?>" > <br />

  <?php
    if(sizeof($node->field_picture)) {
      $pic_path = $node->field_picture[0]['filepath'];
      $pic_html = theme('imagecache','111',$pic_path,'Photo','Photo',array('class' => 'alignleft', 'width' => '111', 'height' => '111'));
    }
  ?>

  <?php if (user_access('administer nodes')) : ?>
  <div style="background-color: rgb(255, 245, 222) ! important;" class="box">
  <h3>ADMIN VIEW</h3>
  <?php if(strlen($node->field_contact_information[0]['value'])):?>
  <strong>Contact Info:</strong>&nbsp;<?php print $node->field_contact_information[0]['value'];?>
  <?php endif;?>
  </div>
  <?php endif; ?>

  <div class="box blue">
  
  <h2><?php print($title); ?></h2>
  <?php if(strlen($pic_html)):?><?php print $pic_html;?><?php endif;?>

  <?php if(strlen($node->field_alumni_project[0]['view'])):?><strong>Project:</strong>&nbsp;<?php print $node->field_alumni_project[0]['view'];?>
  <br />
  <?php endif;?>

  <?php if(strlen($node->field_recipient_age[0]['view'])):?><strong>Age:</strong>&nbsp;<?php print $node->field_recipient_age[0]['view'];?>
  <br />
  <?php endif;?>

  <?php if(strlen($node->field_state_plain[0]['value'])):?><strong>State:</strong>&nbsp;<?php print $node->field_state_plain[0]['value'];?>
  <br />
  <?php endif;?>

  <?php if(strlen($node->field_year_awarded[0]['value'])):?><strong>Year Awarded:</strong>&nbsp;<?php print $node->field_year_awarded[0]['value'];?>
  <br />
  <?php endif;?>


  <br />


  <?php print $node->field_description[0]['view'];?>

  <?php if(strlen($node->content['body']['#value'])):?><p><strong>Project Updates:</strong>&nbsp;<?php print $node->content['body']['#value'];?></p><?php endif;?>

  <?php
  $result = db_query("SELECT

      field_are_you_still_involved_wi_value AS involved,
      field_give_us_a_brief_update_on_value AS new,
      field_anything_else_awesome_we__value AS awesome

      FROM

      {content_type_grant_alumni_update_form} au INNER JOIN {node} n ON au.vid = n.vid 

      WHERE

      n.uid = %d", $node->uid);

  while ($alumni_update = db_fetch_object($result)) {
    print '<h3>Alumni Update</h3>';
    print '<p><h4>Are you still involved with your project?</h4><p>'.$alumni_update->involved.'</p>';
    print '<h4>Give us a brief update on any projects you\'re currently involved with:</h4><p>'.$alumni_update->new.'</p>';
    print '<h4>Anything else awesome we should know?</h4><p>'.$alumni_update->awesome.'</p>';
  }
  ?>
  </div>

  <?= theme('cause_links', $node->nid); ?>
  <?= $cause_links; ?>

  <br />
    <p><a href="/<?=$type;?>s/alumni">&laquo; Back to <?=ucfirst($type);?> Alumni</a></p>

</div>
