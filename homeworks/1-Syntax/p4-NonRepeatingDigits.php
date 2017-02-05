<?php

define("MIN_DIGIT", 102);
define("MAX_DIGIT", 987);
$n = 10002;
$currN;
$currentNarr = [];
$outputArr = [];

if ($n > MAX_DIGIT){

    $n = MAX_DIGIT;
}

if ($n >= MIN_DIGIT){

    for ($i = MIN_DIGIT; $i <= $n; $i++){

      $currN = strval($i);
        for ($ii = 0; $ii < strlen($currN); $ii++){

            //echo substr($currN, $ii, 1). "<br>";
            $currentNarr[] = substr($currN, $ii, 1);

        }
         $temp  = array_unique($currentNarr);
        if ($temp == $currentNarr){

            $assemblyString = "";
            foreach ($currentNarr as $value) {

                $assemblyString .= $value;

            }
            $outputArr[] = $assemblyString;

        }
        
        $currentNarr = array();
    }

    for ($i = 0; $i <count($outputArr); $i++){

        if ($i != count($outputArr)-1){

            echo $outputArr[$i].", ";
        }else{

            echo $outputArr[$i];
        }
    }
}else{
    echo 'no';
}