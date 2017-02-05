<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <title>Not so awesome calendar</title>

    <style>
        table#wholeCalendar table, table#wholeCalendar tr{

            border: none;
            font-style: inherit;
            margin: 10px 2px;
            padding: 0 5px 5px 5px;
        }

        table#mounth table, table#mounth td{

            border: 1px black solid;
        }
        tr#top {

            background-color: #669D37;
            color: white;
        }

    </style>


</head>
<body>

<form action="" method="get">
    <input type="number" name="year" placeholder="enter some year">
    <input type="submit" value="show it">
</form>
<?php

function drawMonth($month, $year)
{
    $calendar = '<table id="mounth">';

    $top = array('Неделя', 'Понеделник', 'Вторник', 'Сряда', 'Четвъртък', 'Петък', 'Събота');
    $calendar .= '<tr id="top"><td>' . implode('</td><td>', $top) . '</td></tr>';

    $currDay = date('w', mktime(0, 0, 0, $month, 1, $year));
    $daysFromMonth = date('t', mktime(0, 0, 0, $month, 1, $year));
    $daysFromWeek = 1;
    $dayCounter = 0;
    $calendar .= '<tr>';

    for ($x = 0; $x < $currDay; $x++) {
        $calendar .= '<td> </td>';
        $daysFromWeek++;
    }

    for ($i = 1; $i <= $daysFromMonth; $i++) {
        $calendar .= '<td>';
        $calendar .= '<div>' . $i . '</div>';

        $calendar .= '</td>';
        if ($currDay == 6) {

            $calendar .= '</tr>';
            if (($dayCounter + 1) != $daysFromMonth){
                $calendar .= '<tr>';
            }
            $currDay = -1;
            $daysFromWeek = 0;
        }
        $daysFromWeek++;
        $currDay++;
        $dayCounter++;
    }

    if ($daysFromWeek < 8) {
        for ($x = 1; $x <= (8 - $daysFromWeek); $x++){
            $calendar .= '<td> </td>';
        }
    }

    $calendar .= '</tr>';
    $calendar .= '</table>';
    return $calendar;
}

if (isset($_GET['year'])){

    $year = $_GET['year'];

    if ($year < 0){
        $outputYear = $year * -1;
        $outputYear .= "г. п.н.е.";
    }else {
        $outputYear = $year . "г.";
    }

    $monthsBgName = array("Януари", "Февруари", "Март", "Април", "Май", "Юни", "Юли", "Август", "Септември", "Остомври", "Ноември", "Декември"  );

    echo "<table id='wholeCalendar'><tr><td colspan='4'><h1>Календар за ".$outputYear."</h1></td>";
    for ($i = 1; $i <=12; $i++){

        if (($i-1)%3 == 0){
            echo "</tr><tr>";
        }
        echo "<td>";
        echo '<h2>'.$monthsBgName[$i-1].'</h2>';
        echo drawMonth($i, $year);
        echo "</td>";
    }
}

?>

</body>
</html>