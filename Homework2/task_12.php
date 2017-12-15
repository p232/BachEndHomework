<?php
$input_text = "А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. 
А ларчик просто открывался. А там хоть трава не расти.";
$separator=".";
$out_text = "";
$area = explode($separator, $input_text);
$sentences = count($area);

for($count = $sentences - 1; $count >= 0; $count--) {
    $sentence = $area[$count];
    if ($sentence == "") continue;
    $sentence = trim($sentence);
    $out_text = $out_text.$sentence.$separator." ";
}

$out_text = trim($out_text);
echo ($input_text)."<br />";
echo ($out_text);
?>