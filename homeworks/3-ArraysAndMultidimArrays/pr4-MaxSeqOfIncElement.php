<?php

//$sequenceInput = trim(fgets(STDIN));
$sequenceInput = "1 2 3 -1 -3 5 9 12 14";

$seqArr = array_map("trim", (explode(" ", $sequenceInput)));
$seqArr_len = count($seqArr);

$maxSeqLen = 1;
$maxSeqCh = $seqArr[0];

$currSeqLen = 1;
for ($i = 1; $i <$seqArr_len; $i++){

    if (($seqArr[$i]) > $seqArr[$i - 1]){
        $currSeqLen ++;

        if ($currSeqLen > $maxSeqLen){

            $maxSeqLen = $currSeqLen;
            $maxSeqCh = $seqArr[$i];
        }
    } else {

        $currSeqLen = 1;
    }
}

for ($i = $maxSeqLen -1; $i >= 0; $i--){

    echo $maxSeqCh - $i . " ";
}
?>