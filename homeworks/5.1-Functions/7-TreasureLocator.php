<?php

$inputValue = trim(fgets(STDIN));
//$inputValue = "4, 2, 1.5, 6.5, 1, 3";
$points = explode(", ", $inputValue);

$output = "";
$points_len = count($points);
for ($i = 1; $i <$points_len; $i+=2){

    $output .= isIsland($points[$i-1], $points[$i]);
}

function isIsland($x, $y)
{
    $islands = [
        'Tonga' => [0, 6, 2, 8],
        'Tuvalu' => [1, 1, 3, 3],
        'Cook' => [4, 7, 9, 8],
        'Samoa' => [5, 3, 7, 6],
        'Tokelau' => [8, 0, 9, 1],
    ];

    foreach ($islands as $island => $c) {

        if ($x >= $c[0] && $x <= $c[2] && $y >= $c[1] && $y <= $c[3]) {
            return $island . "\n";
        }
    }
        return "On the bottom of the ocean\n";
}
echo $output;