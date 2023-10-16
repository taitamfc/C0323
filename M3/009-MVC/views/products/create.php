<?php
// pr($item);
?>
<form action="index.php?controller=product&action=store" method="post">
    <table border="1">
        <tbody>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" value="">
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td>
                    <input type="text" name="price" value="">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Save">
                </td>
            </tr>
        </tbody>
    </table>
</form>