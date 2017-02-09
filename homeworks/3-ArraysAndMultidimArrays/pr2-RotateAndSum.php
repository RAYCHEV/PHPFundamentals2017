<?php
$integersInput = trim(fgets(STDIN));
$numOfRotaionInput = trim(fgets(STDIN));
//
//$integersInput = "3 2 4 -1";
//$numOfRotaionInput = "2";

$integers = array_map("trim", explode(" ", $integersInput));
$integers_len = count($integers);

$rotated  = [];
$rotated[0] = $integers;

for ($i = 0; $i < $numOfRotaionInput; $i++) {
    array_splice($rotated[$i], 0, 0, $rotated[$i][$integers_len-1]);
    unset($rotated[$i][$integers_len]);


    if ($i+1 == $numOfRotaionInput){
        break;
    }
    $rotated[$i + 1] = $rotated[$i];
}

$sum = [];
foreach ($rotated as $r) {

    $r_len = count($r);
    for ($i = 0; $i < $r_len; $i++) {

        if (isset($sum[$i])) {
            $sum[$i] += $r[$i];
        } else {
            $sum[$i] = $r[$i];
        }
    }
}

foreach ($sum as $s) {
    echo $s . " ";
}

?>