<?php
class Animal {
    // thuoc tinh: color, name
    public $color="den";
    protected $name = "meo den";
    private $age = 10;
    // phuong thuc: move, say
    public function move(){
        echo "<br> dong vat di chuyen";
    }
    public function say(){
        echo "<br> dong vat giao tiep";
    }
}

// class ConMeo ke thua Animal
class ConMeo extends Animal{
    public function say(){
        echo $this->name;//ok
        echo $this->age;//ko
        echo $this->color;//ok
        echo "<br> meo meo";
    }
    public function batchuot(){
        
    }
}
// class ConCho ke thua Animal
class ConCho extends Animal{
    public function say(){
        echo "<br> go go";
    }
    public function coinha(){

    }
}
// cat: Khoi tao doi tuong ConMeo
$cat = new ConMeo;
// Dung doi tuong con meo -> say
$cat -> say();
$cat->name;
// dog: Khoi tao doi tuong ConCho
$dog = new ConCho;
// Dung doi tuong con cho -> say
$dog -> say();