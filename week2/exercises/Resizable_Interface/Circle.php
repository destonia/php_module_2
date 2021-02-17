<?php
include_once('Shape.php');
include_once ('Resize.php');
class Circle extends Shape implements Resize
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function resize($percent)
    {
        parent::__construct($percent);
        $this->radius= $this->radius+$this->radius*$percent/100;
    }

    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
}