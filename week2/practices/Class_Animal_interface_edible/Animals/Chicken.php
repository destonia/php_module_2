<?php
include_once (dirname(__FILE__)."/../AbstractClass/Animal.php");
include_once (dirname(__FILE__)."/../Interface/Edible.php");
class Chicken extends Animal{
    public  function makeSound(): string
    {
        // TODO: Implement makeSound() method.
        return "Chicken: toak toak oak ";
    }
    public function howToEat(){
        return "fried";
    }
}