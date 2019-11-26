<?php

// Реализуйте функцию findIndexOfNearest, которая принимает на вход массив чисел и искомое число. Задача функции — найти в массиве 
// ближайшее число к искомому и вернуть его индекс в массиве.

// Если в массиве содержится несколько чисел, одновременно являющихся ближайшими к искомому числу, то возвращается наименьший из индексов ближайших чисел.

// Примеры

// findIndexOfNearest([], 2); // => null
// findIndexOfNearest([15, 10, 3, 4], 0); // => 2

function findIndexOfNearest($arr, $num)
{
  $minDif = array_reduce($arr, function ($acc, $vol) use ($num){
    $acc[] = $num - $vol;
    return $acc;
  }, []);
 
  $abs = array_map(function ($item) {
    return abs($item);
  }, $minDif);

  if (count($abs) == 0) {
    return null;
  }
  $volumInArr =  min($abs);
  return array_search($volumInArr, $abs);
}

// ============================= hex solution ========================

// BEGIN
function findIndexOfNearest2(array $items, $value)
{
    if (empty($items)) {
        return null;
    }
    return array_reduce(array_keys($items), function ($acc, $i) use ($items, $value) {
        return abs($items[$i] - $value) < abs($items[$acc] - $value) ? $i : $acc;
    }, 0);
}
// END
