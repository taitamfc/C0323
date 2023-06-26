<?php
class Stack {
    private $elements = [];
    private $limit = 0;
    public function __construct($limit){
        $this->limit = $limit;
    }

    // dua phan tu vao stack
    public function push($item){
     if(!$this->isFull()){
         array_unshift($this->elements,$item);
        } else{
            echo "stack full";
        }
       
    }
    // lay va xoa
    public function pop(){
        if(!$this->isEmpty()){
            array_shift($this->elements);
        }else{
            echo "stack rong";
        }
    }
    // lay va khong xoa
    public function peek(){
        if(!$this->isEmpty()){
            return current($this->elements);
        }else{
            echo "stack rong";
        }
    }
    // isEmpty
    public function isEmpty(){
        if(count($this->elements)==0 ){
            return true;
        }
        return false;
    }
    // isFull
    public function isFull(){
        if(count($this->elements)==$this->limit){
            return true;
        }
        return false;
    }
}

// Khoi tao doi tuong: 2
$mystack = new Stack(2);
// Them vao Hung, Trung, Tam
$mystack->push('hung');
$mystack->push('trung');

echo '<br> push tam';
$mystack->push('tam'); //stack full

// POP
$mystack->pop(); //trung
// Peek
echo '<br> peek: '.$mystack->peek(); //hung
echo "<pre>";
print_r($mystack);
echo "</pre>";