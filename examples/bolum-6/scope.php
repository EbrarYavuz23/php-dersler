<?php 
$x = 5;

echo $x;

function test() {
    $GLOBALS["x"] = 10;
}

test();

echo $x;





?>