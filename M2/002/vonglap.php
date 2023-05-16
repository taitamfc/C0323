<?php
$books = ['Van','Su','DIa'];
?>

<ul>
    <?php foreach( $books as $book ): ?>
        <li> <?= $book; ?> </li>
    <?php endforeach; ?>
</ul>

<ul>
    <?php for( $i = 0; $i < count($books); $i ++ ): ?>
        <li> <?= $books[$i]; ?> </li>
    <?php endfor; ?>
</ul>

