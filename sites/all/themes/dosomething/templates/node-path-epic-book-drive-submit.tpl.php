<div class="node <?=$node->type.' '.$last_path_item;?>">
   <div class="body">
    <div class="body-text">
<p>Make your book drive have a bigger impact by submitting a project below!  Projects are also a great way to show us how awesome you are and give you a chance to win prizes.  Submit a project to share your plan with others, to get more supporters, or be entered to win a prize!</p>

<p>After you submit your project, it will be visible in the <a href="/epic-book-drive/gallery">Epic Book Drive gallery</a>.</p>

<p><strong>Please Note:</strong> personal information obtained from your user profile (i.e. member.s email, location and cell phone number) will remain private and will be viewed only by DoSomething.org</p>

<?php
 global $user;
if (!$user->uid):
  $current_path = preg_replace('/^\//', '', drupal_get_path_alias(request_uri()));
  $urlencode_current_path = urlencode($current_path);
?>

  <p>Please <a href="/user/login?destination=<?=$urlencode_current_path;?>">login</a> if you are an existing user on DoSomething.org, or <a href="/user/register?destination=<?=$urlencode_current_path;?>">register</a> to report back on your school or group's progress.</p>


<?php
 else:
module_load_include('inc', 'node', 'node.pages');
 $node = new stdClass();
 $node ->type = 'campaign_ebd_2011';
 $node ->name = $user->name;
 print drupal_get_form('campaign_ebd_2011_node_form', $node );
 endif;
?>


<script type="text/javascript">
  $(document).ready(function() {
    $('form.campaign_ebd_2011_node_form').submit(function() { return updateProfile(this); });
  });
</script>

    </div>
   </div>
</div>


