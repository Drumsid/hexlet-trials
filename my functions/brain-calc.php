<?php

// random znak
function randomSign()
{
    $sign = ['+', '-', '*'];
    $random = rand(0, 2);
    return $sign[$random];
}


// generate random expression
// return
//     Array
//     (
//         [firstNum] => 25
//         [sign] => +
//         [secondNum] => 42
//     )
function genRandExp()
{
    $res = [];
    $res['firstNum'] = rand(1, 50);
    $res['sign'] = randomSign();
    $res['secondNum'] = rand(1, 50);
    return $res;
}

// принимает массив типа
//     Array
//     (
//         [firstNum] => 25
//         [sign] => +
//         [secondNum] => 42
//     )
// return => 25 + 42 возвращает результат выражения
function countExp($arr)
{
    if ($arr['sign'] == '+') {
        return $arr['firstNum'] + $arr['secondNum'];
    } elseif ($arr['sign'] == '-') {
        return $arr['firstNum'] - $arr['secondNum'];
    } else {
        return $arr['firstNum'] * $arr['secondNum'];
    }
}

// expression array to string
//     Array
//     (
//         [firstNum] => 25
//         [sign] => +
//         [secondNum] => 42
//     )
//   return =>  "25 = 42"
function expToString($arr)
{
    return "{$arr['firstNum']}  {$arr['sign']}  {$arr['secondNum']}";
}



// $arrTest = genRandExp();

// // print_r(randomSign());
// echo "<br>";

// print_r($arrTest);
// echo "<br>";

// print_r(countExp($arrTest));
// echo "<br>";

// print_r(expToString($arrTest));
// echo "<br>";
