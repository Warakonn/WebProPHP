<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cal Grade</title>
</head>
<body>

    <form  method="GET">
    <center><h1>HW3 : Cal Grade</h1>
    Enter Final score : <input type="text" name="f" placeholder="0-30" required/><br><br>
    Enter Midterm score : <input type="text" name="m" placeholder="0-30" required/><br><br>
    Enter Assignment score : <input type="text" name="a" placeholder="0-20" required/><br><br>
    Enter Homework score : <input type="text" name="h" placeholder="0-20" required/><br><br>
    <input type="submit" name="submit" value="Submit"></center>
    </form>

    <?php
    
    if(isset($_GET['submit'])){
        $total = 0 ;
        $final = $_GET["f"];
        $mid = $_GET["m"];
        $assign = $_GET["a"];
        $homework = $_GET["h"];
                        
        
       if($final >= 0 && $final <= 30){

            if($mid >= 0 && $mid <= 30){

                if($assign >= 0 && $assign <= 20){

                    if ($homework >= 0 && $assign <= 20){
                       $total = $final + $mid + $assign + $homework;

                        echo "<h2>Final is $final";
                        echo "<h2>Mid is $mid"; 
                        echo "<h2>Assign is $assign";
                        echo "<h2>Homework is $homework";
                        echo "<h2>Total Score Is : $total";              
                        echo "<h2> Your Grade Is : ";

                         if ($total >=80){
                            echo "A";
                        }
                        else if ($total >=75){
                            echo "B+";
                        }
                        else if ($total >=70){
                            echo "B";
                        }
                        else if ($total >=65){
                            echo "C+";
                        }
                        else if ($total >=60){
                            echo "C";
                        }
                        else if ($total >=55){
                            echo "D+";
                        }
                        else if ($total >=50){
                            echo "D";
                        }
                        else {
                            echo "F";
                        }
                        
                    }else echo "Homework";
                } else echo "Assign";
            }else echo "Midgar";
       }else echo "Final";
       
}
    ?>

</body>
</html>