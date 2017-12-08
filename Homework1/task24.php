<?php
    $number = 442158755745;
    $search = 5;
    $count = substr_count( $number, $search );
    echo 'Цифра ' . $search . ' встречается в числе ' . $number . ' <b>' . $count . '</b> раз(а)';
?>
