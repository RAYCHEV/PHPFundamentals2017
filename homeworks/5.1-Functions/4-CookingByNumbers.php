<?php
$num = trim(fgets(STDIN));
//$num = 9;
$operationsInput = trim(fgets(STDIN));
//$operationsInput = "dice, spice, chop, bake, fillet";
$operations = explode(", ",$operationsInput);

function calculation($operation, $num){

    switch ($operation){
        case 'chop': // devide the number by two;
            return $num / 2;
            break;
        case 'dice': //square root of the number;
            return sqrt($num);
            break;
        case 'spice': // add 1 to the number;
            return $num + 1;
            break;
        case 'bake': //multiply number by 3;
            return $num * 3;
            break;
        case 'fillet': //substract 20% from number;
            return $num - ($num * 20 / 100);
            break;
    }
}

foreach ($operations as $operation){
    $num = calculation($operation, $num);
    echo $num . "\n";
}

