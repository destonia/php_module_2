<?php
include_once (dirname(__FILE__)."/../AbstractClass/Fruits.php");
class Apple extends Fruits{
    public function howToEat()
    {
        // TODO: Implement howToEat() method.
        return "slice or bite";
    }
}