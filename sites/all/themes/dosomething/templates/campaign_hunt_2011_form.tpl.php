<?

list($team,$postal_code,$email_or_cell) = explode('HnzMneI', urldecode($_GET['team']));
$selected_day = urldecode($_GET['selected_day']);
$challenge = urldecode($_GET['challenge']);

$form['buttons']['submit']['#value'] = 'submit';
$form['title']['#value'] = $team;
$form['locations'][0]['postal_code']['#value'] = $postal_code;
$form['buttons']['submit']['#attributes'] = array('class' => 'button button-medium shadow rounded');

print '<h2>'.'Day '.$selected_day.' - '.$challenge.'</h2>';
print '<h3>'.$team.'</h3>';
print drupal_render($form['group_show_us_what_you_did']);
print drupal_render($form['field_campaign_number_of_people']);
print drupal_render($form['field_campaign_essay_how']);
print drupal_render($form['group_share_optional']);
print drupal_render($form['buttons']['submit']);


print '<div style="display:none;">'.drupal_render($form).'</div>';
?>

<style type="text/css">
#hunt-signup { display: none; }
</style>
