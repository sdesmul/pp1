<?php
//function that prints out all the items in an array
function printArr($items){
    foreach ($items as $item){
        echo $item . "<br>";

    }
}

function largest($nums){
    $largest = max($nums);
    return $largest;
}

function average($array){
    $average = array_sum($array)/count($array);
    return $average;
}

function removeDups($array){
    return array_unique($array);
}