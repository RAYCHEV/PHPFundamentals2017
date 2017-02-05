<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get Form Data</title>
</head>
<body>
    <form action="p7-GetFormData.php" method="get"><br>
        <input type="text" name="name" placeholder="Name.."> <br>
        <input type="number" name="age" placeholder="Age.."> <br>
        <input type="radio" name="gender" value="male">Male<br>
        <input type="radio" name="gender" value="female">Female<br>
        <input type="submit" value="Submit"> <br>


    </form>
</body>
</html>

<?php
$name = $_GET['name'] ?? "invalid input";
$age = $_GET['age'] ?? "invalid input";
$gender = $_GET['gender'] ?? "invalid input";

if ($name != 'invalid input' && $age != 'invalid input' && $gender !="invalid input"){

    echo 'My name is '.$name.'. I am '.$age.' years old. I am '.$gender.'.';
}