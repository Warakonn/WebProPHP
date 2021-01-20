<html>
<body>
   
    <?php
    $x = $_GET["x"];
    $y = $_GET["y"];
    $z = 0;
    $operator = $_GET["Operator"];
    
    switch($operator){
        case "+":
            echo "Sum=",$x + $y ;
            break;
        case "-":
            echo  "Sum=",$x - $y ;
            break;
        case "*":
            echo  "Sum=",$x * $y ;
            break;
        case "/":
            echo  "Sum=",$x / $y ;
            break;
    }
    ?>
    
</body>
</html>