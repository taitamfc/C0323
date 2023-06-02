<?php
    include_once 'db.php';
    
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
        $sql = " INSERT INTO c10_mat_hang 
        ( TENHANG, MACONGTY, MALOAIHANG , GIAHANG ) 
        VALUES 
        ( '$TENHANG', $MACONGTY, $MALOAIHANG, $GIAHANG )
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
    TENHANG :<input type="text" name="TENHANG"> <br>
    MACONGTY: <input type="text" name="MACONGTY"> <br>
    MALOAIHANG: <input type="text" name="MALOAIHANG"> <br>
    GIAHANG: <input type="text" name="GIAHANG"> <br>
    <input type="submit" value="Them">
</form>