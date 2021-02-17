<?php
Class Stack{

    public $stack;

    public function __construct()
    {
        $this->stack= array();
    }
    public function add($obj)
    {
        array_push($this->stack, $obj);
    }
    public function push($obj){
        array_unshift($this->stack,$obj);
    }
    public function pop(){
        array_shift($this->stack);
    }
    public function top(){
        echo 'the first element in this array is: '.$this->stack[0];
    }
    public function isEmpty(){
        if (count($this->stack)==0){
            echo 'it is empty<br>';
        }else{
            echo 'it is not empty<br>';
        }
    }
}