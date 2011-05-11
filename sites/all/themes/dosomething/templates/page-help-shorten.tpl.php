<?php

$url=$_GET['url'];

if ($url) {
   print file_get_contents('http://api.bit.ly/v3/shorten?login=dsorg&apiKey=R_fd168701c212591a2fb58c6ccbdb9dd2&format=txt&longUrl='.$url);
}
?>

