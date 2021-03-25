<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

table, th, td {
  border: 0px solid black;
  width:1000px;
  height:200px
}

</style>
</head>
<body>
<?php
if (isset($_POST['submit'])){
    $Car = $_POST['car'];
    if ($Car==1) {
        echo"<center>";
        echo"<table >";
        echo"<tr ><td rowspan='4'><img src='img/logo-accord.png'><img src='img/Accord.png' style = 'width:500px'><td><div style=' border: 1px solid black'>เลือกเงินดาวน์<br><br>เงินดาวน์ <input type='radio' name='d' >
        <select id='per' name='per'>
        <option value='15'>15%</option>
        <option value='20'>20%</option>
        <option value='25'>25%</option>
        <option value='30'>30%</option>
      </select>หรือ ระบุจำนวนเงิน<input type='text' id='money' name='money'>บาท<br><br></div></td><td>";
        echo"<tr><td><div style=' border: 1px solid black'>เลือกระยะเวลาผ่อนชำระ<br><br>ระยะเวลา
        <select id='c' name='c'>
        <option value='36'>36</option>
        <option value='48'>48</option>
        <option value='60'>60</option>
        <option value='72'>72</option>
      </select>งวด</div>";
      
      echo '<center><form  method="get">';
      echo '<input type="submit" name = "Submit" value="calculate"><br></form></center>';
      if(isset($_GET["Submit"])){
       echo"12424245245ท้ดาเาท้เาเา";
      }
      
        echo"</td></td></tr></tr></table>";
        echo"</center>";
    }
    if ($Car==2) {
        echo"<center>";
        echo"<table >";
        echo"<tr ><td rowspan='3'><img src='img/logo-civic.png'><img src='img/civic.png' style = 'width:500px'><td><div style=' border: 1px solid black'>เลือกเงินดาวน์<br><br>เงินดาวน์ <input type='radio' name='kg' value=1>
        <select id='cars' name='cars'>
    <option value='15'>15%</option>
        <option value='20'>20%</option>
        <option value='25'>25%</option>
        <option value='30'>30%</option>
      </select>หรือ ระบุจำนวนเงิน<input type='text' id='fname' name='fname'>บาท<br><br></div></td><td>";
        echo"<tr><td>bhfhb<td>";
        echo"<tr><td>bhfhb<td>";
        echo"</td></td></tr></table>";
        echo"</center>";
            // echo"<center>";
            // echo"<table >";
            // echo"<tr ><td rowspan='3'><img src='img/logo-civic.png'><img src='img/civic.png' style = 'width:500px'><td>";
            // echo"<tr><td>bhfhb<td>";
            // echo"<tr><td>bhfhb<td>";
            // echo"</td></td></tr></table>";
            // echo"</center>";
        
    }
    if ($Car==3) {
        echo"<center>";
        echo"<table >";
        echo"<tr ><td rowspan='3'><img src='img/logo-Jazz.png'><img src='img/Jazz.png' style = 'width:500px'><td><div style=' border: 1px solid black'>เลือกเงินดาวน์<br><br>เงินดาวน์ <input type='radio' name='kg' value=1>
        <select id='cars' name='cars'>
    <option value='15'>15%</option>
        <option value='20'>20%</option>
        <option value='25'>25%</option>
        <option value='30'>30%</option>
      </select>หรือ ระบุจำนวนเงิน<input type='text' id='fname' name='fname'>บาท<br><br></div></td><td>";
        echo"<tr><td>bhfhb<td>";
        echo"<tr><td>bhfhb<td>";
        echo"</td></td></tr></table>";
        echo"</center>";
        // echo"<center>";
        // echo"<table >";
        // echo"<tr ><td rowspan='3'><img src='img/logo-Jazz.png'><img src='img/Jazz.png' style = 'width:500px'><td>";
        // echo"<tr><td>bhfhb<td>";
        // echo"<tr><td>bhfhb<td>";
        // echo"</td></td></tr></table>";
        // echo"</center>";
    }
    if ($Car==4) {
        echo"<center>";
        echo"<table >";
        echo"<tr ><td rowspan='3'><img src='img/logo-City.png'><img src='img/City.png' style = 'width:500px'><td><div style=' border: 1px solid black'>เลือกเงินดาวน์<br><br>เงินดาวน์ <input type='radio' name='kg' value=1>
        <select id='cars' name='cars'>
    <option value='15'>15%</option>
        <option value='20'>20%</option>
        <option value='25'>25%</option>
        <option value='30'>30%</option>
      </select>หรือ ระบุจำนวนเงิน<input type='text' id='fname' name='fname'>บาท<br><br></div></td><td>";
        echo"<tr><td>bhfhb<td>";
        echo"<tr><td>bhfhb<td>";
        echo"</td></td></tr></table>";
        echo"</center>";
        // echo"<center>";
        // echo"<table >";
        // echo"<tr ><td rowspan='3'><img src='img/logo-City.png'><img src='img/City.png' style = 'width:600px'><td>";
        // echo"<tr><td>bhfhb<td>";
        // echo"<tr><td>bhfhb<td>";
        // echo"</td></td></tr></table>";
        // echo"</center>";
    }

  }
    
?>

</body>
</html>