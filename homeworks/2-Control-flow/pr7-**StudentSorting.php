<?php
class Person{

     var $fname;
     var $lname;
     var $email;
     var $score;

     function __construct($fname, $lname, $email, $score)
     {
         $this -> fname = $fname;
         $this -> lname = $lname;
         $this -> email = $email;
         $this -> score = $score;
     }
}

?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Student Sorting</title>
    <link rel="stylesheet" href="pr7style.css">

</head>
<body>

<script>

    var nextId = 0;
    function addInput() {

        nextId++;
        var newDiv = document.createElement("tr");
        newDiv.setAttribute('id', 'inputBox' + nextId);
        newDiv.innerHTML =
            "<td><input type=\"text\" name=\"fname[]\" placeholder=\"first name\">" +
            "<td><input type=\"text\" name=\"lname[]\" placeholder=\"last name\">" +
            "<td><input type=\"text\" name=\"email[]\" placeholder=\"email\">" +
            "<td><input type=\"number\" name=\"score[]\" placeholder=\"score\">" +
            '<td><button type="button" onclick="removeInput(' +nextId+ ')">- REMOVE</button><td>';
        document.getElementById('parent').appendChild(newDiv);
    }

    function removeInput(id) {
        var inputBox = document.getElementById('inputBox' + id);
        document.getElementById('parent').removeChild(inputBox);
    }
</script>

    <form action="" method="post">


        <table id="parent">

        </table>

    <button type="button" onclick="addInput()">+ ADD</button>

        <select name="select_sort_by">
            <option value="mySortByFName">First name</option>
            <option value="mySortByLName">Last name</option>
            <option value="mySortByEmail">Email</option>
            <option value="mySortByScore">Exam score</option>
        </select>

        <select name="select_order">
            <option value="ascending">Ascending</option>
            <option value="descending">Descending</option>
        </select>
        <input type="submit" value="Submit">


</form>

<script>addInput();</script><!--    add one element by defaut -->
<?php
if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['score']) &&
    isset($_POST['select_sort_by']) && isset($_POST['select_order'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $score = $_POST['score'];
    $sortBy = $_POST['select_sort_by'];
    $order = $_POST["select_order"];

    if ($order == 'descending') {
        $isAscending = -1;
    } else {
        $isAscending = -1;
    }

    $avrScore = 0;

    function mySortByFName($a, $b)
    {

        global $isAscending;
        return strcmp($a->fname, $b->fname) * $isAscending;

    }

    function mySortByLName($a, $b)
    {

        global $isAscending;
        return strcmp($a->lname, $b->lname) * $isAscending;

    }

    function mySortByEmail($a, $b)
    {

        global $isAscending;
        return strcmp($a->email, $b->email) * $isAscending;

    }

    function mySortByScore($a, $b)
    {

        global $isAscending;
        return strcmp($a->score, $b->score) * $isAscending;

    }


    $persons = [];
    for ($i = 0; $i < count($fname); $i++) {

        if (!empty($fname[$i]) && !empty($lname[$i]) && !empty($email[$i]) && !empty($score[$i])) {

            $persons[] = new Person($fname[$i], $lname[$i], $email[$i], $score[$i]);
            $avrScore += $score[$i];
        }
    }
    if (!empty($persons)) {
        $avrScore /= count($persons);
        usort($persons, $sortBy);


        echo "<hr>";
        echo '<table id="output"><thead><td>Firs name</td><td>Last name</td><td>Email</td><td>Exam score</td></thead>';
        foreach ($persons as $person) {

            echo "<tr><td>" . $person->fname;
            echo "</td><td>" . $person->lname;
            echo "</td><td>" . $person->email;
            echo "</td><td>" . $person->score;
            echo "</td></tr>";
        }
        echo "<tfoot><td colspan=\"3\">Average Score:</td><td>" . $avrScore . "</td></tfoot>";
        echo "</table>";

    }
}
?>

</body>
</html>