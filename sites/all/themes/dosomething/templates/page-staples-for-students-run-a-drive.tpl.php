<?php include_once 'staples-header.php'; ?>

<div id="home-main" class="orange-gradient shadow rounded clearfix">

  <img src="/<?=$ds_micro;?>/sfs/run_a_drive.png" />
  <div id="run-drive-banner">
    <img src="/<?=$ds_micro;?>/sfs/run_a_drive-banner.jpg" width="823" height="313" alt="Lucy Hale at the 2010 Back Pack Party" />
    <img src="/<?=$ds_micro;?>/sfs/run_a_drive-sticky.png" alt="" id="sticky-top-right" />
    <a href="/staples-for-students/gallery" id="drive-gallery-link"><img
      src="/<?=$ds_micro;?>/sfs/check-out-gallery.png" alt="Check out the Photo Gallery" />
    </a>
  </div>
  <div id="intro" class="clearfix">
    <?php print $content; ?>
  </div>

</div>

<?php include_once 'staples-bottom.php'; ?>
<?php include_once 'staples-footer.php'; ?>
