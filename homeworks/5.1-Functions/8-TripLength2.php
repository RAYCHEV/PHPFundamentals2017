<?php

$inputData = trim(fgets(STDIN));
//$inputData = "0, 0, 2, 0, 4, 0";
list($x1, $y1, $x2, $y2, $x3, $y3) = array_map("floatval", explode(", ", $inputData));

$distAB = dist($x1, $y1, $x2, $y2);
//var_dump($distAB);
$distAC = dist($x1, $y1, $x3, $y3);
//var_dump($distAC);
$distBC = dist($x2, $y2, $x3, $y3);
//var_dump($distBC);

echo buildShortestPath($distAB, $distAC, $distBC);

function buildShortestPath(float $a, float $b, float $c): string
{
    $output = "";

    if ($a > $b && $a > $c ){
        $output .= '1->3->2: '.($b + $c); // 1 3 2
    } else if ( $b >= $a && $b > $c) {
        $output .= '1->2->3: '.($a+$c);// 2 1 3
    } else if ( $c >= $a && $c >= $b){
        $output .= '2->1->3: '.($a+$b);//1 2 3
    }

    return $output;
}




function dist(float $x1, float $y1, float $x2 = 0., float $y2 = 0.): float
{
    return sqrt((($x2 - $x1) * ($x2 - $x1)) + (($y2 - $y1) * ($y2 - $y1)));
}