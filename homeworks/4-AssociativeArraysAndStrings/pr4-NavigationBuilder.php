<?php
$categories = $_GET['categories'];
$tags = $_GET['tags'];;
$months = $_GET['months'];;

//$categories = "Knitting, Cycling, Swimming, Dancing";
//$tags = "person, free time, love, peace, protest";
//$months = "April, May, June, July";

$catArr = array_map("trim", explode(",",$categories));
$catArr_len = count($catArr);

$tagsArr = array_map("trim", explode(",",$tags));
$tagsArr_len = count($tagsArr);

$monthsArr = array_map("trim", explode(",",$months));
$monthsArr_len = count($monthsArr);

$max_len = max($catArr_len, $tagsArr_len, $monthsArr_len);

$catOut ="";
$tagOut ="";
$monOut ="";

for ($i = 0; $i <$max_len; $i++){

    if (isset($catArr[$i])){
        $catOut .= "<li>".$catArr[$i]."</li>";
    }
    if (isset($tagsArr[$i])){
        $tagOut .= "<li>".$tagsArr[$i]."</li>";
    }
    if (isset($monthsArr[$i])){
        $monOut .= "<li>".$monthsArr[$i]."</li>";
    }
}

echo '<h2>Categories</h2>';
echo '<ul>'.$catOut.'</ul>';

echo '<h2>Tags</h2>';
echo '<ul>'.$tagOut.'</ul>';


echo '<h2>Months</h2>';
echo '<ul>'.$monOut.'</ul>';

?>


