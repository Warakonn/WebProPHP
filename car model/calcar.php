<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

table, th, td {
  border: 1px solid black;
  width:1000px;
  height:200px
}

</style>
</head>
<body>
<?php
    $Car = $_POST['car'];
    if ($Car==1) {
        echo"<center>";
        echo"<table >";
        echo"<tr ><td rowspan='3'><img src='img/logo-accord.png'><img src='img/Accord.png' style = 'width:500px'><td>";
        echo"<tr><td>bhfhb<td>";
        echo"<tr><td>bhfhb<td>";
        echo"</td></td></tr></table>";
        echo"</center>";
    }
    if ($Car==2) {
        echo"<center>";
        echo"<table >";
        echo"<tr ><td rowspan='3'><img src='img/logo-civic.png'><img src='img/civic.png' style = 'width:500px'><td>";
        echo"<tr><td>bhfhb<td>";
        echo"<tr><td>bhfhb<td>";
        echo"</td></td></tr></table>";
        echo"</center>";
        
    }
    if ($Car==3) {
        echo"<center>";
        echo"<table >";
        echo"<tr ><td rowspan='3'><img src='img/logo-Jazz.png'><img src='img/Jazz.png' style = 'width:500px'><td>";
        echo"<tr><td>bhfhb<td>";
        echo"<tr><td>bhfhb<td>";
        echo"</td></td></tr></table>";
        echo"</center>";
    }
    if ($Car==4) {
        echo"<center>";
        echo"<table >";
        echo"<tr ><td rowspan='3'><img src='img/logo-City.png'><img src='img/City.png' style = 'width:600px'><td>";
        echo"<tr><td>bhfhb<td>";
        echo"<tr><td>bhfhb<td>";
        echo"</td></td></tr></table>";
        echo"</center>";
    }

      
    
?>
</body>
</html>