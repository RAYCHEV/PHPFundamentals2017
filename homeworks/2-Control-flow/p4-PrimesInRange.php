<?php
$title = "Problem 4 *Find Primes in Range ";
include_once 'header.php';
?>
<form method="post">
    Starting Index: <input type="number" name="startingindex" value="2">
    End: <input type="number" name="end" value="256">
    <input type="submit" value="Sumbit">
    <p></p>

</form>

<?php

function showResult($startingIndex, $end)
{
    for ($i = $startingIndex; $i <= $end; $i++) {

        if ($i <= 7) {
            if ($i == 7 || $i == 5 || $i == 3 || $i == 2) {

                echo '<span class="bold">' . $i . "</span>";
            } else {

                echo $i;
            }

            echo $i == $end ? "" : ", ";

        } else if ($i > 7) {
            if ($i % 2 != 0 && $i % 3 != 0 && $i % 5 != 0 && $i % 7 != 0) {

                echo '<span class="bold">' . $i . "</span>";

            } else {

                echo $i;
            }
            echo $i == $end ? "" : ", ";
        }
    }
}


if (isset($_POST['startingindex']) && isset($_POST['end'])){
    $startingIndex = intval($_POST['startingindex']);
    $end = intval($_POST['end']);


    if ($startingIndex <= $end) {

        showResult($startingIndex, $end);
    }


}

?>

<?php include_once 'footer.php'; ?>

