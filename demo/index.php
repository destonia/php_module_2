<?php

class ReadingList
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            // truong hop ngoai le
            throw new RuntimeException('Stack is empty');
        }
    }

    public function pop()
    {
        if ($this->checkEmpty()) {
            throw new RuntimeException('Stack is empty');
        } else {
            return array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }

    public function checkEmpty()
    {
        return empty($this->stack);
    }

}

$ReadingList = new ReadingList(10);
$ReadingList->push('verygood');
$ReadingList->push('heathy');
$ReadingList->push('not sugar');
$ReadingList->push('cake');
$ReadingList->push('noodle');
$ReadingList->pop();
$ReadingList->pop();
$ReadingList->pop();
$ReadingList->push('milk');
$ReadingList->push('watermelon');
$ReadingList->top();
/*$ReadingList->checkEmpty();
$ReadingList->pop();
$ReadingList->pop();
$ReadingList->pop();
$ReadingList->pop();*/
//echo $this->stack;
var_dump($ReadingList);