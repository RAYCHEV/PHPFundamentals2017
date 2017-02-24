<?php
//while (true) {
$input = trim(fgets(STDIN));

    //$inputStr .= $input . ' ';
    $inputArr = array_map("trim", explode(" ", $input));
    $inputArr_len = count($inputArr);

    $output = [];

    for ($i = 0; $i < $inputArr_len; $i++) {

        $numb = $inputArr[$i];

        if (isset($output[$numb])) {

            $output[$numb]++;

        } else {

            $output[$numb] = 1;

        }
    }

    ksort($output);

    foreach ($output as $k => $value) {

        echo $k . " -> " . $value . " times\n";

    }
//}
?>

