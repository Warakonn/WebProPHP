<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:powderblue;">
<center>
    <form action ="result-lottery.php" method="POST">
        <h1 style="color:blue" >โปรแกรม ตรวจ เลขท้าย 2 ตัว</h1>
        <font color="red" size ="6" face="arial">
         รางวัล เมื่อถูกเลขท้าย 2 ตัว (ต้นทุนซื้อ X 60 เท่า)<br>
         เช่น ถ้าซื้อ 10 บาท ถูกรางวัล รับเงิน 600 บาท <br>
        เลขเสี่ยงโชค[0-99]
        <input type = "number" name = "num" min="0" max="99" required><br>
        <h3>* ซื้อได้ ตั้งแต่ 10-500 บาท เท่านั้น</h3>
        <h3>จำนวนเงินที่คุณต้องการซื้อ [10-500 บาท] 
        <input type = "number" name = "money" min="10" max ="500" required>
        </h3>
        </font>
        <input type ="submit" name = "submit" value="ตรวจรางวัล">
    
    </form>
    <?php
    session_start();
    $random = rand(1,99);
    $_SESSION['rand'] = $random;
    ?>
</body>
</html>