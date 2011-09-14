<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/<?=$ds_micro.'/ew/ewaste.css';?>" type="text/css" media="all" />
</head>
<body class="<?php print $classes; ?>" onload="window.print()">

<?php if ($tabs): ?>
<div class="tabs"><?php print $tabs; ?></div>
<?php endif; ?>
<h2 class="title"><?php print $title; ?></h2>
<?php print $content; ?>

</body>
</html>