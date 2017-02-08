<?php
$title = "Problem 5 Sum Of Digits ";
include_once 'header.php';
?>
    <form method="post">
        Starting Index: <input type="text" name="text" value="1111, 2222, 3333, asdf, a3bra89">
        <input type="submit" value="Sumbit">
        <p></p>

    </form>

<?php
if (isset($_POST['text'])) {

    $text = $_POST['text'];
    $total = array();

    $nums = array_map('trim', explode(',', $text));

    foreach ($nums as $digits) {

        $digit = str_split($digits);

        $total[$digits] = 0;
        foreach ($digit as $dig) {

            if (is_numeric($dig)) {

                $total[$digits] += $dig;

            } else {

                $total[$digits] = "I cannot sum that";
                break;
            }

        }
    }

    echo "<table>";
    foreach ($total as $key => $value) {

        echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
    }

    echo "</table>";
}

?>

<?php include_once 'footer.php'; ?>
