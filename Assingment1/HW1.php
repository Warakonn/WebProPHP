<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1> Find Min Max and Average Number</h1>
    <form method = 'GET'>
    Num1 : <input type="text" name = 'num1' value = ''><br> 
    Num2 : <input type="text" name = 'num2' value = ''><br>
    Num3 : <input type="text" name = 'num3' value = ''><br>
    <input type="radio" name="choice" value="Minimum">
  <label >Minimum</label><br>
  <input type="radio" name="choice" value="Maximum">
  <label >Maximum</label><br>
  <input type="radio" name="choice" value="Average">
  <label >Average</label><br>
  <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if(isset($_GET["submit"])){
        $n1 = $_GET["num1"];
        $n2 = $_GET["num2"];
        $n3 = $_GET["num3"];
        $ch = $_GET["choice"];
        if($ch == "Minimum"){
            if ($n1<$n2 && $n1<$n3) 
            {
                  echo $n1;
            }
            elseif($n2<$n1 && $n2<$n3)
            {
                echo $n2;
            }
            elseif($n3<$n1 && $n3<$n2)
            {
                echo $n3;
            }
            
        }
        if($ch == "Maximum"){
            if ($n1>$n2 && $n1>$n3) 
            {
                  echo $n1;
            }
            elseif($n2>$n1 && $n2>$n3)
            {
                echo $n2;
            }
            elseif($n3>$n1 && $n3>$n2)
            {
                echo $n3;
            }
            
        }
        else if($ch == "Average"){
            echo ($n1+$n2+$n3) / 3 ;
        }
        }
        
       
    
    ?>
</center>
</body>
</html>