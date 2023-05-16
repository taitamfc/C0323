<?php
/*
    * * * * *
    * * * * *
    * * * * *
*/

for($i = 1; $i <= 3; $i++){
    for($j = 1; $j <= 5; $j++){
        echo ' * ';
    }
    echo '<br>';
}

echo '<hr>';
/*

    *           h1 => c1
    * *         h2 => c2
    * * *       h3 => c3
    * * * *     h4 => c4
    * * * * *   h5 => c5
*/

for($h = 1; $h <= 5; $h++){
    $c = $h;
    for($j = 1; $j <= $c; $j++){
        echo ' * ';
    }
    echo '<br>';
}

echo '<hr>';
/*
    * * * * *       h1 => c5                      
    * * * *         h2 => c4                          
    * * *           h3 => c3                                  
    * *             h4 => c2                                   
    *               h5 => c1
*/

for($h = 1; $h <= 5; $h++){
    $c = 6 - $h;
    for($j = 1; $j <= $c; $j++){
        echo ' * ';
    }
    echo '<br>';
}

echo '<hr>';

/*
       - - - * - - -    h1: t3 c1 s3
       - - * * * - -    h2: t2 c3 s2
       - * * * * * -    h3: t1 c5 s1
       * * * * * * *    h4: t0 c7 s0
*/
$stopC = 1;
for($h = 1; $h <= 4; $h++){

    for($t = 1; $t <= 4 - $h; $t++){
         echo ' - ';
    }
    for($c = 1; $c <= $stopC ; $c++){
        echo ' * ';
    }
    for($s = 1; $s <= 4 - $h; $s++){
        echo ' - ';
    }
    $stopC += 2;
    echo '<br>';
}
echo '<hr>';
/*
    * * * * *   h1: s0 c5
    - * * * *   h2: s1 c4
    - - * * *   h3: s2 c3
    - - - * *   h4: s3 c2
    - - - - *   h5: s4 c1
*/
for($h = 1; $h <= 5; $h++){
    for($s = 1; $s <= $h - 1; $s++){
         echo ' - ';
    }
    for($c = 1; $c <= 6 -$h ; $c++){
        echo ' * ';
    }
    echo '<br>';
}
