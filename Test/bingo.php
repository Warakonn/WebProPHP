<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  <button></button>
</style>
<body>
    
<center>
<?php 

function rander(){
  return $randnumber = rand(0,99); 
}
function checknum(){
  if (isset($_GET["submit"])){
  echo "test";
}
}
?>

<table border="1">
<tr>
    <?php
        $i = 0;
        while($i < 25) {
          if($i % 5 == 0) {
            echo "<tr>";
            
          }
          echo ("<td>".(rander()+$i)."</td>");
          $i++;
        }
        
  
    ?>
    <?php
    echo '<br>
    
    <center><input style=" width: 150px; font-size: 20px;" type="submit" 
    name="submit" value="START GAME">
    </center>'
    ;
    checknum();
    ?>
    
    
</tr>
</table>
</center>

</body>
</html>