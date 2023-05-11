<?php
 /*
    name:string
    age:int
    wife:boolean
    money: null
    favorites: array
    */

    $name       = 'Nguyen Van A';       //echo | print | var_dump()
    $age        = 18;                   //echo | print | var_dump()
    $wife       = false;                //var_dump()  
    $money      = null;                 //var_dump()  
    $so_thich   = ['Da banh','Da ga'];  //var_dump() | print_r

    echo '<br>'. $name;
    echo '<br>'. $age;
    echo '<br>';
    var_dump($wife);
    echo '<br>';
    var_dump($money);
    echo '<br>';

    echo '<pre>';
    print_r($so_thich);
    echo '</pre>';
