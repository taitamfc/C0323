<?php
class ListNode {
    public $data = '';
    public $next = null;

    public function __construct(string $data = null) {
        $this->data = $data;
    }

}

class LinkedList {
    public $first_node = null;

    public function insert( $data ){
        $node = new ListNode($data);
        $this->first_node = $node;
    }
}

// Khoi tao doi tuong
$lk = new LinkedList();
$lk->insert( 'Trung' );
$lk->insert( 'Hung' );


echo '<pre>';
print_r($lk);
echo '</pre>';


