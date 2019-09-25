<?php

// Реализуйте функцию average, которая возвращает среднее арифметическое всех переданных аргументов. Если функции не передать ни 
// одного аргумента, то она должна вернуть null.


// average(0); // => 0
// average(0, 10); // => 5
// average(-3, 4, 2, 10); // => 3.25
// average(); // => null


//=======================================MY SOLUTION ==================================================

// BEGIN (write your solution here)
function average(...$arguments)
{
    if($arguments == null){
        return null;
    }
    
    $count = count($arguments);
    $arrSum = array_sum($arguments);
    if($arrSum == 0){
        return 0;
    }
    return $arrSum / $count;
    
}
// END

//=======================================MY SOLUTION ==================================================





//=======================================Teacher SOLUTION ==================================================

// BEGIN
function average(...$numbers)
{
    if (empty($numbers)) {
        return null;
    }

    return (array_sum($numbers)) / (count($numbers));
}
// END

//=======================================Teacher SOLUTION ==================================================