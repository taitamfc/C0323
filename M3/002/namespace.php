<?php
// Nhung file
include 'DongHa/Tam.php';
include 'GioLinh/Tam.php';
include 'VinhLinh/Tam.php';

// Use
use VinhLinh\Tam;
// Note: Cung class
use DongHa\Tam as TamDongHa;

$obj1 = new Tam();
$obj2 = new TamDongHa();

// Khoi tao doi tuong ma ko use
$obj3 = new GioLinh\Tam();

echo '<pre>';
print_r($obj1);
print_r($obj2);
print_r($obj3);
echo '</pre>';
