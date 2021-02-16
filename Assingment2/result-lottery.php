<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:powderblue">
<?php
function check($n,$m,$random)
{
    
        if($n == $_SESSION['rand'])
            {
                echo "<br>ยินดีด้วยคุณถูกรางวัล<br>";
                echo $m * 60;
            }
        else
            {
                echo "<br>เสียใจด้วยคุณไม่ถูกรางวัล";
            }
}
    session_start();
    $num = $_POST['num'];
    $money = $_POST['money'];
    check($num,$money,$_SESSION['rand']);

    echo "<br>รางวัลเลขที่ออก ", $_SESSION['rand'];

    ?>
    <form action ="lottery.php" method ="POST">
    <input type ="submit" value = "ย้อนกลับ">
    </form>
</body>
</html>