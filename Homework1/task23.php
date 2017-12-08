<?php
    $number = "1547";
    $sum = 0;

    if (!is_numeric($number)) {
        echo $number."<br/>";
        echo "Incorrect";
        exit();
    }

    for($count = 0; $count < strlen($number); $count++) {
        $sum += $number[$count];
    }
    echo $number."<br/>";
    echo $sum;
?>
