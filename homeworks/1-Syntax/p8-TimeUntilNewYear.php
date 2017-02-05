<?php

$date1 = new DateTime("now", timezone_open("Europe/Sofia"));
$year = new DateTime("now", timezone_open("Europe/Sofia"));
date_add($year, date_interval_create_from_date_string("1 year"));
$year = date_format($year, 'Y');

$date2 = date_create($year."-01-01 00:00:00", timezone_open("Europe/Sofia"));


$date1Timestamp = date_timestamp_get($date1);
$date2Timestamp = date_timestamp_get($date2);

$timeStampDiff = $date2Timestamp - $date1Timestamp;

$diffDate = getdate();

echo "Hours until new year: ". round($timeStampDiff / 3600);
echo "<br>Minutes until new year: " . round($timeStampDiff / 60);
echo "<br>Seconds until new year: " . round($timeStampDiff);
echo "<br>Days:Hours:Minutes:Seconds ". round($timeStampDiff / 86400) ." : ". $timeStampDiff / 3600 % 24
    ." : ". $timeStampDiff / 60 % 60 ." : ". $timeStampDiff % 60;