<?php include_once 'staples-header.php'; ?>

<?php
  /*
   * This is a bad place for this code. This probably shouldn't be here.
   */
  $sql = 'SELECT nid FROM {node} WHERE type=\'sfs_report_gallery\';';
  $results = db_query($sql);
  $nodes = array();
  while ($nid = db_result($results)) {
    $nodes[] = node_load($nid);
  }
?>
<div id="home-main" class="orange-gradient shadow rounded clearfix">

  <img src="/<?=$ds_micro;?>/sfs/drives.png" />
  <div class="clearfix" style="text-align: center;">
    <script type="text/javascript">
      <?php
        $items = array();
        foreach ($nodes as $node) {
          foreach ($node->field_image as $img) {
            $filename = explode('/', $img['filepath']);
            $filename = $filename[count($filename)-1];
            $add['file'] = $filename;
            $add['description'] = $img['data']['description'];
            $add['title'] = $node->title;
            $add['height'] = image_get_info($img['filepath']);
            $add['height'] = $add['height']['height'];
            $items[$filename] = $add;
          }
        }
        $startImg = reset($items);
        echo 'var galleryImages = ' . json_encode($items);
      ?>
    </script>
    <?php print $content; ?>
    <h2 id="image-title"><?= $startImg['title']; ?></h2>
    <div id="current-image" style="height: <?= $startImg['height']; ?>px" >
      <img src="/files/<?= $startImg['file']; ?>" id="large-image" />
    </div>
    <p id="image-description"><?= $startImg['description']; ?></p>
    <div id="gallery-back"><img src="/<?=$ds_micro;?>/sfs/gallery-back.png" alt="back" /></div>
    <div id="gallery-next"><img src="/<?=$ds_micro;?>/sfs/gallery-next.png" alt="next" /></div>
    <div id="gallery-scroller">
    <?php
      $thumb = 'files/imagecache/sfs_gallery/';
      echo '<div id="gallery-page-0" class="gallery-page">';
      $i = 0;
      do {
        $item = current($items);
        if ($i % 12 == 0 && $i != 0)
          echo '</div><div id="gallery-page-'.($i/12).'" class="gallery-page">';
        $img = theme('imagecache', 'sfs_gallery', $item['file'], $item['title']);
        printf('<a href="#%s" class="gallery-image">%s</a>', $item['file'], $img);
        $i++;
      } while (next($items));
      echo '</div>';
    ?>
    </div>
  </div>

</div>

<?php include_once 'staples-bottom.php'; ?>
<?php include_once 'staples-footer.php'; ?>
