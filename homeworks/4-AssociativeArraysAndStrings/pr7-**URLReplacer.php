<?php
$text = trim(fgets(STDIN));
//$text = '<p>Come and visit <a href="http://softuni.bg">the Software University</a> to master the art of programming. You can always check our <a href="www.softuni.bg/forum">forum</a> if you have any questions.</p>';

$textArr = explode("<a href=", $text);

for ($i = 0; $i <count($textArr); $i++){

    $textArr[$i] = explode("</a>", $textArr[$i]);
}

//echo '<pre>';
//var_dump($textArr);
//echo '<pre>';
$closeTag = false;
$isItLink = false;
$output = "";
foreach ($textArr as $tx){

    for ($i = 0; $i <count($tx); $i++){
//        var_dump($tx[$i][0]== "\"");
        //първата буква = ";
        if ($tx[$i][0] == "\"") {
            $output .= '[URL=';
//            echo $output;
        }
        for ($ii = 0; $ii < strlen($tx[$i]); $ii++){
            if ($tx[$i][$ii] == "\""){
                $closeTag = true;
                $isItLink = true;
                continue;
            }
//          else if ($tx[$i][$ii] == "\"" && $closeTag){
//
//          }
            else if ($tx[$i][$ii] == ">" && $closeTag){
                $output .= "]";
                $closeTag = false;
            }
            else {
                $output .= $tx[$i][$ii];
            }
        }
        if ($isItLink){
            $output .= "[/URL]";
            $isItLink = false;
        }
    }
}

echo $output;
?>