<?php

// Реализуйте функцию without, которая работает по такому же принципу, что и функция из теории, кроме одного аспекта. 
// Эта функция должна принимать любое число аргументов, где первый аргумент массив, а все остальные - значения, 
// которые нужно исключить из переданного массива. Сделайте решение функциональным.

// Эту задачу можно решить с помощью функции array_diff, но подразумевается что вы сделаете это без ее использования.


// without([3, 4, 10, 4, 'true'], 4); // => [3, 10, 'true']
// without(['3', 2], 0, 5, 11); // => ['3', 2]



// ====================my solution======================================================

// BEGIN (write your solution here)
function without($arr, ...$nums){
    
    $sortArr = array_filter($arr, function ($item) use ($nums) {
        return (!in_array($item, $nums));
    });
    return array_values($sortArr);
}
// END

// ====================my solution======================================================

// ====================teacher solution=================================================

// BEGIN
function without(array $items, ...$values)
{
    $filtered = array_filter($items, function ($item) use ($values) {
        return !in_array($item, $values);
    });
    // Сбрасываем ключи
    return array_values($filtered);
}
// END

// ====================teacher solution=================================================