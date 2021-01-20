<?php
function mytest(){
    static $x = 0;
    echo $x.",";
    $x++;
}

mytest();
mytest();
mytest();


?>