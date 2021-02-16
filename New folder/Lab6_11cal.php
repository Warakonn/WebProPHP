<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> โปรแกรมค านวณเกรด </title>
</head>
<body>
<?php
$hw = $_GET['hw'];
$midterm = $_GET['midterm'];
$final = $_GET['final'];
if ($hw > 30) $hw = 30;
if ($midterm > 35) $midterm = 35;
if ($final > 35) $final = 35;

echo "<p>";
echo "<b>ข้อมูลคะแนน </b><br />";
echo "Homework : <i> $hw </i> <br/>";
echo "Midterm : <i> $midterm </i> <br/>";
echo "Final : <i> $final </i> <br/>";
$total = $hw + $midterm + $final;

echo "Total Score : $total <br>";
if ($total >= 80) echo "<img src=https://cdn.discordapp.com/attachments/803260519888715848/808891994692517918/A.jpg <br>";
elseif ($total >= 70) echo "<img src=https://cdn.discordapp.com/attachments/803260519888715848/808891996278226974/B.jpg <br>";
elseif ($total >= 60) echo "<img src=https://cdn.discordapp.com/attachments/803260519888715848/808891997792108586/C.jpg <br>";
elseif ($total >= 50) echo "<img src=https://cdn.discordapp.com/attachments/803260519888715848/808891999210045460/D.jpg <br>";
else echo "<img src=https://cdn.discordapp.com/attachments/803260519888715848/808892004183310367/F.jpg <br>";
echo "<br>";
echo "<a href='Lab6_11.php'> <big>Back </big></a>";
?>

</body>
</html>