<?php

//$inputText = "softuni";
$inputText = trim(fgets(STDIN));
$inputText = strtolower($inputText);
$inputText_len = strlen($inputText);

$alphabetStr = "abcdefghijklmnopqrstuvwxyz";
$output ="";
for ($i = 0; $i <$inputText_len; $i++){

    $output .= $inputText[$i]. " -> " .strpos($alphabetStr, $inputText[$i]) ."\n";
}



echo $output;