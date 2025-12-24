<?php
ini_set('display_errors', "On");
$key=$_GET["key"];
$que='STAR-TNOW';
if($key=='XmasCal') {
  file_put_contents("./que_list.txt", $que."\n", FILE_APPEND);
}
?>
