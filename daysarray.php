<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="William Luck">
    <title>Using PHP variables, arrays and operators</title>
</head>
<body>
    <h1>Using PHP variables, arrays and operators</h1>
<?php
    $days = array("monday", "tuesday", "wednesday", "thursday", "friday", 
    "saturday", "sunday");
    $dayF = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
    echo "<p>The days of the week in english are: </p>";
    echo "<p>$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6]</p>";
    echo "<p>The days of the week in french are: </p>";
    echo "<p>$dayF[0], $dayF[1], $dayF[2], $dayF[3], $dayF[4], $dayF[5], $dayF[6]</p>";
?>
</body>
</html>