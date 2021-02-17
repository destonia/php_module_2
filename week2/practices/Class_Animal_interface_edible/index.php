<?php
include("Animals/Chicken.php");
include("Animals/Tiger.php");
include ("Fruits/Apple.php");
include ("Fruits/Orange.php");
echo("------ Animals<br>");
$animal[0] = new Tiger();
$animal[1] = new Chicken();

foreach ($animal as $animal) {
    echo $animal->makeSound() . "<br>";
    if ($animal instanceof Chicken) {
        echo $animal->howToEat() . " ";
    }
}
echo ("----------Fruits<br>");
$fruit[0]= new Apple();
$fruit[1]= new Orange();
foreach ($fruit as $fruit){
    echo $fruit->howToEat()."<br>";
}