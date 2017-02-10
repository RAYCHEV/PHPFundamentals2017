<?php

$sequenceInput = trim(fgets(STDIN));
//$sequenceInput = "3 2 3 4 2 2 4";

$seqArr = array_map("trim", (explode(" ", $sequenceInput)));
$seqArr_len = count($seqArr);

$maxSeqNum[0] = $seqArr[0];
$currSeqNum[0] = $seqArr[0];

for ($i = 1; $i < $seqArr_len; $i++){


    if ($seqArr[$i] > $seqArr[$i-1]){

        $currSeqNum[] = $seqArr[$i];

        if (count($currSeqNum) > count($maxSeqNum)){
            $maxSeqNum = array();
            $maxSeqNum = $currSeqNum;
        }
    }else {

        $currSeqNum = array();
        $currSeqNum[] = $seqArr[$i];
    }
}

//var_dump($maxSeqNum);
foreach ($maxSeqNum as $output){
    echo $output . " ";
}

?>