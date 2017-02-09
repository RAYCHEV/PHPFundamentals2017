<?php
//$inputLineOne = "hi php java xml csharp
//sql
//html css js";
//
//$inputLineTwo = "hi nakov hi hi java
//sql html css js";

$inputLineOne = trim(fgets(STDIN));
$inputLineTwo = trim(fgets(STDIN));

$lineOne = array_map("trim", explode(" ", $inputLineOne));
$lineTwo = array_map("trim", explode(" ", $inputLineTwo));

$lineOneLen = count($lineOne);
$lineTwoLen = count($lineTwo);
$len = $lineTwoLen <= $lineOneLen ? $lineTwoLen : $lineOne;

$largestCommonEnd = 0;
$currCommonEnd = 0;

for ($i = 0; $i < $len; $i++){

    if ($lineOne[$i] == $lineTwo[$i]){
        $currCommonEnd ++;
    }else {
        break;
    }
}

$largestCommonEnd = $currCommonEnd;

$currCommonEnd = 0;
for ($i = 0; $i < $len; $i++){

    if ($lineOne[$lineOneLen - $i - 1] == $lineTwo[$lineTwoLen - $i - 1]){
        $currCommonEnd ++;
    }else {
        break;
    }
}

$largestCommonEnd = $largestCommonEnd > $currCommonEnd ? $largestCommonEnd : $currCommonEnd;

echo $largestCommonEnd;

?>