<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Character</title>
</head>
<body>
    <form method="POST">
        <center>
        <h1>HW2-2 : Find ASCII</h1>
        Your Text: <input type="text" name="data" id="data"><br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Clear">
        </center>
        <br><br>
    </form>
    <?php
        if(isset($_POST["submit"])){
            echo "<center><h2>Count Char in Sentence</h2>" ;
            $data = $_POST["data"];
            $len = strlen($data);
            foreach(count_chars($data,1) as $value => $key){
                if ($value != 32){
                echo chr($value) ." : Ascii = " . $value . "<br>";
                }
               }
            }
    ?>
</body>
</html>