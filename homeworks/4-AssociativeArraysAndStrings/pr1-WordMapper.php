<form action="" method="get">
    <input type="text" name="input">
    <input type="submit" value="Submit">

</form>

<?php

if (isset($_GET['input']) && !empty($_GET['input'])){

     $input = $_GET['input'];

     //$input = "The quick brows fox.!!! jumped over..// the lazy dog.!";

     $inputArr = str_word_count($input, 1);
     $inputArr_len = count($inputArr);

     $output = [];
     for ($i = 0; $i <$inputArr_len; $i++){
        $word = strtolower($inputArr[$i]);

        if (isset($output[$word])){
            $output[$word] ++;
        }else{
            $output[$word] = 1;
        }
     }

     echo "<table border='2'>";
        foreach ($output as $key => $value){

            echo '<tr><td>'. $key .'</td><td>'. $value .'</td></tr>';

        }

     echo '</table>';
}

