<?php

$input = trim(fgets(STDIN));
//$input = '1 2 3 3';
$elements = explode(" ", $input);
$elements_len = count($elements);

$leftSide = 0;
$rightSide = 0;
$output = "no";
for ($i = 0; $i <$elements_len; $i++){

    for ($l = 0; $l < $i; $l++){

        $leftSide += $elements[$l];
    }

    for ($r = $i+1; $r < $elements_len; $r++){

        $rightSide += $elements[$r];
    }

    if ($leftSide == $rightSide){
        $output = $i;

    }
    $leftSide = $rightSide = 0;
}

echo $output;