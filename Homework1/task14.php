<?php
    $MyArray = array(4, 2, 5, 19, 13, 0, 10);
    $ArrayP = array(2, 3, 4);

    foreach ($ArrayP as $E) {
        $In = false;
        foreach ($MyArray as $My) {
            if ($E == $My) {
                $In = true;
            }
        }
        if ($In == true) {
            echo $E."-Yes! ";
        }
        else {
            echo $E."-No! ";
        }
    }
?>
