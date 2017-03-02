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

$outputpoints[0] = 1;
$currDist = dist($points[1][1],$points[1][2], 0, 0);

for ($i = 2; $i <= 3; $i++){

    if ($currDist > dist($points[$i][1],$points[$i][2], 0, 0)){

        $currDist = dist($points[$i][1],$points[$i][2], 0, 0);
        $outputpoints[0] = $i;
    }
}

$minDist;
for ($i = 1; $i <=3; $i++){

    if ($outputpoints[0]==$i){
        continue;
    }

    $currDist = dist($points[$outputpoints[0]][1], $points[$outputpoints[0]][2], $points[$i][1], $points[$i][2]);
    if (!isset($minDist)){
        $minDist = $currDist;
        $outputpoints[1] = $i;
    }
    if ($minDist>$currDist){
        $minDist = $currDist;
        $outputpoints[1] = $i;
    }
}

for ($i = 1; $i <=3; $i++) {

    if ($outputpoints[0] == $i || $outputpoints[1] == $i) {
        continue;
    }
    $outputpoints[2] = $i;
}

$sum = 0;
for ($i = 0; $i < 2; $i++){

    $op1 = $outputpoints[$i];
    $op2 = $outputpoints[$i+1];
    $sum += dist($points[$op1][1], $points[$op1][2], $points[$op2][1], $points[$op2][2]);
}


echo '<pre>';
var_dump($sum);
echo '<pre>';

echo '<pre>';
var_dump($outputpoints);
echo '<pre>';
