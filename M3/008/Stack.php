<?php
$q = new SplStack();

$q->push('Trung');
$q->push('Hung');
$q->push('Tam');

// $q->pop();

// Đưa con trỏ về vị trị ban đầu
//Tam Trung Hung
$q->rewind();

while( $q->valid()  ) {
    echo '<br>'.$q->current();//Tam
    $q->next();
}


