<?php
include_once 'db.php';

$sql = "SELECT * FROM `c10_mat_hang`";

$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//tra ve kieu mang
// Trả về dữ liệu
$rows = $stmt->fetchAll();

// echo '<pre>';
// print_r($rows);
// die();
?>
<a href="create.php"> Them moi </a>
<table border="1">
    <tr>
        <th>MAHANG</th>
        <th>TENHANG</th>
        <th>MACONGTY</th>
        <th>MALOAIHANG</th>
        <th>SOLUONG</th>
        <th>DONVITINH</th>
        <th>GIAHANG</th>
        <th>Action</th>
    </tr>

    <?php foreach( $rows as $row ):
        // echo '<pre>';
        // print_r($row);
        // die();
        ?>
        <tr>
            <td><?= $row['MAHANG'];?> </td>
            <td><?= $row['TENHANG'];?> </td>
            <td><?= $row['MACONGTY'];?> </td>
            <td><?= $row['MALOAIHANG'];?> </td>
            <td><?= $row['SOLUONG'];?> </td>
            <td><?= $row['DONVITINH'];?> </td>
            <td><?= $row['GIAHANG'];?> </td>
            <td>
                <a href="show.php?id=<?= $row['MAHANG'];?>">SHow</a> | 
                <a href="edit.php?id=<?= $row['MAHANG'];?>">Edit</a> | 
                <a onclick=" return confirm('Are you sure ?') "  
                    href="delete.php?id=<?= $row['MAHANG'];?>"
                >Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>