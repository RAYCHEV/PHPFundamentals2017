<?php
$year = "2014";
$month = "07";
define("FIRST_DAY_OF_THE_MONTH", "01");
$date = FIRST_DAY_OF_THE_MONTH."-".$month."-".$year;

$endDate= date_create($date, timezone_open("Europe/Sofia"));
date_add($endDate, DateInterval::createFromDateString('1 month - 1 day'));

$currentDateObj = date_create($date, timezone_open("Europe/Sofia"));
$sundays = [];

while ($currentDateObj < $endDate){ //meseca swyrsho

    if (date_format($currentDateObj, 'w') == 0){ // denqt e sunday   date_format($dateOneObj, 'w'); //

        echo date_format($currentDateObj, 'jS F, Y')."<br>"; //

    }
    date_add($currentDateObj, new DateInterval('P1D')); // new DateInterval('P1D') *is the same with*  DateInterval::createFromDateString('1 day')
}
