<form action="" method="get" >
    <input type="text" name="num" placeholder="1 2 3 9 0 ... n x">
    <input type="submit" value="Submit">
</form>
<?php
if (isset($_GET['num']) && trim($_GET['num']) != ""){
    $sequenceInput = $_GET['num'];

    $seqStrArr = array_map("trim", (explode(" ", $sequenceInput)));
    $seqArr = [];
    foreach ($seqStrArr as $numeric){

        if (is_numeric($numeric)){
            $seqArr [] = intval($numeric);
        }
    }

    $seqArr_len = count($seqArr);

    $maxSeqLen = 1;
    $maxSeqCh = $seqArr[0];

    $currSeqLen = 1;
    for ($i = 1; $i <$seqArr_len; $i++){

        if (($seqArr[$i] -1) == $seqArr[$i - 1]){
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
}
?>