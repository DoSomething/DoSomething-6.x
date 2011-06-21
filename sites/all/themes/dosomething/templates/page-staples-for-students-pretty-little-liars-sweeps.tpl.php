<?php include_once 'staples-header.php'; ?>

<div id="home-main" class="orange-gradient shadow rounded clearfix floral-bg">

  <?php
    if (isset($_GET['sid']))
    {
      $query = 'SELECT data FROM {webform_submitted_data} WHERE sid='.$_GET['sid'].' ORDER BY cid ASC;';
      $results = db_query($query);
      $rows = array();
      while ($row = db_result($results))
        $rows[] = $row;
      if ($rows[3] != '')
        $sticky = <<<STICKY
        <div class="custom-sticky">"'
                      + quote + '"<br />- ' + name_f + ' ' + name_l + '</div>
STICKY;
      echo <<<EOJS
      <script type="text/javascript">
      var name_f = '{$rows[0]}';
      var name_l = '{$rows[1]}';
      var quote = '{$rows[3]}';
      $(window).load(function () {
      Shadowbox.open({
          content:    '<img src="/sites/all/micro/sfs/popup-sweeps-thanks.png" alt="Thanks!" />'
                      + '<br />$sticky'
                      + '<img src="/sites/all/micro/sfs/popup-team-up.png" alt="Thanks!" />'
                      + '<a class="button button-medium rounded shadow blue-gradient" style="padding:8px 18px;" href="/staples-for-students/pretty-little-liars">join a PLL now</a>',
          player:     "html",
          height:     500,
          width:      450
        });
      });
      </script>
EOJS;
    }
  ?>
  <div class="clearfix">
    <?php print $content; ?>
  </div>
  <div id="pll-enter-win">
    <img src="/sites/all/micro/sfs/enter-girls.png" alt="PLL cast" id="cast" />
    <img src="/sites/all/micro/sfs/enter-join.png" alt="Join your favorite PLL star and she'll donate $1" id="enter-text" />
    <a class="button button-medium rounded shadow blue-gradient" href="/staples-for-students/pretty-little-liars" id="enter-join">join now</a>
  </div>
  <div id="pll-home-footer"></div>

</div>

<?php include_once 'staples-bottom.php'; ?>
<?php include_once 'staples-footer.php'; ?>
