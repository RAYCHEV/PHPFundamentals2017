<?php
$inputNums = trim(fgets(STDIN));
//$inputNums = "1, 2, 3, 4, 5, 6, 7, 8, 9";
$nums = explode(", ", $inputNums);

function isVolume($x, $y, $z): bool
{
    $x1 = 10; $x2 = 50;
    $y1 = 20; $y2 = 80;
    $z1 = 15; $z2 = 50;

    if ($x >= $x1 && $x <= $x2){
        if ($y >= $y1 && $y <= $y2){
            if ($z >= $z1 && $y <= $z2){
                return true;
            }
        }
    }

    return false;
}

$nums_len = count($nums);
for ($i = 0; $i <$nums_len-2; $i+=3){

    if (isVolume($nums[$i], $nums[$i+1], $nums[$i+2])){

        echo "inside\n";
    } else {

        echo "outside\n";
    }
}