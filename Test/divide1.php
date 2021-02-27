<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ตัวอย่าง Control statement ที่ 9 </title></head>
</head>
<body>
<center>
<form method ="get">
Start Num <input type ="text" name ="num"><br>
End Num <input type ="text" name = "result"><br>
Dived num <input type = "text" name = "Divide"><br><br>
<input type ="submit" name = "sumbit"></center>
<?php
        if(isset($_GET['sumbit'])){
            $start=$_GET['num'];
            $end=$_GET['result'];
            $div=$_GET['Divide'];
            echo "<br>";
            echo "<center>" ;
            checkNum($start,$end,$div);
                echo "<br>" ;
                countNum($start,$end,$div);
                echo "<br>" ;
                sumNum($start,$end,$div);
        }
            function checknum($start,$end,$div){
                $i = $start;
                do{
                    $start++;
                    if($start % $div ==0){
                        echo $start.",";
                    }
                }while($start<=$end);
            }
            function countNum($start,$end,$div){
                $resualt = 0 ;
                do{
                    $start++;
                    if($start % $div ==0){
                        echo $resualt+=1;
                    }
                }while($start<=$end);
                echo "จำนวนที่หารลงตัว = $resualt" ;
            }
            function sumNum($start,$end,$div){
                $total = 0 ;
                do{
                    $start++;
                    if($start % $div ==0){
                        echo $total+=$start;
                    }
                }while($start<=$end);
                echo "ผลรวมของตัวเลขที่หารลงตัว = $total" ;
            
            echo "</center>" ;
        }
?>
</body>
</html>