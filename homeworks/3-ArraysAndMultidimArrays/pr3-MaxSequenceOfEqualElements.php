<?php

$sequenceInput = trim(fgets(STDIN));
//$sequenceInput = "2 1 1 2 3 3 2 2 2 1";

$seqArr = array_map("trim", (explode(" ", $sequenceInput)));
$seqArr_len = count($seqArr);

$maxSeqLen = 1;
$maxSeqCh = $seqArr[0];

$currSeqLen = 1;
for ($i = 1; $i <$seqArr_len; $i++){

    if ($seqArr[$i] == $seqArr[$i - 1]){
        $currSeqLen ++;

        if ($currSeqLen > $maxSeqLen){

            $maxSeqLen = $currSeqLen;
            $maxSeqCh = $seqArr[$i];
        }
    } else {

        $currSeqLen = 1;
    }
}

for ($i = 0; $i < $maxSeqLen; $i++){

    echo $maxSeqCh . " ";
}
