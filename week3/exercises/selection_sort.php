<?php

function selection_sort($data)
{
    for ($i = 0; $i < count($data) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($data); $j++) {
            if ($data[$j] < $data[$min]) {
                $min = $j;
            }
        }
        $data = swap_positions($data, $i, $min);
    }
    return $data;
}

function swap_positions($arr, $iIndex, $minIndex){
    $temp = $arr[$minIndex];
    $arr[$minIndex] = $arr[$iIndex];
    $arr[$iIndex] = $temp;
    return $arr;
}
$my_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ', $my_array);
echo "\nSorted Array :\n";
echo implode(', ', selection_sort($my_array));



/*$testArray = [1, 9, 4.5, 6.6, 5.7, -4.5];
function findMin($array)
{
    if (count($array) == 0) {
        echo "this array have no element";
    } else {
        $stackArray = [];
        $min = $array[0];
        $minIndex = 0;
        for ($i = 1; $i < count($array) - 1; $i++) {
            if ($array[$i] < $min) {
                $min = $array[$i];
                $minIndex = [$i];
            }
        }
        array_push($stackArray, $min);
        unset($array[$minIndex]);
    }
    return $stackArray;
}

var_dump($testArray);*/