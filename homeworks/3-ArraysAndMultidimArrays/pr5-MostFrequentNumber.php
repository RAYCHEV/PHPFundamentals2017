<?php

$sequenceInput = trim(fgets(STDIN));
//$sequenceInput = "1 4 2 3 4 4 1 2 4 9 3";
$sequenceInputArr = array_map("trim", explode(" ", $sequenceInput));
$sequenceInputArr_len = count($sequenceInputArr);

$listOfNumbers = [];
for ($i = 0; $i < $sequenceInputArr_len; $i++){

    $num = $sequenceInputArr[$i];

    if (isset($listOfNumbers[$num])){

        $listOfNumbers[$num] ++;
    } else {

        $listOfNumbers[$num] = 1;
    }
}

$mostFrequent = 0;
$mostFrequentCh;
foreach ($listOfNumbers as $key => $value){

    if ($value > $mostFrequent){
        $mostFrequent = $value;
        $mostFrequentCh = $key;
    }
}

echo $mostFrequentCh;

?>

