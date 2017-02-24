<form action="" method="get">
    <input type="text" name="input">
    <input type="submit" value="Submit">

</form>


<?php

//$inputText = "What a wonderful world!";
$inputText = $_GET['input'];
$isOdd = 1;


function isChEven($char){

    if (ord($char) % 2 == 0){

        return true;
    }else {
        return false;
    }
}

for ($i = 0; $i <strlen($inputText); $i++){

    if ($inputText[$i] == " "){
        continue;
    }
    if (isChEven($inputText[$i])){
        echo "<font color='red'>".$inputText[$i]." </font>";
    }else {
        echo "<font color='blue'>".$inputText[$i]." </font>";
    }
}