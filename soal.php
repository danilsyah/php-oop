<?php

function twoSum($nums, $target){
    $arr = [];
    for($i = 0; $i < count($nums); $i++){
        for($j = 0; $j < count($nums); $j++){
            if($nums[$i] + $nums[$j] == $target && $i){
                array_push($arr, $j, $i);
                break;
            }
        }
    }
    return $arr;
}

var_dump(twoSum([2,7,11,15],9));