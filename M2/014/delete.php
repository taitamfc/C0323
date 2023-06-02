<?php
include_once 'db.php';
// echo '<pre>';
// print_r($_GET);
// echo '</pre>';

// 1. Lay gia tri tren URL
$id = $_GET['id'];

// 2. Viet cau SQL
$sql = "DELETE FROM `c10_mat_hang` WHERE MAHANG = $id";

// 3. Debug SQL
// echo $sql; die();

//4. Thuc thi SQL
$conn->exec($sql);

// 5. Chuyen huong
header("Location: list.php");
exit();