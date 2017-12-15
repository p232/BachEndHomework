<?php
$input_text = "яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко 
черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня 
черешня черешня груша яблоко черешня вишня";
$separator=" ";
$arrayAll = explode($separator, $input_text);
$tarray = array();
$resArray = array();

foreach ($arrayAll as $tword) {
    $tword = trim($tword);
    $tarray[] = $tword;
}

$resArray = array_count_values($tarray);
arsort($resArray);

foreach ($resArray as $tword => $tcount) {
    echo ("фрукт \"".$tword."\" встречается ".$tcount." раз <br />");
}
?>