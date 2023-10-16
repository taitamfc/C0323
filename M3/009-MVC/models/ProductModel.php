<?php
class Product{
    //Phuong thuc lay tat ca du lieu
    public static function all(){
        global $conn;
        $sql = "SELECT * FROM `products`";
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
        $sql = "SELECT * FROM `products` WHERE id = $id";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $item = $stmt->fetch();
        return $item;
    }
    // Luu du lieu
    public static function save($data){
        global $conn;
        $name = $data['name'];
        $price = $data['price'];
        $description = 1;
        $image	= 1;
        $user_id = 1;
        $sql = "INSERT INTO `products`
        (name, price, description, image, user_id) VALUES 
        ('$name','$price','$description','$image',$user_id)";
        // dd($sql);
        return $conn->exec($sql);
    }
    // Cap nhat du lieu
    public static function update($id,$data){
        $name = $data['name'];
        $price = $data['price'];
        global $conn;
        $sql = "UPDATE `products` SET
            name = '$name',
            price = '$price'
        WHERE id = $id
        ";
        // dd($sql);
        return $conn->exec($sql);
    }
    // Xoa 1 record
    public static function delete($id){
        global $conn;
        $sql = "DELETE FROM `products` WHERE id = $id";
        return $conn->exec($sql);
    }
}