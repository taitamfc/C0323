<?php
    /*
    $_GET:      
    $_POST:
    $_REQUEST:
    $_SERVER:
    $_SESSION:
    $_COOKIE:
    ....
    */

   
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
?>
<form action="" method="GET">
    Username: <input type="text" name="username"> <br>
    Password: <input type="text" name="password"> <br>
    <input type="submit" value="Login">
</form>