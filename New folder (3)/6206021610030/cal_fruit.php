<?php
    $fruit = $_POST["fruits"];
    $width = $_POST["width"];
    $kg = $_POST["kg"];
    if($fruit == 1){
       echo '<img src="image/1.png" alt="Apple" width="'.$width.'">' ;
       $price = 100 ;
       $total = $kg * $price ;
       
    }
    else if($fruit == 2){
        echo '<img src="image/2.png" alt="Orange" width="'.$width.'">' ;
        $price = 200 ;
        $total = $kg * $price ;
    }
    else if($fruit == 3){
        echo '<img src="image/3.png" alt="Strawberry" width="'.$width.'">' ; 
        $price = 300 ;
        $total = $kg * $price ;
    }
    echo "<br><h2>ราคาต่อกิโล : $price " ;
    echo "<br><h2>จำนวนกิโล : $kg " ;
    echo "<br><h2>ราคาต่อกิโล : $total " ;
?>