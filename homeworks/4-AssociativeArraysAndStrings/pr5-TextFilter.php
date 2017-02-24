<?php
    $text = trim(fgets(STDIN));
    $banlist = trim(fgets(STDIN));

//    $words = str_word_count($text, 1);
    $bans = array_map("trim", explode(", ", $banlist));

    foreach ($bans as $words){

        $asterix = "";
        for ($i = 0; $i <strlen($words); $i++){

            $asterix .= "*";
        }
        $text = str_replace($words, $asterix, $text);
    }

echo $text;
