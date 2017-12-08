<?php
    $arr= [];
    for($i = 0; $i <= 25; $i++) {
        $arr[] = rand(1, 100);
    }

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $rez = 1;
    echo "Нечетные числа: <br>";

    foreach ($arr as $key => $value) {
        if($value > 0) {
            if($value % 2 == 0) {
                $rez *= $value;
            }
            else {
                echo "$value" . "<br>";
            }
        }
    }
    echo "Произведение: ".$rez;
?>
