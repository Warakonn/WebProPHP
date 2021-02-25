<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-2 </title>
</head>
<body>
<center>
<form method ="get">
 จำนวนนักเรียน <input type = "text" name = "num">
 <input type = "submit" name = "submit">
</form>
<?php
if(isset($_GET['submit'])){
$MaxStudent = $_GET['num'];
$score = array();
$grade = array();
$nmin = 0;
$nmax = 0;
$max = 0;
$min = 100;
$num = array() ; 
for ($i = 0 ; $i <=7 ; $i++) { $num[$i]; }

for($n = 0 ; $n < $MaxStudent; $n++) {
$score[$n] = rand(0, 100);
if ($score[$n] >= $max)
{   
    $nmax = $n;
    $max = $score[$n];
}
if ($score[$n] <= $min)
{
    $nmin = $n;
    $min = $score[$n];
}

if ($score[$n] >= 80)
{
    $grade[$n] ="A";
    $num[0]++; 
}
else if ($score[$n] >= 75)
{
    $grade[$n] = "B+";
    $num[1]++; 
}
else if ($score[$n] >= 70)
{
    $grade[$n] = "B";
    $num[2]++; 
}
else if ($score[$n] >= 65)
{
    $grade[$n] = "C+";
    $num[3]++; 
}
else if ($score[$n] >= 60)
{
    $grade[$n] = "C";
    $num[4]++; 
}
else if ($score[$n] >= 55)
{
    $grade[$n] = "D+";
    $num[5]++; 
}
else if ($score[$n] >= 50)
{
    $grade[$n] = "D";
    $num[6]++; 
}
else 
{
    $grade[$n] = "F";
    $num[7]++; 
}
}
echo '<center><font size="4" color="blue"> Grade Report </font></center>';
echo '<table border="1" align="center">';
echo '<tr><td align="center" width="90">Student No.</td>';
echo '<td align="center" width="90">Score</td>';
echo '<td align="center" width="90">Grade</td></tr>';
for($n = 0 ; $n < $MaxStudent; $n++) {
echo '<tr><td align="center" width="90">' . ($n+1 ) . '</td>';
echo '<td align="center" width="90">' . $score[$n] . '</td>';
echo '<td align="center" width="90">' . $grade[$n] . '</td></tr>';
}

echo '<tr><td colspan="3" align="center"> Average Score : ' . average( $score, $MaxStudent);
echo '<tr><td colspan="2" align="center"> Max Score : '.$max;
echo '<td align="center" >MaxNo. '.$nmax+1;
echo '<tr><td colspan="2" align="center">  Min Score :'.$min;
echo '<td align="center" >MinNo. '.$nmin+1;
echo '<tr><td align="center" > Grade A No.'.$num[0];
echo '<tr><td align="center" > Grade B+ No.'.$num[1];
echo '<tr><td align="center" > Grade B No.'.$num[2];
echo '<tr><td align="center" > Grade C+ No.'.$num[3];
echo '<tr><td align="center" > Grade C No.'.$num[4];
echo '<tr><td align="center" > Grade D+ No.'.$num[5];
echo '<tr><td align="center" > Grade D No.'.$num[6];
echo '<tr><td align="center" > Grade F No.'.$num[7];
echo '</td></tr></table>';
}
function average($data, $max) {
    $total = 0;
    for($n = 0 ; $n < $max; $n++) {
    $total += $data[$n];
    }
    return( $total / $max );
    }
    
    ?>
    </body>
    </html>