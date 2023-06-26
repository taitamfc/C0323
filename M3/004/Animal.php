<?php
abstract class Animal {
    abstract function move(){}
    abstract function say(){}
}

interface Chim {
    function bay(){}
}

interface Ca {
    const SPEED;
    function boi();
}
// 1. Cau truc tuong tu lop, chi chua hang so va PTTT
// 2. Quy dinh cac hanh vi chung cho cac lop trien khai
// 3. Su dung tu khoa Interface de dinh nghia
class ConNguoi extends Animal implements Chim,Ca  {
    public function say(){

    }
    public function move(){

    }
    public function bay(){

    }
    public function boi(){

    }
}