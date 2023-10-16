<?php
// pr($item);
?>
<form action="index.php?controller=product&action=update&id=<?= $item['id']?>" method="post">
    <table border="1">
        <tbody>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" value="<?= $item['name']?>">
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td>
                    <input type="text" name="price" value="<?= $item['price']?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Update">
                </td>
            </tr>
        </tbody>
    </table>
</form>