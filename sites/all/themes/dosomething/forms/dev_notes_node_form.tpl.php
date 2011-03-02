<div>
  <a id="dev-notes-toggle" href="#">View/Add Notes</a>
</div>

<div id="dev-notes-form-container">

<?php
  $notes = db_query('SELECT body, name, DATE(FROM_UNIXTIME(n.created)) as date FROM content_type_dev_notes dn INNER JOIN node_revisions nr ON dn.vid = nr.vid INNER JOIN node n ON dn.vid = n.vid INNER JOIN users u ON n.uid = u.uid WHERE dn.field_dev_notes_url_value = "%s"', $_GET['q']);
  while ($note = db_fetch_object($notes)) {
    $who = $note->name ? $note->name : 'Anonymous';
    print "<p>{$note->body} <span>-- $who, {$note->date}</span></p>";
  }
?>

<?php
  global $user; 
  $form['title']['#value'] = $user->name . ' -- ' . $_GET['q'];
  $form['field_dev_notes_url'][0]['value']['#value'] = $_GET['q'];
  $form['buttons']['submit']['#value'] = 'Add Note';
  $form['#redirect'] = $_GET['q'];
  print drupal_render($form['body_field']['body']);
  print drupal_render($form['buttons']['submit']);
?>
</div>

<div style="display: none;">
  <?php print drupal_render($form); ?>
</div>
