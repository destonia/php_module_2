<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future value calculator</title>
</head>
<body>
<form method="post" >
    <input type="text" name="amount" placeholder="type in your investment amount">
    <input type="text" name="rate" placeholder="type in yearly interest rate">
    <input type="text" name="year" placeholder="type in number of year">
    <input type="submit" name="submit" value="Calculate">
</form>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $investmentAmount=$_POST["amount"];
        $interestRate=$_POST["rate"];
        $numberOfYear=$_POST["year"];
        $futureAmount=$investmentAmount+($investmentAmount*$numberOfYear*$interestRate);
        echo $futureAmount;
    }

?>
</body>
</html>