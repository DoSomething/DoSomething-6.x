<?php

/* unpublish flagged comments first */
if (isset($_GET['bad_uid']) && !in_array($whitelisted_uids)) {
 $the_uid = isset($_GET['bad_uid']) ? $_GET['bad_uid'] : 480411;
 user_user_operations_block(array($the_uid));
 db_query("UPDATE comments SET status='1' WHERE uid='%s'", $the_uid);
}

$header = array(
 array(
  'data' => 'date',
  'field' => 'timestamp',
  'sort' => 'desc'
 ),
 array(
  'data' => 'Page',
  'field' => 'n.title',
 ),
 array(
  'data' => 'comment',
  'field' => 'comment'
 ),
 array(
  'data' => 'name',
  'field' => 'u.name'
 ),
 'unpublish'
);
$rows = array();

$sql = "
SELECT c.comment, u.name AS user_name, u.uid AS user_id, DATE(FROM_UNIXTIME(timestamp)) AS post_date, n.title AS n_title, n.nid AS n_nid

FROM {comments} c
INNER JOIN {users} u ON c.uid = u.uid
INNER JOIN {node} n ON n.nid = c.nid

WHERE c.status = 0 AND (c.comment LIKE '%href%' OR c.comment LIKE '%http%') AND u.uid NOT IN (".implode(',', $whitelisted_uids).')';

$count = "SELECT COUNT(*)
FROM {comments} c
INNER JOIN {users} u ON c.uid = u.uid
INNER JOIN {node} n ON n.nid = c.nid
WHERE c.status = 0 AND (c.comment LIKE '%href%' OR c.comment LIKE '%http%') AND u.uid NOT IN (".implode(',', $whitelisted_uids).')';

$result = pager_query(db_rewrite_sql($sql . tablesort_sql($header)), 10, 0, $count);

$distinct_uids = array();

while ($data = db_fetch_object($result)) {
  $rows[] = array($data->post_date, array('data'=> l($data->n_title, 'node/'.$data->n_nid)), array('data' => $data->comment, 'class' => 'comment'), l($data->user_name, 'user/'.$data->user_id), $data->user_id . '<br />' . l('Unpublish comments from: '.$data->user_name, 'comment-spam', array('query' => 'bad_uid='.$data->user_id)));
  $distinct_uids[$data->user_id] = 1;
}

print '<h3>List of user ids that appear in the table below</h3>';
print '<p>'.implode(',', array_keys($distinct_uids)).'</p>';

print theme('table', $header, $rows);
print theme('pager', NULL, 10);

?>

<style type="text/css">
div.node table {width: 800px;}
div.node table td {padding:10px;}
div.node td.comment {max-width:550px;word-break:break-word;}
div.node td.comment a {color:red;text-decoration:underline;}
</style>
