<?php
include "rectangle.php";
$a = 10;
$b = 20;
$rectangle = new Rectangle($a,$b);
//echo $rectangle->width;
echo $rectangle->display().'<br>';
echo "Rectangle area is ".$rectangle->getArea().'<br>';
echo "Perimeter is ".$rectangle->getPerimeter();