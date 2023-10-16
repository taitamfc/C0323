<a href="index.php?controller=product&action=create"> Them moi </a>
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
    </tr>

    <?php foreach( $items as $item ):
        // echo '<pre>';
        // print_r($item);
        // die();
        ?>
        <tr>
            <td><?= $item['id'];?> </td>
            <td><?= $item['name'];?> </td>
            <td><?= $item['price'];?> </td>
            <td>
                <a href="index.php?controller=product&action=show&id=<?= $item['id'];?>">SHow</a> | 
                <a href="index.php?controller=product&action=edit&id=<?= $item['id'];?>">Edit</a> | 
                <a onclick=" return confirm('Are you sure ?') "  
                    href="index.php?controller=product&action=destroy&id=<?= $item['id'];?>"
                >Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>