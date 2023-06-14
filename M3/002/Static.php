<?php
class User {
    // thuoc tinh: name, avatar
    public static $name ="Nguyen Van A";
    public static $avatar = "Xanh";
    public $age = 18;
    // Phuong thuc: save(),showInfo()
    public static function save(){
        echo "<br>". __METHOD__;
    }
    public static function showInfo(){
        echo '<br> name: '. self::$name;
        echo '<br> avatar: '. User::$avatar;
        // echo '<br> age: '. $this->age;
    }
}

// Truy cap thuoc tinh
echo "<br>". User::$name; 
echo "<br>". User::$avatar;
// Truy cap phuong thuc
User::save();
User::showInfo();
