<?php
$books = ['Van','Su','DIa'];
//         0     1     2
echo $books[0];
$books[0] = 'Van Hoc';

for( $i = 0; $i < count($books); $i++ ){
    echo '<br>'.$books[$i];
}

$books2 = [
    0 => 'Van',
    1 => 'Su',
    2 => 'Dia',
];
echo $books2[0];
$books2[1] = 'Su Hoc';


$books3 = [
    'khong' => 'Van',
    'mot' => 'Su',
    'hai' => 'Dia',
];
$books3['hai'] = 'DIa lY';
echo $books3['khong'];

foreach( $books3 as $key => $value ){
    echo '<br>'.$key.' - '. $value;
}

foreach( $books3 as $value ){
    echo '<br>'.$value;
}

echo '<pre>';
print_r($books);
print_r($books2);
print_r($books3);
die();