<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discount</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productDescription = $_POST["description"];
    $listPrice = $_POST["price"];
    $discountPercent = $_POST["percent"];
    if ($productDescription == "") {
        echo "Please type in your product's description" . "<br>";
    }
    if ($listPrice == "") {
        echo "Please type in product's price"."<br>";
    }
    if ($discountPercent == "") {
        echo "Please type in product's discount percent";
    }
    else{
        $discountAmount=$listPrice*$discountPercent*0.01;
        echo $discountAmount;
    }
}
?>
</body>
</html>