<?php
$username   = 'root';
$password   = '123456';
$database   = 'c0523_long';
try {
    /*
    PDO     : pho bien hien nay
    mysqli  : 
    mysql   :
    */ 
    $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (Exception $e) {
    // echo $e->getMessage();
    echo '<h1>Khong the ket noi CSDL</h1>';
}