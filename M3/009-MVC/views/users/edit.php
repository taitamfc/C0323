<?php
// pr($item);
?>
<form action="index.php?controller=user&action=update&id=<?= $item['id']?>" method="post">
    <table border="1">
        <tbody>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" value="<?= $item['name']?>">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" value="<?= $item['email']?>">
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