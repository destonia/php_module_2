<?php

    $arr=[5,4,6,8,4,2,3,6,4,9];
    function findMin($arr){
        $min=$arr[0];
        $index=0;
        for($i=1;$i<count($arr);$i++){
            if($arr[$i]<$min){
                $min=$arr[i];
                $index=$i;
            }
        }
        return $index;
    }
    echo 'the min in array arr is '.findMin($arr).' position';

