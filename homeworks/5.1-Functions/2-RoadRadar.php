<?php

$inputSpeed = trim(fgets(STDIN));
$inputZone = trim(fgets(STDIN));
//$inputSpeed = 100;
//$inputZone = 'motorway';

function getLimit($zone){
    switch ($zone) {
        case 'motorway':
            return 130;
            break;
        case 'interstate':
            return 90;
            break;
        case 'city':
            return 50;
            break;
        case 'residential':
            return 20;
            break;
        default:
            echo "Not a Valid Input";
            //return 10000;
    }
}

function getInfraction($speed, $limit) {
    $overSpeed = $speed - $limit;
    if ($overSpeed < 0) {
        return false;
    } else if ($overSpeed >= 0 && $overSpeed <= 20){
        return "speeding";
    } else if ($overSpeed >20 && $overSpeed <= 40) {
        return "excessive speeding";
    } else {
        return "reckless driving";
    }
}

echo getInfraction($inputSpeed, getLimit($inputZone));

