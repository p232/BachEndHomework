<?php
    $Rows = 9;

    for ($Row = 1; $Row <= $Rows; $Row++) {
        for ($Symbol = 1; $Symbol <= $Row; $Symbol++) {
            echo $Row;
        }
        echo "<br />";
    }
?>
