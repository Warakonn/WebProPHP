<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST">
        <center>
            <table>
       Row 
      <tr> <input type = "text" name = "Row"></tr>
       Column 
       <input type = "text" name = "Col"><br><br>
       Random Start 
       <input type = "text" name = "start">
       Random End
       <input type = "text" name = "end">
       <input type = "submit">
</table>
        </center>
    </form>
</body>
</html>
<?php

// declare function page_header with argument and defualt value
    $row = $_POST['Row'];
    $col = $_POST['Col'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    
function minn ($random,$min)
{
    if($random < $min)
    {
        $min = $random;
    }
    return $min;
}
function maxx ($random,$max)
{
    if($random > $max)
    {
        $max = $random;
    }
    return $max;
}
function average($random)
{
    $avg = 0;
    $avg += $random;
     return $avg;
}
   
function page_header($title, $bgcolor = "0000") {
echo '<html lang="en"><head><meta charset="UTF-8">';
echo '<title>' . $title . '</title></head>';
echo '<body bgcolor="f000' . $bgcolor . '">';
}
// declare function page_footer
function page_footer($message = "ขอบคุณ") {
echo '<hr>' . $message ;
echo '</body></html>';
}

// declare function checker
function show_checker( $maxRow, $maxCol, $bgcolor1, $bgcolor2,$start,$end) {
echo "<p align='center'> Row = $maxRow , Column = $maxCol </p>";
echo '<table align="center" border="1">' ;
    $sa = 0;
    $mi = $end;
    $mx = $start;
for($r = 1; $r <= $maxRow; $r++) {
    echo '<tr >';
for($c = 1; $c <= $maxCol; $c++) {
    $ra = rand($start,$end);
    $mi = minn($ra,$mi);
    $mx = maxx($ra,$mx);
    $sa += average($ra);
    if ( $r % 2 == 1) {
echo '<td bgcolor="#' . (($c % 2 == 1)?$bgcolor1:$bgcolor2) . '">';
}
else {
echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
}
echo '  |', $ra . ' |  ' ,  '</td>';
}
echo '</tr>';
}
$sa = $sa / ($maxCol*$maxRow);
echo '</table>';
if ($maxRow == $maxCol) $message = "This is Square";
else $message = "This is Rectangle";
echo "<p align='center'> $message </p>";
echo $mi,"<br>";
echo $mx,"<br>";
echo $sa,"<br>";
}
page_header("Example 8-4", "FFDDEE");
show_checker($row, $col,"33ff99","ffff99",$start,$end);
page_footer("Thank You.");
?>