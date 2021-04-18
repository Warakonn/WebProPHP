<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$score = 49.5;
$grade ;
if ($score >=80) {
    $grade = "A";
}
elseif($score >=70){
    $grade = "B";
}
elseif($score >=60){
    $grade = "C";
}
elseif($score >=50){
    $grade = "D";
}
elseif($score < 50){
    $grade = "F";
}
echo "Your score is : ".$score."<br>";
echo "Your grade is : ".$grade."<br>";
?>
</body>
</html>