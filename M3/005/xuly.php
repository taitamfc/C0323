<?php

// PascalCase: Danh tu
// camelCase: dong tu
// ro nghia

function maytinh(){
    // cong
    // tru
    // nhan
    // chia
}



const THANG_1 = "Thang 1";
const THANG_2 = "Thang 2";
const THANG_3 = "Thang 3";
const THANG_4 = 4;
const THANG_5 = 5;
const THANG_6 = 6;

$thang = "Thang 1";



switch ($thang) {
    case THANG_1:
    case THANG_3:
    case THANG_5:
        echo '30 ngay';
        break;
    case THANG_4:
    case THANG_6:
        echo '31 ngay';
        break;
    case THANG_2:
        echo '29 ngay';
        break;
    default:
        # code...
        break;
}


if( $thang == THANG_2 ){
    echo 'Nam nhuan';
}

if( $thang == THANG_1 || $thang == THANG_2 || $thang == THANG_3 ){
    echo 'Quy 1';
}elseif( $thang == THANG_4 || $thang == THANG_5 || $thang == THANG_6  ){
    echo 'Quy 2';
}else{
    echo 'Quy 3';
}

if( $thang == THANG_1 || $thang == THANG_2 || $thang == THANG_3 ){
    echo 'Quy 1';
}elseif( $thang == THANG_4 || $thang == THANG_5 || $thang == THANG_6  ){
    echo 'Quy 2';
}else{
    echo 'Quy 3';
}


if( $thang == THANG_1 || $thang == THANG_2 || $thang == THANG_3 ){
    echo 'Quy 1';
}elseif( $thang == THANG_4 || $thang == THANG_5 || $thang == THANG_6  ){
    echo 'Quy 2';
}else{
    echo 'Quy 3';
}

