<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<form method="POST">
    <fieldset>
        <legend>login</legend>
        <input type="text" name="name" placeholder="type in your user name">
        <input type="text" name="email" placeholder="type in your email">
        <input type="text" name="phone" placeholder="type in your phone number">
        <input type="submit" name="submit" value="Login">
    </fieldset>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    if(empty($name)){
        echo "Please type in your name"."<br>";
    }else{
        echo $name."<br>";
    }
    if(empty($email)){
        echo "Please type in your email"."<br>";
    }if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo $email.'<br>';
    }else{
        echo "Please correct your email address"."<br>";
    }
    if(empty($phone)){
        echo "Please type in your phone";
    }else{
        echo $phone.'<br>';
    }

}
?>
</body>
</html>