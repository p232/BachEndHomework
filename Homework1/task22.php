<?php
    $Rows = 5;
    $Text = "x";

    for ($Row = 1; $Row <= $Rows; $Row++) {
        $Count = $Row * 2;
        for ($Symbol = 1; $Symbol <= $Count; $Symbol++) {
            echo $Text;
        }
        echo "<br />";
    }
?>
