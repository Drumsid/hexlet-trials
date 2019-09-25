<?php

// Реализуйте функцию getSameParity, которая принимает на вход список и возвращает новый, 
// состоящий из элементов, у которых такая же четность, как и у первого элемента входного списка.


// getSameParity([]); // => []
// getSameParity([-1, 0, 1, -3, 10, -2]); // => [-1, 1, -3]

// ====================my solution======================================================

// BEGIN (write your solution here)
function getSameParity($arr){
    $result = 0;
    if(empty($arr)){
        return $result =[];
    }
    $result = 0;
    if($arr[0] % 2 == 0){
        $result = myEven($arr);
    } else if ($arr[0] % 2 != 0) {
        $result = myOdd($arr);
    }
    return $result;
}


function myEven($arr){
    $result = [];
    foreach($arr as $val){
        if($val % 2 == 0){
            $result[] = $val;
        }
    }
    return $result;
}

function myOdd($arr){
    $result = [];
    foreach($arr as $val){
        if($val % 2 != 0){
            $result[] = $val;
        }
    }
    return $result;
}
// END

// ====================my solution======================================================

// ====================teacher solution======================================================

// BEGIN
function getSameParity(array $numbers)
{
    if (empty($numbers)) {
        return $numbers;
    }

    [$firstNum] = $numbers;
    $parity = abs($firstNum) % 2;
    $filtered = array_filter($numbers, function ($num) use ($parity) {
        return (abs($num) % 2) === $parity;
    });

    return array_values($filtered);
}
// END

// ====================teacher solution======================================================