<?php
// Реализуйте функцию summaryRanges, которая находит в массиве непрерывные возрастающие 
// последовательности чисел и возвращает массив с их перечислением.


// summaryRanges([]);
// // → []

// summaryRanges([1]);
// // → []

// summaryRanges([1, 2, 3]);
// // → ["1->3"]

// summaryRanges([0, 1, 2, 4, 5, 7]);
// // → ["0->2", "4->5"]

// summaryRanges([110, 111, 112, 111, -5, -4, -2, -3, -4, -5]);
// // → ['110->112', '-5->-4']

//===== my solution ========================

// BEGIN (write your solution here)
function summaryRanges($arr)
{
    $tmp = [];
    $result = [];
    $lastArr = count($arr);
    foreach ($arr as $v){
        if (count($tmp) == 0){
            $tmp[] = $v;
        }else {
            $lastTmp = count($tmp) - 1;
            if(($tmp[$lastTmp] + 1) == $v){
                $tmp[] = $v;
            } else if (count($tmp) >= 2) {
                $a = $tmp[0];
                $b = $tmp[$lastTmp];
                $result[] = $a.'->'.$b;
                $tmp = [];
                $tmp[] = $v;
            } else {
                $tmp = [];
                $tmp[] = $v;
            }
        }
      $lastArr--;
      if($lastArr == 0 && count($tmp)  >= 2){
        $lastTmp = count($tmp) - 1;
        $a = $tmp[0];
        $b = $tmp[$lastTmp];
        $result[] = $a.'->'.$b;         
      }
    }
    return $result;
}
// END


//===== hexlet solution ========================

// BEGIN
// function summaryRanges(Array $array)
// {
//     $result = [];

//     if (empty($array)) {
//         return $array;
//     }

//     $firstValue = $array[0];
//     $firstIndex = 0;
//     foreach ($array as $index => $value) {
//         if ($index === 0) {
//             continue;
//         }
//         $expectedValue = $array[$index - 1] + 1;
//         if ($expectedValue !== $value) {
//             if ($firstIndex !== $index - 1) {
//                 $result[] = "$firstValue->{$array[$index - 1]}";
//             }
//             $firstValue = $value;
//             $firstIndex = $index;
//         } elseif ($index === count($array) - 1) {
//             $result[] = "$firstValue->{$array[$index]}";
//         }
//     }

//     return $result;
// }
// END