<?php

$title = "Problem 2 CarRandomizer";
include_once 'header.php';
?>
<form action="p2-CarRandomizer.php" method="post">
    Enter cars <input type="text" name="cars" value="moskvich">
    <input type="submit" value="Show result">

</form>

 <?php

function showTheCars($carsIn){

    $cars = array_map("trim", explode(",", $carsIn));
    $colors = array("Yellow", "Purple", "Orange", "Chokolate", "Gray", "Black", "Silver");

    echo "<table>
                <thead><td>Car</td><td>Color</td><td>Count</td></thead>";

    for ($i = 0; $i < count($cars); $i++) {

        $color = $colors[rand(0, count($colors) - 1)];
        $quantity = rand(1, 5);
        echo "<tr><td>$cars[$i]</td><td>$color</td><td>$quantity</td></tr>";

    }
}

if (isset($_POST['cars'])) {
    $carsIn = $_POST["cars"];

    showTheCars($carsIn);
}
    ?>

</table>

<?php include_once 'footer.php'; ?>

