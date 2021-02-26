<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ( isset($_POST['Name']) && isset($_POST['Num']) && isset($_POST['installment']))
{
    $Name = $_POST['Name'];
    $Num = $_POST['Num'];
    $installment = $_POST['installment'];
    $Accord = 1799000;
    $Civic = 1149000;
    $Jazz = 849000;
    $City = 749000;
    
    $SUM=$Num * $installment;
    function carCheck($Name,$Num,$installment,$Accord, $Civic,$Jazz ,$City,$SUM){
    if ($SUM < $City) {
        if($SUM < $Jazz) {
            if ($SUM < $Civic) {
                if ($SUM < $Accord ) {
                    echo "<table align='center' border='2' width='350'>";
                    echo"<tr><td>ชื่อลูกค้า : </td><td>$Name</td></tr>";
                    echo"<tr><td>ผ่อนงวดละ : </td><td>$Num</td></tr>";
                    echo"<tr><td>ยอดรวมเงิน : </td><td>$SUM</td></tr>";
                    echo"<tr><td colspan='2' align='center'>ยอดรวมเงินของท่าน ไม่เพียงพอ ที่จะซื้อรถยนต์ได้</td></tr>";
                    echo"<tr><td colspan='2' align='center'><a href='carpay.php'><input type='submit' value='BACK TO HOME' ></a></td></tr>";
                    echo "</table>";
                                    }
                
            }
        }
    }
    else if($SUM >= $Accord||$SUM >= $Civic||$SUM >= $Jazz||$SUM >= $City ){  
        echo "<table align='center' border='2' width='350'>";
        echo"<tr><td>ชื่อลูกค้า : </td><td>$Name</td></tr>";
        echo"<tr><td>ผ่อนงวดละ : </td><td>$Num</td></tr>";
        echo"<tr><td>ยอดรวมเงิน : </td><td>$SUM</td></tr>";
        echo"<tr><td colspan='2' align='center'>รถที่ท่านสามารถเลือกซื้อได้</td></tr>";
        echo"<tr><td colspan='2' align='center'><a href='carpay.php'><input type='submit' value='BACK TO HOME' ></a></td></tr>";
        
        if ($SUM>= $Accord) {
            echo "<tr><td>Accord<img src='img/accord.png' alt='' style='width:300px'><td>$Accord</td></td></tr>";
        }
        if ($SUM>= $Civic) {
            echo "<tr><td>Civic<img src='img/civic.png' alt='' style='width:300px'><td>$Civic</td></td></tr>" ;
        }
        if ($SUM>= $Jazz) {
            echo "<tr><td>Jazz<img src='img/jazz.png' alt='' style='width:300px'><td>$Jazz</td></td></tr>" ;
        }
        if ($SUM>= $City) {
            echo "<tr><td>City<img src='img/city.png' alt='' style='width:300px'><td>$City</td></td></tr>" ;
        }
        echo "</table>";
        
            
}
    }
}
?>
    <?php
    carCheck($Name,$Num,$installment,$Accord, $Civic,$Jazz ,$City,$SUM);
    ?>


</body>
</html>