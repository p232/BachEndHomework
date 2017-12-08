<?php
    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    $count = 1;

    foreach ($arr as $El) {
        echo $El;
        if ($count == 3) {
            echo "\n";
            $count = 0;
        }
        else {
            echo ", ";
        }
        $count = $count + 1;
    }
?>
