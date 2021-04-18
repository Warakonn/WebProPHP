<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itbook";
    $conn = mysqli_connect( $hostname, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");

    $id = $_GET['id'];
    $sql = "select * from book where BookID = $id";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
<head><title>แก้ไขข้อมูลหนังสือ</title></head>
<body>
    <form enctype="multipart/form-data" name="save" method="POST" action="saveupdatebook.php">
    <BR><BR>
        <table width="650" border="1" bgcolor="#FFFFFF" align = "center">
            <tr>
                <td colspan="6" bgcolor = "#3399CC" align = "center" height="21">
                <b>: : แก้ไขมูลหนังสือ : : </td>
            </tr>
            <tr>
                <td width = "200">รหัสหนังสือ : </td>
                <td width = "400"><input type="text" name="BookID" value="<?php echo "".$data["BookID"]."";?>" size="10" maxlength="5" readonly></td>
            </tr>
            <tr>
                <td width = "200" >ชื่อหนังสือ :</td>
                <td><input type="text" name="BookName" value="<?php echo "".$data["BookName"]."";?>" size="50" maxlength="50"></td>
            </tr>
            <tr>
                <td width = "200" >สำนักพิมพ์ :</td>
                <td ><input type="text" name="Publish" value="<?php echo "".$data["Publish"]."";?>" maxlength="25" size="20"></td>
            </tr>
            <tr>
                <td width = "200">ราคาที่ซ้ือ:</td>
                <td><input type="text" name="UnitPrice" value="<?php echo "".$data["UnitPrice"]."";?>" maxlength="25" size="20"></td>
            </tr>
            <tr>
                <td width = "200">ราคาที่เช่า:</td>
                <td><input type="text" name="UnitRent" value="<?php echo "".$data["UnitRent"]."";?>" size="20" maxlength="25"></td>
            </tr>
        </table>
    <br>
        <div align = "center">
            <input type="submit" name="Submit" value="แก้ไขข้อมูล" style="cursor:hand">
            <input type="reset" name="Reset" value="ยกเลิก" style="cursor:hand">
            <input type=button onClick="window.history.back()"  value="กลับหน้าหลัก">
        </div>
    </form>
</body>
</html>