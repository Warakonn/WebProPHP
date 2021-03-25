<html>
<body>

<?php
  $Car = $_GET['car'];
 if ($Car==1) {
    echo"<center>";
    echo"<img src='img/logo-accord.png'><br><img src='img/Accord.png' style = 'width:500px'>";
 }
else if ($Car==2) {
    echo"<center>";
    echo"<img src='img/logo-civic.png'><br><img src='img/civic.png' style = 'width:500px'>";
 }
 else if ($Car==3) {
    echo"<center>";
    echo"<img src='img/logo-Jazz.png'><br><img src='img/Jazz.png' style = 'width:500px'>";
 }
 else if ($Car==4) {
    echo"<center>";
    echo"<img src='img/logo-City.png'><br><img src='img/City.png' style = 'width:500px'>";

   }

?>
<?php

 echo '<center><form  method="get">';
 echo '<input type="submit" name = "submit" value="calculate"><br></form></center>';
 if(isset($_GET["submit"])){
        echo"12424245245";
    }
?>

</body>
</html>