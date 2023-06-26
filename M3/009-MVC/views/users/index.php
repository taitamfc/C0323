<a href="index.php?controller=user&action=create"> Them moi </a>
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
    </tr>

    <?php foreach( $items as $item ):
        // echo '<pre>';
        // print_r($item);
        // die();
        ?>
        <tr>
            <td><?= $item['id'];?> </td>
            <td><?= $item['name'];?> </td>
            <td><?= $item['email'];?> </td>
            <td>
                <a href="index.php?controller=user&action=show&id=<?= $item['id'];?>">SHow</a> | 
                <a href="index.php?controller=user&action=edit&id=<?= $item['id'];?>">Edit</a> | 
                <a onclick=" return confirm('Are you sure ?') "  
                    href="index.php?controller=user&action=destroy&id=<?= $item['id'];?>"
                >Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>