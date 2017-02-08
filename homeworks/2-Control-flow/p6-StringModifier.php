<?php
$title = "Problem 6 String Modifier ";
include_once 'header.php';
?>
<form method="post">
    Starting Index: <input type="text" name="text" value="StringModifier.php">
    <input type="radio" name="strmod" value="palindrome"> Check Palindrome
    <input type="radio" name="strmod" value="revstr"> Reverse String
    <input type="radio" name="strmod" value="split"> Split
    <input type="radio" name="strmod" value="hashstr"> Hash String
    <input type="radio" name="strmod" value="shuffstr"> Shuffle String
    <input type="submit" value="Sumbit">
    <p></p>

</form>

<?php


function palindromeString($text){
    if ($text == strrev($text)){
        $text .= " is a palindrome :)";
    } else {

        $text .= " is not a palindrome!";
    }

    return $text;
}

function reverseString($text){

    return strrev($text);
}

function splitString($text){

    $chars = str_split($text);
    $textOut = "";
    foreach ($chars as $ch){

        if ($ch == " "){
            continue;
        }
        $textOut .= "$ch ";
    }

    return $textOut;
}

function hashString($text){

    return crypt($text, "Kyrent Salt");

}

function shuffleString($text){

    $textArr = str_split($text);
    shuffle($textArr);
    $text = implode("", $textArr);
    return $text;

}
if (isset($_POST['text']) && isset($_POST['strmod'])) {
    $text = $_POST['text'];
    $strmod = $_POST['strmod'];

    if ($strmod == "palindrome") {
        echo palindromeString($text);
    }
    if ($strmod == "revstr") {
        echo reverseString($text);
    }
    if ($strmod == "split") {
        echo splitString($text);
    }
    if ($strmod == "hashstr") {
        echo hashString($text);
    }
    if ($strmod == "shuffstr") {
        echo shuffleString($text);
    }
}

?>

<?php include_once 'footer.php'; ?>
