<html>
<head><title>การก าหนดค่าตัวแปร</title></head>
<body>
<?php
$x = 100;
$y = 200;
$z = 300;
$add = $x + $y;
$sub = $z - $y;
$mul = $y * $z;
$di = $mul / 300;
$message = "Hello World";
echo $x; echo "<br />";
echo $y; echo "<br />";
echo $z; echo "<br />";
echo $add; echo "<br />";
echo $sub; echo "<br />";
echo $message; echo "<br />";
echo $x.'+'.$y.''.'='.$add; echo "<br >";
echo $z. '-' .$y.''.'='.$sub; echo "<br />";
echo $y. '*' .$z.''.'='.$mul; echo "<br />";
echo $mul. '/' .'300'.''.'='.$di; echo "<br />";

?>
</body>
</html>