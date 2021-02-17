<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<form method="get">
    <input type="text" name="operator1"><br>
    <select name="select">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select><br>
    <input type="text" name="operator2"><br>
    <input type="submit" name="Calculate">
    <?php
    function plus($a, $b)
    {
        echo $a + $b;
    }

    function subs($a, $b)
    {
        echo $a - $b;
    }

    function mult($a, $b)
    {
        echo $a * $b;
    }

    function div($a, $b){
        try {
            if ($b == 0) {
                throw new Exception("không thể chia cho 0");
            } else {
                echo $a / $b;
            }
        }
        catch (Exception $exception){
            echo "".$exception->getMessage();
        }

}
    $operand = $_GET["select"];
    $a = $_GET["operator1"];
    $b = $_GET["operator2"];
    switch ($operand) {
        case '+': plus($a,$b);
        break;
        case '-': subs($a,$b);
        break;
        case '*': mult($a,$b);
        break;
        case '/': div($a,$b);
        break;
    }
    ?>
</form>
</body>
</html>