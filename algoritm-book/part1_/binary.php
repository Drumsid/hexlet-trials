<?php

// Реализация функции бинарного поиска в ОСОРТИРОВАННОМ списке (массиве)

$arr = [2, 5, 7, 9, 12, 14, 16, 18, 19, 24, 27, 59];

function roundEven($num)
{
    if ($num % 2 !== 0) {
        return $num - 1;
    }
    return $num;
}

function binary($arr, $search)
{
    $low = 0;
    $hight = count($arr) - 1;

    while ($low <= $hight) {
        $mid = (roundEven($low + $hight)) / 2;
        $guess = $arr[$mid];
        if ($guess == $search) {
            return $mid;
        }
        if ($guess > $search) {
            $hight = $mid - 1;
        }
        if ($guess < $search) {
            $low = $mid + 1;
        }
    }
    return null;
}

var_dump(binary($arr, 59));
