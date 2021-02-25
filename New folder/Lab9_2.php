<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-2 </title>
</head>
<body>
</center>
<form method = 'GET'>
<center>
จำนวนนักเรียน : <input type="text" name = "student">
<input type="submit" name="submit" value="submit">
</form></center>
<br>

<?php
if(isset($_GET['submit'])){
$MaxStudent = $_GET['student'];
$grade ;
$SUM=[];
$A=0;
$B=0;
$C=0;
$D=0;
$F=0;
$score = array();
for($n = 0 ; $n < $MaxStudent; $n++) {
$score[$n] = rand(0, 100);
}
for ($i=0; $i<$MaxStudent ; $i++) { 
    $SUM[]=$score[$i];
}
$min = min($SUM);
$max = max($SUM);

echo '<center><font size="4" color="blue"> Grade Report </font></center>';
echo '<table border="1" align="center">';
echo '<tr><td align="center" width="90">Student No.</td>';
echo '<td align="center" width="90">Score</td><td align="center" width="90">Grade</td></tr>';
for($n = 0 ; $n < $MaxStudent; $n++) {
echo '<tr><td align="center" width="90">' . ($n+1 ) . '</td>';
echo '<td align="center" width="90">' . $score[$n] . '</td><td align="center" width="90">' . checkgarde($score[$n]) . '</td></tr>';
}
for($n = 0 ; $n < $MaxStudent; $n++){
    if ( checkgarde($score[$n]) == "A") {
        $A++;
    }
    else if ( checkgarde($score[$n]) == "B") {
        $B++;
    }
    else if ( checkgarde($score[$n]) == "C") {
        $C++;
    }
    else if ( checkgarde($score[$n]) == "D") {
        $D++;
    }
    else if ( checkgarde($score[$n]) == "F") {
        $F++;
    }
   
}
    
}
echo '<tr><td colspan="2" align="center"> Average Score : ';

echo average( $score, $MaxStudent);
echo '<tr><td td colspan="2" align="center">'.'Score min : '.$min.'</td></tr>';
echo '<tr><td td colspan="2" align="center">'.'Score max : '.$max.'</td></tr>';
echo '<tr><td td colspan="2" align="center">'.'A : '.$A.'</td></tr>';
echo '<tr><td td colspan="2" align="center">'.'B : '.$B.'</td></tr>';
echo '<tr><td td colspan="2" align="center">'.'C : '.$C.'</td></tr>';
echo '<tr><td td colspan="2" align="center">'.'D : '.$D.'</td></tr>';
echo '<tr><td td colspan="2" align="center">'.'F : '.$F.'</td></tr>';
echo '</td></td></tr></tr></table>';

function average($data, $max) {
    $total = 0;
    for($n = 0 ; $n < $max; $n++) {
    $total += $data[$n];
    }
    return( $total / $max );
    }
function checkgarde($score){
    
    if ($score >=80) {
        return $grade = "A";
    }
    elseif($score >=70){
        return $grade = "B";
    }
    elseif($score >=60){
        return $grade = "C";
    }
    elseif($score >=50){
        return $grade = "D";
    }
    elseif($score < 50){
        return $grade = "F";
    }
    
}
function checkminmax($score){
   
}

    ?>
    </body>
    </html>