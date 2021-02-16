<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        number : <input type="number" name = "number" value = "">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    
    if(isset($_GET["submit"])){
        $num = 0;
        $o = 0;
        $e = 0;
        $zero = 0;
        $r = 0;
        $num = $_GET["number"];
        if ($num <1){
            $r = true;
        }
        while($r < strlen ($num)){
       $checknum = $num%10;
       if($checknum % 2 == 0 && $checknum != 0){
           $e++;
       }elseif ($checknum%2!=0) {
           $o++;
       }elseif ($checknum==0) {
           $zero++;
       }
       $num = $num/10;
           }
           echo "Even".$e."<br>";
           echo "Odd".$o."<br>";
           echo "zero".$zero."<br>";
        }
    ?>
</body>
</html>