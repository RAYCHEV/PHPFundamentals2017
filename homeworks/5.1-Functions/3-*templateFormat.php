<?php
$inputText = trim(fgets(STDIN));
//$inputText = "Dry ice is a frozen form of which gas?, Carbon Dioxide, What is the brightest star in the
//night sky?, Sirius";
$textArr = explode(", ", $inputText);

$output = '<?xml version="1.0" encoding="UTF-8"?>'."\n".'<quiz>';

$isQuestion = true;
foreach ($textArr as $que_answ){

    if ($isQuestion){
        $output .=   "\n\t".'<question>';
        $output .=   "\n\t\t".$que_answ;
        $output .=   "\n\t".'</question>';
        $isQuestion = false;
    }else {
        $output .= "\n\t".'<answer>';
        $output .= "\n\t\t".$que_answ;
        $output .= "\n\t".'</answer>';
        $isQuestion = true;
    }
}
$output .= "\n".'</quiz>';

echo $output;