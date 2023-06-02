<?php
include_once 'db.php';
// echo '<pre>';
// print_r($_GET);
// echo '</pre>';

// 1. Lay gia tri tren URL
$id = $_GET['id'];

// 2. Viet cau SQL
$sql = "SELECT * FROM `c10_mat_hang` WHERE MAHANG = $id";

// 3. Debug SQL
// echo $sql; die();

$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
// Lay ve du lieu duy nhat
$row = $stmt->fetch();
// echo '<pre>';
// print_r($row);
// die();


if ( $_SERVER['REQUEST_METHOD']=="POST" ){
    // 1. In ra du lieu
    // echo '<pre>';
    // print_r ($_REQUEST);
    // die();
    
    // 2. Luu vao bo nho: copy ko go
    $TENHANG    = $_REQUEST['TENHANG'];
    $MACONGTY   = $_REQUEST['MACONGTY'];
    $MALOAIHANG = $_REQUEST['MALOAIHANG'];
    $GIAHANG    = $_REQUEST['GIAHANG'];

    // 3. Viet cau SQL
    $sql = "UPDATE c10_mat_hang SET 
        TENHANG = '$TENHANG', 
        GIAHANG = $GIAHANG, 
        MALOAIHANG = $MALOAIHANG, 
        MACONGTY = '$MACONGTY' 
        WHERE MAHANG = $id
    ";
    // 4. Debug SQL
    // echo $sql; die();

    //5. Thuc thi SQL
    $conn->exec($sql);

    // 6. Chuyen huong
    header("Location: list.php");
    exit();
}

?>

<form action="" method="post">
    TENHANG :<input type="text" name="TENHANG" value="<?= $row['TENHANG'];?>"> <br>
    MACONGTY: <input type="text" name="MACONGTY" value="<?= $row['MACONGTY'];?>"> <br>
    MALOAIHANG: <input type="text" name="MALOAIHANG" value="<?= $row['MALOAIHANG'];?>"> <br>
    GIAHANG: <input type="text" name="GIAHANG" value="<?= $row['GIAHANG'];?>"> <br>
    <input type="submit" value="Cap nhat">
</form>