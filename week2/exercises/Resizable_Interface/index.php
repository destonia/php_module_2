<?php
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');
$shape=[];
$shape[0]= new Circle('Circle',10);
$shape[1]= new Cylinder('Cylinder', 10,15);
$shape[2]= new Rectangle('Rectangle',10,15);
$shape[3]= new Square('Square',10);
echo "---------- Before change ----------<br>";
foreach ($shape as $shape){
    echo $shape->show().' ';
    if($shape->name=='Circle'){
        echo 'has Radius of: '.$shape->radius.'<br>';
    }
    if($shape->name=='Cylinder'){
        echo 'has Radius of '.$shape->radius.' and height of: '.$shape->height.'<br>';
    }
    if($shape->name=='Rectangle'){
        echo 'has Width of: '.$shape->width.' and height of: '.$shape->height.'<br>';
    }
    if($shape->name=='Square'){
        echo "has width of: ".$shape->width.'<br>';
    }
    echo "has Area of :".$shape->calculateArea().'<br>';
    echo "has Perimeter of: ".$shape->calculatePerimeter().'<br>';
}
echo "---------- After change ----------<br>";
/*foreach ($shape as $shape){
    $shape->resize();

}*/
var_dump($shape);
/*$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('Square 01', 4 , 4, 4);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';*/

