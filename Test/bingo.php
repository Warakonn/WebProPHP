<html>
<body>
    <?php
    $j=0;
    $num = array();
    $renum = 0;
    for($n=0;$n<5;$n++){
        echo '<table border="1" align="center">';
        echo '<tr>';
        for($m=0;$m<5;$m++){
            $num[$j] = rand(1, 99);
            echo '<td align="center" width="90">'.$num[$j].'</td>';
            $j++;
        }
    }
    echo '</tr></table><br>';
    echo '<center><form  method="get">';
    echo '<input type="submit" name = "submit" value="Start Game"><br></form></center>';

    if(isset($_GET["submit"])){
        checkNum($num);
    }
    function checkNum($num){
        $renum = rand(1, 99);
        $count=0;
        $sup=1;
        $count1= 1;
        do{
            $renum = rand(1, 99);
                if ( in_array($renum,$num)){
                    echo "<font color = red >ครั้งที่ ".$count1.'='.$renum.' => ยินดีด้วย คุณมีเลขนี้</font><br>';
                    $count++;
                    $count1++;
                    if($count == 5){
                    }
                }
                else{
                    echo "ครั้งที่ ".$count1. " = ".$renum. ' => เสียใจด้วย คุณไม่มีเลขนี้<br>';
                    $count1++;
                }
        }while($count != 5);
        $count1-=1;
        echo "<font color = red >คุณจบ Bingo ในรอบที่ ".$count1 ."</font><br>";
        

    }
        
    ?>
</body>
</html>