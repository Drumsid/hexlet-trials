<?php

/**
 * Реализуйте функцию bubbleSort, которая сортирует массив используя пузырьковую сортировку.
Постарайтесь не подглядывать в текст теории и попробуйте воспроизвести алгоритм по памяти.

 use function App\Arrays\bubbleSort;

bubbleSort([]); // => []
bubbleSort([3, 10, 4, 3]); // => [3, 3, 4, 10]

=========================================================================================
=========================================================================================
=========================================================================================


=======================================MY SOLUTION ================================================== 
 **/

// BEGIN (write your solution here)
function bubbleSort($arr)
{
    $length = count($arr);
    do {
        $counted = false;
        for ($i = 0; $i < $length - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $tmp = $arr[$i + 1];
                $arr[$i + 1] = $arr[$i];
                $arr[$i] = $tmp;
                $counted = true;
            }
        }

    } while ($counted);
    return $arr;
}
// END

//=======================================MY SOLUTION ==================================================


//=======================================Teacher SOLUTION ==================================================

// BEGIN
function bubbleSort($arr)
{
    $size = count($arr);
    do {
        $swapped = false;
        for ($i = 0, $stepsCount = $size - 1; $i < $stepsCount; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
                $swapped = true;
            }
        }
        $size--;  // я этого не писал но сработало и так
    } while ($swapped);

    return $arr;
}

// END

//=======================================Teacher SOLUTION ==================================================
