<?php
$x = 5;
$y = 10;

function mytest(){
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];

}
mytest();
    echo "<h1>$y</h1>";
?>