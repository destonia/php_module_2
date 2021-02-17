<?php
include ('MyList.php');
$listInteger = new MyList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
$listInteger->insert(1,5);
$listInteger->insert(1,0);
$listInteger->addAll(array(1,2,3));
//$listInteger->isEmpty();
$listInteger->indexOfObj(1);