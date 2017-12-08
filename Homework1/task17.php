<?php
    $AllMonth = array("January", "February", "March", "April", "May", "June", "July", "August", "September",
        "October", "November", "Desember");
    $month = "Desember";

    foreach ($AllMonth as $TMonth) {
        if ($month == $TMonth) {
            echo "<b>".$TMonth."</b> \n <br />";
        }
        else {
            echo $TMonth."\n <br />";
        }
    }
?>
