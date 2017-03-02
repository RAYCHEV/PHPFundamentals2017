<?php

$inputValues = trim(fgets(STDIN));
//$inputValues = "2, 1, 1, 1";
$xy = explode(", ",$inputValues);

function distanceInCordinateSys($x1, $y1, $x2, $y2):float {
    return sqrt((($x2 - $x1) * ($x2 - $x1)) + (($y2 - $y1) * ($y2 - $y1)));
}

$x1y100 = dist($xy[0],$xy[1],0,0);
$x2y200 = dist($xy[2],$xy[3],0,0);
$x1y1x2y2 = dist($xy[0],$xy[1],$xy[2],$xy[3]);

//is it integer or float
$output ="{".$xy[0]."}, {".$xy[1]."} to {0}, {0}";
if ((int)$x1y100 == $x1y100){
    $output .= " is valid\n";
}else{
    $output .= " is invalid\n";
}

$output .="{".$xy[2]."}, {".$xy[3]."} to {0}, {0}";
if ((int)$x2y200 == $x2y200){
    $output .= " is valid\n";
}else{
    $output .= " is invalid\n";
}

$output .="{".$xy[0]."}, {".$xy[1]."} to {".$xy[2]."}, {".$xy[3] ."}";
if ((int)$x1y1x2y2 == $x1y1x2y2){
    $output .= " is valid\n";
}else{
    $output .= " is invalid\n";
}

echo $output;