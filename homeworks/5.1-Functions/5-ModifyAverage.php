<?php
$inputNum = trim(fgets(STDIN));
//$inputNum = "101"
$nums = str_split($inputNum);

function isAvrLessThan5 ($nums){
    $sum = 0;
    foreach ($nums as $num){
        $sum += $num;
    }
    if ($sum / count($nums) > 5){
        return false;
    }else {
        return true;
    }
}

while (isAvrLessThan5($nums)){
    $nums[] = '9';
}

echo implode($nums);