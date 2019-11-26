<?php

// Реализуйте функцию enlargeArrayImage, которая принимает изображение в виде двумерного массива и увеличивает его в два раза.


// $arr = [
//     ['*','*','*','*'],
//     ['*',' ',' ','*'],
//     ['*',' ',' ','*'],
//     ['*','*','*','*']
// ];
// ****
// *  *
// *  *
// ****

// enlargeArrayImage($arr);
// ********
// ********
// **    **
// **    **
// **    **
// **    **
// ********
// ********


$arr = [
    ['*','*','*','*'],
    ['*',' ',' ','*'],
    ['*',' ',' ','*'],
    ['*','*','*','*']
];

function enlargeArrayImage($arr)
{
  $dubleValue = array_map(function($vol){
    return array_merge(...array_map(null, $vol, $vol));
  }, $arr);

  return array_reduce($dubleValue, function($acc, $arr){
    for ($i = 0; $i < 2; $i++){
      $acc[] = $arr;
    }
    return $acc;
  }, []);
}

//================================================= hexlet solutions ==========================
// BEGIN
function enlargeArrayImage2($arr)
{
    $result = [];

    foreach ($arr as $child) {
        $childArray = [];
        foreach ($child as $symbol) {
            $childArray[] = $symbol;
            $childArray[] = $symbol;
        }
        $result[] = $childArray;
        $result[] = $childArray;
    }

    return $result;
}

// ALTERNATIVE SOLUTION
// function duplicateEachItemInArray($arr)
// {
//   // create subarrays for each value
//   $arrayOfArraysOfTwoItems = array_map(function ($a) {
//     return [$a, $a];
//   }, $arr);

//   // flatten
//   return call_user_func_array('array_merge', $arrayOfArraysOfTwoItems);
// }

// function enlargeArrayImage($arr)
// {
//   $verticallyStretched = array_map("App\Arrays\duplicateEachItemInArray", $arr);
//   return duplicateEachItemInArray($verticallyStretched);
// }
// END