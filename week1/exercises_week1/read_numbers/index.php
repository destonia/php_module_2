<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read numbers</title>
</head>
<body>
<form method="post">
    <input type="text" name="search" placeholder="type in the number you want to read"/>
    <input type="submit" name="submit" value="Read"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchNumber = $_POST["search"];
    $flag = 0;
    $unitDigits = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine");
    $tensDigits = array("ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen");
    $tensDigits2 = array("twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety");
    $hundredsDigits = array("one hundred", "two hundred", "three hundred", "four hundred", "five hundred", "six hundred", "seven hundred", "eight hundred", "nine hundred");
    if ($searchNumber < 10) {
        for ($i = 1; $i < 10; $i++) {
            switch ($searchNumber) {
                case $i:
                    echo $unitDigits[$i - 1];
                    break;
            }
        }
    } else if ($searchNumber < 20) {
        for ($j = 10; $j < 20; $j++) {
            switch ($searchNumber) {
                case $j:
                    echo $tensDigits[$j - 10];
                    break;
            }
        }
    } else if ($searchNumber < 100) {
        $newArr = array_map("intval", str_split($searchNumber));
        for ($i = 20; $i < 100; $i++) {
            switch ($searchNumber) {
                case $i:
                    $ten = $tensDigits2[$newArr[0] - 2];
                    $unit = $unitDigits[$newArr[1] - 1];
                    echo $ten . " " . $unit;
                    break;
            }
        }
    } else if ($searchNumber < 1000) {
        $newArr = array_map("intval", str_split($searchNumber));
        for ($i = 100; $i < 1000; $i++) {
            switch ($searchNumber) {
                case $i:
                    echo $searchNumber . "<br>";
                    echo $hundredsDigits[$newArr[0] - 1] . " and " . $tensDigits2[$newArr[1] - 2] . " " . $unitDigits[$newArr[2] - 1];
                    break;
            }
        }
    }
}
?>
</body>
</html>