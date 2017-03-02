<?php

$dnaLen = trim(fgets(STDIN));

$output="";
for ($i = 0; $i <$dnaLen; $i++){
    $output .= getAsterics($i).getLetters().getDash($i).getLetters().getAsterics($i). "\n";
}

function getAsterics(int $i){
    switch ($i % 4){
        case 0:
            return "**";
        case 1:
            return "*";
        case 2:
            return "";
        case 3:
            return "*";
    }
}

function getDash(int $i){
    switch ($i % 4){
        case 0:
            return "";
        case 1:
            return "--";
        case 2:
            return "----";
        case 3:
            return "--";
    }
}

function getLetters($dna = "ATCGTTAGGG"){
    static $currLetter = 0;

    return $dna[$currLetter++ % strlen($dna)];

}
echo $output;