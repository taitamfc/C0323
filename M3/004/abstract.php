<?php
abstract Khoi {
    abstract public function Ve();
}
// Lop truu tuong
abstract class HinhHoc extends Khoi{

    protected $color = '';
    public function getColor(){
        return $this->color;
    }

    // PT TT
    abstract public function ChuVi();
    abstract public function DienTich();
}
// 1. Khong the Khoi tao doi tuong
// $objHinHoc = new HinhHoc();
// 2. Có PT và TT bình thường
// 3. Lop co PTTT thi lop do phai la TT
// 4. Lop con ke thua lop cha thi phai trien khai cac pttt
// 5. Lop TT con ke thua lop TT cha, ko can trien khai
// 6. Lop TT va PTTT thi ko the la final

class HCN extends HinhHoc {
    public function ChuVi(){

    }
    public function DienTich(){

    }
    public function Ve(){

    }
}