<?php if (!$page) {//Teaser?>
  <div class="node <?=$node->type ?>">
      <h2><?=l($title,'node/'.$node->nid);?></h2>
    <?=$content;?>
  </div>
<? } else {//Full view ?>
  <?php drupal_set_title($title . ' | Green Your School'); ?>
  <div class="node <?=$node->type ?>">
    <h2><?=$title;?></h2>
      <?
      $fields = array(
                  array('title' => 'Why is greening your school important to you?', 'field' => 'field_campaign_essay_why'),
                  array('title' => 'How did your project unfold?  What was the best part?', 'field' => 'field_campaign_essay_how'),
                  array('title' => 'What was the biggest challenge in running your program?', 'field' => 'field_campaign_essay_challenge'),
                  array('title' => 'How did you use technology to Green Your School?', 'field' => 'field_iyg_technology'),
            );
      foreach ($fields as $i => $field) {
        $txt = $node->{$field['field']}[0]['value'];
        $title = $field['title'];
        if ($txt) {
          print '<h3>'.$title.'</h3>'.check_markup($txt, 1, FALSE);
        }
      }
      ?>
  </div>
<? } ?>
