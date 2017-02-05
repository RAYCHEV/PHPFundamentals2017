<?php
$infoPerson = array("Name" => "Pesho", "Phone&nbsp;numer" => "0884-888-888", "Age" => 67, "Address" => "Suhata Reka");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>information table</title>
    <style>
        table, tr, td{
            border: solid 1px black;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px;
            text-align: left;
        }

        .leftCol {
            background-color: orange;
            text-align: left;
        }

        .rightCol {
            text-align: right;
        }
    </style>

</head>
<body>
    <table>

            <?php
                foreach ($infoPerson as $key => $value) {

                 echo '<tr><td class="leftCol">'.$key.'</td><td class="rightCol">'.$value.'</td></tr>';
                }
             ?>

        </table>
</body>
</html>
