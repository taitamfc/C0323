<?php
function sum($a,$b){
    return $a + $b;
}

$c = sum(5,7);//12
echo $c;


$z = 5;
function tong($x,$y){
    global $z;
    return $x + $y + $z;

    // return $x + $y + $GLOBALS['z'];
}
echo tong(1,2);//8