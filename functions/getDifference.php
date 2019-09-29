<?php

// Реализуйте функцию getDifference, которая принимает на вход два массива, а возвращает массив, 
// составленный из элементов первого, которых нет во втором. Сделайте решение функциональным.

// Эту задачу можно решить с помощью функции array_diff, но подразумевается что вы сделаете это без ее использования.


// getDifference([2, 1], [2, 3]);
// → [1]



// ====================my solution======================================================

// BEGIN (write your solution here)
function getDifference($arrItems, $arrFilter){
    
    $sortArr = array_filter($arrItems, function ($item) use ($arrFilter) {
        return (!in_array($item, $arrFilter));
    });
    return array_values($sortArr);
}
// END

// ====================my solution======================================================

// ====================teacher solution=================================================

// BEGIN
function getDifference($items1, $items2)
{
    $filtered = array_filter($items1, function ($item) use ($items2) {
        return !in_array($item, $items2);
    });
    return array_values($filtered);
}
// END

// ====================teacher solution=================================================