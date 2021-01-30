<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cal grade</title>
</head>

<body>
<center>
    <form method = "GET">
    <table style ="width :30%">
    <tr>
    <th>#</th>
    <th>รายวิชา</th>   
    <th>เกรด</th>  
    <th>หน่วยกิต</th>  
    </tr>

    <tr>
        <td>1</td>
        <td><input type="text" style = "width :90%" name="s1" require ></td>
        <td> <select name="grade1" id="GPA"> 
            <option value=4>A</option>
            <option value=3.5>B+</option>
            <option value=3>B</option>
            <option value=2.5>C+</option>
            <option value=2>C</option>
            <option value=2>D+</option>
            <option value=1.5>D</option>
            <option value=1>F</option>
        </td>
        <td><center> <select name="credit1" id="credits"> 
            <option value=3>3</option>
            <option value=2>2</option>
            <option value=1>1</option>
        </td>
    </tr>

    <tr>
        <td>2</td>
        <td><input type="text" style = "width :90%" name="s2" require ></td>
        <td> <select name="grade2" id="GPA"> 
            <option value=4>A</option>
            <option value=3.5>B+</option>
            <option value=3>B</option>
            <option value=2.5>C+</option>
            <option value=2>C</option>
            <option value=2>D+</option>
            <option value=1.5>D</option>
            <option value=1>F</option>
        </td>
        <td><center> <select name="credit2" id="credits"> 
            <option value=3>3</option>
            <option value=2>2</option>
            <option value=1>1</option>
        </td>
    </tr>

    <tr>
        <td>3</td>
        <td><input type="text" style = "width :90%" name="s3" require ></td>
        <td> <select name="grade3" id="GPA"> 
            <option value=4>A</option>
            <option value=3.5>B+</option>
            <option value=3>B</option>
            <option value=2.5>C+</option>
            <option value=2>C</option>
            <option value=2>D+</option>
            <option value=1.5>D</option>
            <option value=1>F</option>
        </td>
        <td><center> <select name="credit3" id="credits"> 
            <option value=3>3</option>
            <option value=2>2</option>
            <option value=1>1</option>
        </td>
    </tr>

    <tr>
        <td>4</td>
        <td><input type="text" style = "width :90%" name="s4" require ></td>
        <td> <select name="grade4" id="GPA"> 
            <option value=4>A</option>
            <option value=3.5>B+</option>
            <option value=3>B</option>
            <option value=2.5>C+</option>
            <option value=2>C</option>
            <option value=2>D+</option>
            <option value=1.5>D</option>
            <option value=1>F</option>
        </td>
        <td><center> <select name="credit4" id="credits"> 
            <option value=3>3</option>
            <option value=2>2</option>
            <option value=1>1</option>
        </td>
    </tr>

    <tr>
        <td>5</td>
        <td><input type="text" style = "width :90%" name="s5" require ></td>
        <td> <select name="grade5"  id="GPA"> 
            <option value=4>A</option>
            <option value=3.5>B+</option>
            <option value=3>B</option>
            <option value=2.5>C+</option>
            <option value=2>C</option>
            <option value=2>D+</option>
            <option value=1.5>D</option>
            <option value=1>F</option>
        </td>
        <td><center> <select  name="credit5"  id="credits"> 
            <option value=3>3</option>
            <option value=2>2</option>
            <option value=1>1</option>
        </td>
    </tr>
    </form>
    </table>
    <br>
    <input type ="submit" name = "submit">
</center>
<?php

    $sub1 = $_GET['s1']; 
    $sub2 = $_GET['s2']; 
    $sub3 = $_GET['s3']; 
    $sub4 = $_GET['s4']; 
    $sub5 = $_GET['s5'];

    $gr1 = $_GET['grade1']; 
    $gr2 = $_GET['grade2']; 
    $gr3 = $_GET['grade3']; 
    $gr4 = $_GET['grade4']; 
    $gr5 = $_GET['grade5'];

    $cr1 = $_GET['credit1'];
    $cr2 = $_GET['credit2'];
    $cr3 = $_GET['credit3'];
    $cr4 = $_GET['credit4'];
    $cr5 = $_GET['credit5'];

    $GPA ;
    $Credit;
    
?>
    <?php
        if(isset($_GET["submit"])){
    ?>
    <center>
    <table style="width:20%">
    <tr style="background-color:#FA9D89">
        <th>#</th>
        <th>ชื่อวิชา</th>
        <th>หน่วยกิต</th>
        <th>เกรด</th>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $sub1 ?></td>
        <td><?php echo $gr1 ?></td>
        <td><?php echo $cr1 ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td><?php echo $sub2 ?></td>
        <td><?php echo $gr2 ?></td>
        <td><?php echo $cr2 ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td><?php echo $sub3 ?></td>
        <td><?php echo $gr3 ?></td>
        <td><?php echo $cr3 ?></td>
    </tr>
    <tr>
        <td>4</td>
        <td><?php echo $sub4 ?></td>
        <td><?php echo $gr4 ?></td>
        <td><?php echo $cr4 ?></td>
    </tr>
    <tr>
        <td>5</td>
        <td><?php echo $sub5 ?></td>
        <td><?php echo $gr5 ?></td>
        <td><?php echo $cr5 ?></td>
    </tr>
    
    <?php
        $GPA  = $gr1 * $cr1; $Credit = $cr1;
        $GPA += $gr2 * $cr2; $Credit += $cr2;
        $GPA += $gr3 * $cr3; $Credit += $cr3;
        $GPA += $gr4 * $cr4; $Credit += $cr4;
        $GPA += $gr5 * $cr5; $Credit += $cr5;

        $GPA /= $Credit;
        ?>
        <tr>
    <th colspan="4"><?php echo "<center> GPA ที่ได้ : ", round ($GPA ,2),"</center>";?></th>
  </tr>
  </table>
  <br>
  </center>
  <?php 
    echo "";
        
        }
    ?>
</body>
</html>