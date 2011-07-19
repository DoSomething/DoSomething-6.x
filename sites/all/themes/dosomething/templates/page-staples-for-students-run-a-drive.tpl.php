<?php include_once 'staples-header.php'; ?>

<div id="home-main" class="orange-gradient shadow rounded clearfix">

  <img src="/<?=$ds_micro;?>/sfs/run_a_drive.png" />
  <a href="https://www.facebook.com/sharer/sharer.php?u=dosomething.org%2Fstaples-for-students"><img
    src="/<?=$ds_micro;?>/sfs/icon-fb.png" alt="Share on Facebook" style="margin: 0 0 5px 10px;" /></a>
  <a href="http://twitter.com/share"
      data-url="http://www.dosomething.org/staples-for-students"
      data-text="I took action for #education w/ @dosomething. get involved: staplesforstudents.org"><img
        src="/<?=$ds_micro;?>/sfs/icon-twitter.png" alt="Twitter share" style="margin: 0 0 5px 5px;"/></a> 
  <div id="run-drive-banner">
    <img src="/<?=$ds_micro;?>/sfs/run_a_drive-banner.jpg" width="823" height="313" alt="Lucy Hale at the 2010 Back Pack Party" />
    <img src="/<?=$ds_micro;?>/sfs/run_a_drive-sticky.png" alt="" id="sticky-top-right" />
    <div id="drive-gallery-link">
        <a href="/staples-action-kit" target="_blank" class="button rounded shadow blue-gradient" style="margin-right: 10px;" >print flyers</a>
        <a href="/staples-for-students/gallery" class="button rounded shadow blue-gradient" style="margin-right: 10px;" >check out the gallery</a>
    </div>
  </div>
  <div id="intro" class="clearfix">
    <?php print $content; ?>
  </div>

</div>

<?php include_once 'staples-bottom.php'; ?>
<?php include_once 'staples-footer.php'; ?>
