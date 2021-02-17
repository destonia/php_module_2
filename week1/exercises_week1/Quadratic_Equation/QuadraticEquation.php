<?php


class QuadraticEquation
{
public $a;
public $b;
public $c;
public $delta;
public $root1;
public $root2;
public function __construct($a,$b,$c)
{
    $this->a=$a;
    $this->b=$b;
    $this->c=$c;
}
    public function getDelta(){
        $this->delta= $this->b*$this->b-4*$this->a*$this->c;
    }
    public function getRoot(){
        $this->getDelta();
        if ($this->delta>0){
            $this->root1=(-$this->b+Math.pow(($this->delta),0.5))/(2*$this->a);
            $this->root2=(-$this->b-Math.pow(($this->delta),0.5))/(2*$this->a);
        }
        else if ($this->delta=0){
            $this->root1=$this->root2=-$this->b/(2*$this->a);
            $this->root2=4;
        }
        else{
            echo "vo nghiem";
        }
    }
    function toString(){
    $this->getDelta();
    $this->getRoot();
        echo $this->root1 ."<br>";
        echo $this->root2;
    }

}