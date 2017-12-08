<?php
    $arr = array();
    for ($i = 0; $i <= 20; $i++) {
        $arr[] = rand(0, 20);
    }

    echo "<pre>";
    var_dump($arr);

    $min = min($arr);
    $max = max($arr);

    foreach ($arr as $k => $v) {
        if ($v == $min) {
            $arr[$k] = $max;
        }
        if ($v == $max) {
            $arr[$k] = $min;
        }
    }

    var_dump($arr);
    echo "</pre>";
?>
