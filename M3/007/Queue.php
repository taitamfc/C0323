<?php
class Queue {
    private $elements = [];
    private $limit = 0;
    public function __construct($limit){
        $this->limit = $limit;
    }

    // Dua phan tu vao
    public function enqueue( $item ){
        if(!$this->isFull()){
            array_push($this->elements,$item);
        }else{
            echo "queue full";
        }
    }

    // Lay va xoa
    public function dequeue(){
        if(!$this->isEmpty()){
            array_shift($this->elements);
        }else{
            echo "queue rong";
        }
    }

    // lay va khong xoa
    public function peek(){
        if(!$this->isEmpty()){
            return current($this->elements);
        }else{
            echo "queue rong";
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
$myqueue = new Queue(2);
// Them vao Hung, Trung, Tam
$myqueue ->enqueue('Hung');
$myqueue ->enqueue('Trung');
$myqueue ->enqueue('Tam');
// dequeue
$myqueue->dequeue();
// Peek
echo $myqueue->peek();
echo "<pre>";
print_r($myqueue);
echo "</pre>";