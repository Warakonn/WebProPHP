<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itbook";
    $conn = mysqli_connect( $hostname, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");

    $BookID = $_POST['BookID'];
    $BookName = $_POST['BookName'];
    $Publish = $_POST['Publish'];
    $UnitPrice = $_POST['UnitPrice'];
    $UnitRent = $_POST['UnitRent'];

    if(isset($BookID)){
        $BDate = date("Y-m-d");
        $sqltxt = mysqli_query($conn,"UPDATE book book
        SET BookName='$BookName',Publish='$Publish',UnitPrice='$UnitPrice',UnitRent='$UnitRent'
        WHERE BookID='$BookID'") or die (mysqli_error($conn));
        echo "<br><br><CENTER><H2>แก้ไขข้อมูลเรียบร้อย</H2><BR><BR></CENTER>";
        echo "<CENTER><A HREF=\"listofbook.php\">แสดงข้อมูลทั้งหมด</A></CENTER>";
    }
    mysqli_close($conn);
?>
