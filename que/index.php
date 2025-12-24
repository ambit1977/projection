<html>
<head>
<meta name="viewport" content="width=320; initial-scale=1; minimum-scale=1; maximum-scale=4.0;" />
<title>Watch your head.</title>
<link rel="stylesheet" media="screen" href="css3-countdown-master/css/normalize.css" />
<link rel="stylesheet" media="screen" href="css3-countdown-master/css/style.css" />
<style>
body {
  background-color: black;
  color: white;
  text-align: center;
}
</style>
</head>
<body>
<h1>Thank you !!<br>Open the door after few seconds.<br>Look up !!<br>&#x1F446;</h1>
<h1>ありがとうございます<br>すぐにドアが開くので<br>上をご覧ください</h1>
<?php
ini_set('display_errors', "On");
$que=$_GET["q"];
if(preg_match('/^[0-9a-f]{4}-[0-9a-f]{4}$/', $que)) {
  file_put_contents("./que_list.txt", $que."\n", FILE_APPEND);
  //echo $que;
}
?>
</body>
</html>