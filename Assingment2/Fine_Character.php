<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Find Ascii</title>
    </head>
    <body>
        <form method="POST"  >
            <center>
            <h1>HW2-1 : Find Character</h1>
            Your Text : <input type="text" name="data" ><br><br>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" value="Clear">
            <br><br>
        </form>
        <?php
            if(isset($_POST["submit"])){
                echo "<h2>Count Char in Sentence</h2>";
                $data = $_POST["data"];
                foreach(count_chars($data,1) as $value => $noun){
                    if($value == 32){
                        echo "Space";
                    }
                    echo chr($value) ," = ", $noun ,"<br>";
                }
            }
        ?>
        </center>
    </body>
</html>