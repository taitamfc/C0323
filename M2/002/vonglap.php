<?php
$books = ['Van','Su','DIa'];
?>

<?php if( count($errors) ):?>
<ul>
    <?php foreach( $errors as $error ): ?>
        <li> <?= $error; ?> </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>

<ul>
    <?php for( $i = 0; $i < count($books); $i ++ ): ?>
        <li> <?= $books[$i]; ?> </li>
    <?php endfor; ?>
</ul>

