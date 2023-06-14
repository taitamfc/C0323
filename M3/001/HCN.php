<?php
class HCN {
    // Thuoc tinh
    public $chieu_rong = 0;
    public $chieu_dai = 0;

    // Phuong thuc khoi tao
    public function __construct( $cd, $cr ) {
        //$cd: 20
        //$cr: 10
        $this->chieu_dai = $cd;
        $this->chieu_rong = $cr;
    }
    public function tinh_chu_vi(){
        $chu_vi = ($this->chieu_dai + $this->chieu_rong) * 2;
        return $chu_vi;
    }

    public function tinh_dien_tich(){
        $dien_tich = ($this->chieu_dai * $this->chieu_rong);
        return $dien_tich;
    }

    // Getter: cac thuoc tinh
    public function getChieu_rong(){
        return $this->chieu_rong;
    }
    public function getChieu_dai(){
        return $this->chieu_dai;
    }

    public function hien_thi(){
        $str = 'Hinh chu nhat co'; 
        $str .= '<br> Chieu dai la: '. $this->getChieu_dai();
        $str .= '<br> Chieu rong la: '. $this->chieu_rong;
        return $str;
        // $x += 10; => $x = $x + 10
    }

    // Setter: cac thuoc tinh
    public function setChieu_rong( $value ){
        $this->chieu_rong = $value;
    }

    public function setChieu_dai( $value ){
        $this->chieu_dai = $value;
    }
}

// Khoi tao doi tuong
$hcn1 = new HCN( 20, 10 );
// Thiet lap gia tri thuoc tinh chieu_rong
$hcn1->chieu_rong = 15;
// Thiet lap gia tri thuoc tinh chieu_dai
$hcn1->chieu_dai = 25;

// Goi phuong thuc tinh_chu_vi
echo $hcn1->tinh_chu_vi();
// Goi phuong thuc tinh_dien tich


echo '<pre>';
print_r($hcn1);
echo '</pre>';
