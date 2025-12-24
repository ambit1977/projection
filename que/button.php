<html>
<head>
<meta name="viewport" content="width=320; initial-scale=1; minimum-scale=1; maximum-scale=4.0;" />
<title>START ATRACTION</title>
<link rel="stylesheet" media="screen" href="css3-countdown-master/css/normalize.css" />
<link rel="stylesheet" media="screen" href="css3-countdown-master/css/style.css" />
<style>
body {
  background-color: black;
  color: white;
  text-align: center;
}
</style>
<script>

function start(){
  var date = new Date() ;
  var t = date.getTime() ;
  const xhr = new XMLHttpRequest();
  xhr.open('get', 'https://test.go2020.tokyo/projection/que/start.php?key=XmasCal&'+t);
  xhr.send();
  xhr.onreadystatechange = function() {
    if( xhr.readyState === 4 && xhr.status === 200) {
      console.log(this.responseText);
    }
  }
}

</script>
</head>
<body>
<h1>PRESS BUTTON TO START ATRACTION.</h1>
<button onClick="start();">START</button>
<!--?php
ini_set('display_errors', "On");
$key=$_GET["key"];
$que='STAR-TNOW';
if($key=='XmasCal') {
  file_put_contents("./que_list.txt", $que."\n", FILE_APPEND);
}
?-->
</body>
</html>
