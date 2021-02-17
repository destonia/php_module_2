<?php

class MyList
{
    public $elements = [];

    public function size()
    {
        return count($this->elements);
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function __Constructor($arr = '')
    {
        if (is_array($arr) == true) {
            $this->elements = $arr;
        } else $this->elements = array();
    }

    public function add($obj)
    {
        array_push($this->elements, $obj);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->elements[$index];
        } else {
            die("ERROR in Mylist.get");
        }
    }

    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArraylist = array();
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index != $i) {
                    $newArraylist[] = $this->get($i);
                }
            }
            $this->elements = $newArraylist;
        } else {
            die("ERROR in Mylist.remove<br> Integer value required");
        }
    }

    public function clear()
    {
        $this->elements = array();
    }

    public function insert($index,$obj)
    {
        if($this->isInteger($index)){
            $arr1 = array_slice($this->elements,0,$index);
            $arr2 = array_slice($this->elements,$index,);
            array_push($arr1,$obj);
            $this->elements = array_merge($arr1,$arr2);
        }
    }
    public function addAll($arr){
        $this->elements = array_merge($this->elements,$arr);
    }
    public function isEmpty(){
        if (count($this->elements)==0){
            echo 'is empty';
        }else {
            echo 'not empty';
        }
        return (count($this->elements)==0);
    }
    public function indexOfObj($obj){
        $position=[];
        for($i=0;$i<count($this->elements);$i++){
            if($this->elements[$i]==$obj){
                array_push($position,$i);
            }
        }
        for ($i=0;$i<count($position);$i++){
            echo 'index of '.$obj.' is '.$position[$i].'<br>';
        }
    }
}
