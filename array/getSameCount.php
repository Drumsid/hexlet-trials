<?php

// Реализуйте функцию getSameCount, которая считает количество общих уникальных 
// элементов для двух массивов. 

// Аргументы:
//  1.Первый массив
//  2.Второй массив
// Примеры

// getSameCount([], []); // 0
// getSameCount([4, 4], [4, 4]); // 1
// getSameCount([1, 10, 3], [10, 100, 35, 1]); // 2
// getSameCount([1, 3, 2, 2], [3, 1, 1, 2]); // 3

//=========================================================================================
//=========================================================================================
//=========================================================================================


//=======================================MY SOLUTION ==================================================

// BEGIN (write your solution here)
function getSameCount($arr1, $arr2) {
    $arr1 = array_values(array_unique($arr1));
    $length = count(array_unique($arr1));
    $count = 0;
    
    for($i = 0; $i < $length; $i++){
        $count += findNum($arr2, $arr1[$i]);
    }
    
    return $count;
}



function findNum($arr, $num){
    $arr = array_values(array_unique($arr));
    $length = count($arr);
    for ($i = 0; $i < $length; $i++){
        if($arr[$i] === $num) {
            return 1;
        }
    }
    return 0;
}
// END

//=======================================MY SOLUTION ==================================================


//=======================================Teacher SOLUTION ==================================================

// BEGIN
function getSameCount($coll1, $coll2)
{
    $count = 0;
    $uniqColl1 = array_unique($coll1);
    $uniqColl2 = array_unique($coll2);
    foreach ($uniqColl1 as $item1) {
        foreach ($uniqColl2 as $item2) {
            if ($item1 === $item2) {
                $count++;
            }
        }
    }

    return $count;
}
// END

//=======================================Teacher SOLUTION ==================================================


