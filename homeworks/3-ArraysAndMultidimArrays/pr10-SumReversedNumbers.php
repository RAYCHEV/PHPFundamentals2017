<?php

$inputStr = trim(fgets(STDIN));
//$inputStr = "123 234 12";
$inputArr = explode(" ", $inputStr);

$inputArr_len = count($inputArr);
$output = 0;

for ($i = 0; $i < $inputArr_len; $i++){

    $num = strrev($inputArr[$i]);
    $output += intval($num);
}

echo $output;