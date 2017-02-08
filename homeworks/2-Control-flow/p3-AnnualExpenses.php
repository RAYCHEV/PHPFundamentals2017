<?php
$title = "Problem 3 Annual Expenses";
include_once 'header.php';
?>
<form action="p3-AnnualExpenses.php" method="post">
    Enter numbers of years <input type="number" name="years">
    <input type="submit" name="submit" value="Show costs">
    <p></p>

</form>

<?php
if (isset($_POST['years']) && $_POST['years'] != 0 && isset($_POST['submit'])) {
    $years = intval($_POST['years']);

    $tableHead = array("Year", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", "Total");

    echo "<table><thead>";
    foreach ($tableHead as $th) {
        echo "<td>$th</td>";

    }
    echo "</thead>";

    $total = 0;
    for ($i = 2016; $i > 2016 - $years; $i--) {

        echo "<tr><td>" . $i . "</td>";
        for ($ii = 0; $ii < 12; $ii++) {

            $rnd = rand(0, 999);
            echo "<td>".$rnd."</td>";
            $total += $rnd;

        }
        echo "<td>". $total ."</td></tr>";
    }
}
?>



<?php include_once 'footer.php'; ?>

