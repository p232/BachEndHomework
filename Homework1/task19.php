<?php
    $AllDays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    $day = "Friday";

    foreach ($AllDays as $TDay) {
        if ($TDay == $day) {
            echo "<i>".$TDay."</i> \n <br />";
        }
        else {
            echo $TDay."\n <br />";
        }
    }
?>
