<?php

$sqrtNum = 0;
$total = 0;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>problem 1. Square Root Sum</title>
    <style>

        table, td, tr, thead, tfoot {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;

        }
        thead {

            font-weight: bold;
        }


    </style>
</head>
<body>

<table>
    <thead><td>Number</td><td>Square</td></thead>

    <?php

        for ($i = 0; $i <=100; $i++){

            if ($i % 2 == 0):

                $sqrtNum = round(sqrt($i), 2);
                $total += sqrt($i);

                echo "<tr><td>$i</td><td>$sqrtNum</td></tr>";
        
            endif;
        }
        $total = round($total, 2);
    
    ?>

    <tfoot><td><strong>Total</strong></td><td><?php echo $total; ?></td></tfoot>
</table>

</body>
</html>

