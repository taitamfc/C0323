<?php
class Car {
    public $color;
    public $mirror;
    public $chair;
    private $engine;
    private $gas_tank;

    public function setEngine($value) {
      $this-> engine = $value;
    }
    public function setGasTank($value){
        $this->gas_tank = $value;
    }
    public function getEngine(){
        return $this->engine;
    }
    public function getGasTank(){
        return $this->gas_tank;
    }
}
// Khoi tao doi tuong
$vinfat = new Car ();
// Thiet lap gia tri thuoc tinh : color, mirror, chair
$vinfat -> color = "red";
$vinfat -> mirror = "gap dien";
$vinfat -> chair = "da";
// thiet lap gia tri thuoc tinh : engine, gas_tank
$vinfat -> setEngine("v9");
$vinfat -> setGasTank("dien");
// Lay ra gia tri thuoc tinh : color, mirror, chair
echo '<br>'.$vinfat->color;
echo '<br>'.$vinfat->mirror;
echo '<br>'.$vinfat->chair;
// Lay ra gia tri thuoc tinh : engine, gas_tank
echo '<br>'. $vinfat -> getEngine();
echo '<br>'. $vinfat -> getGasTank();
// In ra doi tuong
echo '<pre>';
print_r($vinfat);
echo '</pre>';
