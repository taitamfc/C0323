<?php
$numbers = [2,5,8,12,16,23,38,56,72,91];
$F = 23;

$L = 0;
$R = count($numbers) - 1;
// $M = floor( ( $L + $R ) / 2 );

// if( $numbers[$M] < $F ){
//     $L = $M + 1;
// }elseif( $numbers[$M] > $F ){
//     $R = $M - 1;
// }else{
//     echo 'Tim thay';
// }

// $M = floor( ( $L + $R ) / 2 );
// if( $numbers[$M] < $F ){
//     $L = $M + 1;
// }elseif( $numbers[$M] > $F ){
//     $R = $M - 1;
// }else{
//     echo 'Tim thay';
// }

// $M = floor( ( $L + $R ) / 2 );
// if( $numbers[$M] < $F ){
//     $L = $M + 1;
// }elseif( $numbers[$M] > $F ){
//     $R = $M - 1;
// }else{
//     echo 'Tim thay';
// }


while( $L <= $R ){
    $M = floor( ( $L + $R ) / 2 );
    if( $numbers[$M] < $F ){
        $L = $M + 1;
    }elseif( $numbers[$M] > $F ){
        $R = $M - 1;
    }else{
        echo 'Tim thay';
        break;
    }
}
