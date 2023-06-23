<?php
$q = new SplQueue();

$q->enqueue('Trung');
$q->enqueue('Hung');
$q->enqueue('Tam');

// $q->dequeue();

// Đưa con trỏ về vị trị ban đầu
//Tam Trung Hung
$q->rewind();

while( $q->valid()  ) {
    echo '<br>'.$q->current();//Tam
    $q->next();
}


