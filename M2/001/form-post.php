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
    print_r($_SERVER['REQUEST_METHOD']);
    echo '</pre>';

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
    
        if( $username == 'admin' && $password == '12345' ){
            echo 'Xin chao admin';
        }else{
            echo 'Sai thong tin dang nhap';
        }
    }

    
    
?>
<form action="" method="POST">
    Username: <input type="text" name="username"> <br>
    Password: <input type="text" name="password"> <br>
    <input type="submit" value="Login">
</form>