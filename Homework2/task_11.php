<?php
// Работает только с латиницей.
$input_text="\"the man threatened with a knife and the military police shot him,\" police spokesman stan verberkt told reuters news agency. 
\"he was injured and has been taken into custody.\" the airport and schiphol plaza are open to the public. air traffic has not been affected.";
$separator=".";
$space = " ";
$out_text = "";
$len = mb_strlen($input_text);
$up = true;

for($count = 0; $count < $len; $count++) {
    $symbol = $input_text[$count];
    if (ctype_alpha($symbol)) {
        if ($up == true) {
            $symbol = mb_strtoupper($symbol);
            $up = false;
        }
    }
    elseif ($symbol == $separator) {
        $up = true;
    }
    $out_text = $out_text.$symbol;

}

echo ($input_text)."<br />";
echo ($out_text);
?>