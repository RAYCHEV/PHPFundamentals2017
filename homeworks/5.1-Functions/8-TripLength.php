<?php

$inputValue = "-1, -2, 3.5, 0, 0, 2";
$xy = explode(", ",$inputValue);

$points = [
     1 =>   [
        1 => $xy[0],
        2 => $xy[1],
    ],
     2 =>   [
        1 => $xy[2],
        2 => $xy[3],

     ],
     3 =>   [
        1 => $xy[4],
        2 => $xy[5],
     ]
];


function dist($x1, $y1, $x2, $y2):float {
    return sqrt((($x2 - $x1) * ($x2 - $x1)) + (($y2 - $y1) * ($y2 - $y1)));
}

$ab = dist($points[1][1], $points[1][2], $points[2][1], $points[2][2]);
$ac = dist($points[1][1], $points[1][2], $points[3][1], $points[3][2]);
$bc = dist($points[2][1], $points[2][2], $points[3][1], $points[3][2]);

$output = "";
if ($ab <= $ac && $ac <= $bc){
    $output = "1 2 3";

}else if ($ab <= $ac && $ac > $bc ){

    $output = '1 3 2';

} else if ($ab > $ac && $ab <= $bc ){

    $output = '2 1 3';
}else if ($ab > $ac && $ac < $bc ){

    $output = '2 3 1';
}else if ($ab > $ac && $ab > $bc ){

    $output = '3 2 1';
}else if ($ab <= $ac && $ac > $bc ){

    $output = '3 1 2';
}


var_dump($output);