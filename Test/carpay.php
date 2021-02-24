<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 3px;
}
#t01 {
  width: 50;    
  background-color: #FFFF00;
}
#t02{
    align center;
}
</style>
<body>
    <center>
        <table border = 1 >
        <tr>
    <th id=t01>รุ่นรถยนต์</th>
    <th id=t01>ราคารถยนต์(บาท)</th> 
  </tr>
  <tr>
    <td>Accord</td>
    <td>1,799,000</td>
  </tr>
  <tr>
    <td>Civic</td>
    <td>1,149,000</td>
  </tr>
  <tr>
    <td>Jazz</td>
    <td>849,000</td>
  </tr>
  <tr>
    <td>City</td>
    <td>749,000</td>
  </tr>
        </table><br>
        <form method="post" action = carsell.php >
        <table>
        <tr>
        <td>
        ชื่อ-นามสกุล ลูกค้า : 
        </td>
        <td>
        <input type="text" name = "Name" value = "">
        </td>
        </tr>
        <tr>
        <td>
        จำนวนเงินต้องการผ่อนต่อ1งวด : 
        </td>
        <td>
        <input type="text" name = "Num" value = "">
        </td>
        </tr>
        <tr>
        <td>
        จำนวนงวดที่ต้องการ : 
        </td>
        <td>
        <select name="installment" id="installment" value = ""> 
            <option value=36>36</option>
            <option value=48>48</option>
            <option value=60>60</option>
            <option value=72>72</option>   
        </td>
        </tr>
        <tr>
       <td colspan="2" align="center"><input type="submit" value=" OK " ></td> 
        </tr>
        </form>
        </table>
    </center>
</body>
</html>