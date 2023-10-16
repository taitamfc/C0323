<?php
class User {
    //Phuong thuc lay tat ca du lieu
    public static function all(){
        global $conn;
        $sql = "SELECT * FROM `users`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $items = $stmt->fetchAll();
        return $items;
    } 
    // Phuong thuc phan trang
    public static function paginate( $limit = 20 ){
        $items = [];
        return $items;
    }
    // Lay chi tiet ban ghi
    public static function find( $id ){
        global $conn;
        $sql = "SELECT * FROM `users` WHERE id = $id";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $item = $stmt->fetch();
        return $item;
    }
    // Luu du lieu
    public static function save($data){
        global $conn;
        $name = $data['name'];
        $email = $data['email'];
        $password = time();
        $sql = "INSERT INTO `users`
        (name, email, password) VALUES 
        ('$name','$email','$password')";
        // dd($sql);
        return $conn->exec($sql);

    }
    // Cap nhat du lieu
    public static function update($id,$data){
        $name = $data['name'];
        $email = $data['email'];
        global $conn;
        $sql = "UPDATE `users` SET
            name = '$name',
            email = '$email'
        WHERE id = $id
        ";
        return $conn->exec($sql);
    }
    // Xoa 1 record
    public static function delete($id){
        global $conn;
        $sql = "DELETE FROM `users` WHERE id = $id";
        return $conn->exec($sql);
    }
}