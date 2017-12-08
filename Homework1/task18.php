<?php
    $AllDays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

    foreach ($AllDays as $TDay) {
        if ($TDay == "Saturday" or $TDay == "Sunday") {
            echo "<b>".$TDay."</b> \n <br />";
        }
        else {
            echo $TDay."\n <br />";
        }
    }
?>
