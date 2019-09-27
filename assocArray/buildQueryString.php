<?php

// Query String (строка запроса) — часть адреса страницы в интернете содержащая константы и их значения. Она начинается после вопросительного знака и идет до конца адреса. Пример:

// # query string: page=5
// https://ru.hexlet.io/blog?page=5
// Если параметров несколько, то они отделяются амперсандом &:

// # query string: page=5&per=10
// https://ru.hexlet.io/blog?per=10&page=5
// src\AssociativeArrays.php
// Реализуйте функцию buildQueryString, которая принимает на вход список параметров и возвращает сформированный query string из этих параметров:



// buildQueryString(['per' => 10, 'page' => 1 ]);
// // → page=1&per=10
// Имена параметров в выходной строке должны располагаться в алфавитном порядке (то есть их нужно отсортировать).


//=======================================MY SOLUTION ==================================================

// BEGIN (write your solution here)
function buildQueryString($arr){
    $result = [];
    foreach($arr as $key => $val){
        $result[] = $key . "=" . $val;
    }
    sort($result);
    return $result = implode("&", $result);

}
// END

//=======================================MY SOLUTION ==================================================


//=======================================Teacher SOLUTION ==================================================

// BEGIN
function buildQueryString(Array $array)
{
    ksort($array);
    $result = [];
    foreach($array as $key => $value) {
        $result[] = "{$key}={$value}";
    }

    return implode('&', $result);
}
// END

//=======================================Teacher SOLUTION ==================================================
?>