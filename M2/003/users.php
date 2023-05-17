<?php
// Lấy nội dung từ file json
$jsonData = file_get_contents('users.json');
// Chuyển json string sang mảng
$arrayData = json_decode($jsonData,true);
// Duyệt mảng ra table


// Xử lý thêm mới
$name = 'NVB';
$age = 19;
$userData = [
    'name' => $name,
    'age' => $age
];
array_push( $arrayData, $userData );
// Lưu vào file users.json
    //1. Chuyển mảng thành chuổi json
    $userDataJson = json_encode($arrayData);
    //2. Đưa nội dung vào file
    file_put_contents('users.json',$userDataJson);

die();