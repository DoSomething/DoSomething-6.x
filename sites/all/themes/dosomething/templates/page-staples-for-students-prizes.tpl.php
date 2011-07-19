<?php include_once 'staples-header.php'; ?>

<div id="home-main" class="orange-gradient shadow rounded clearfix">
  
  <img src="/<?=$ds_micro;?>/sfs/prizes.png" alt="Prizes" />
  <a href="https://www.facebook.com/sharer/sharer.php?u=dosomething.org%2Fstaples-for-students"><img
    src="/<?=$ds_micro;?>/sfs/icon-fb.png" alt="Share on Facebook" style="margin: 0 0 10px 10px;" /></a>
  <a href="http://twitter.com/share"
      data-url="http://www.dosomething.org/staples-for-students"
      data-text="I took action for #education w/ @dosomething. get involved: staplesforstudents.org"><img
        src="/<?=$ds_micro;?>/sfs/icon-twitter.png" alt="Twitter share" style="margin: 0 0 10px 5px;"/></a> 
  <div class="clearfix prizes">
    <?php print $content; ?>
  </div>

</div>

<?php include_once 'staples-bottom.php'; ?>
<?php include_once 'staples-footer.php'; ?>
