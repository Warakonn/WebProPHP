<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
form.normal {
  border: 1px solid black;
  
}
table, th, td {
  border: 1px solid black;
  width:500px;
}
</style>
</head>

<body>
<center>
<header>

  <img src="img/header (1).jpg " style = "width:800px" >
  
</header>
Car Model
<form action="" class="normal" style = "width:800px"><br><br><br>
<label for="cars">Choose a car:</label>
  <select id="cars" name="cars">
    <option value="volvo">Accord</option>
    <option value="saab">Civic</option>
    <option value="fiat">Jazz</option>
    <option value="audi">City</option>
  </select>
  <input type="submit">
  <br><br>
<table>
    <tr>
    <td>picture</td><td>รุ่นรถยนต์</td><td>ราคารถยนต์(บาท)</td><td>อัตราดอกเบี้ย ต่อปี(ร้อยละ,%)</td>
    </tr>
    <tr>
    <td><img src="img/Accord.png" style = "width:100px"></td><td>Accord</td><td>1,799,000 </td><td>2.00</td>
    </tr>
    <tr>
    <td><img src="img/civic.png" style = "width:150px"></td><td>civic</td><td>1,145,000 </td><td>2.00</td>
    </tr>
    <tr>
    <td><img src="img/Jazz.png" style = "width:100px"></td><td>Jazz</td><td>754,000 </td><td>4.00</td>
    </tr>
    <tr>
    <td><img src="img/City.png" style = "width:150px"></td><td>City</td><td>749,000 </td><td>4.00</td>
    </tr>
</table><br>
</center>
</form>
</center>
</body>
</html>