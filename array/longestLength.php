<?php
// Реализуйте функцию longestLength принимающую на вход строку и возвращающую длину максимальной 
// последовательности из неповторяющихся символов. Подстрока может состоять из одного символа. 
// Например в строке qweqrty, можно выделить следующие подстроки: qwe, weqrty. 
// Самой длинной будет weqrty.

// Пример:

// longestLength('abcdeef'); // → 5
// longestLength('jabjcdel'); // → 7 

//=========================================================================================
//=========================================================================================
//=========================================================================================


//=======================================MY SOLUTION ==================================================



// BEGIN (write your solution here)
function longestLength ($str) {
    $length = strlen($str);
    $count = 0;
    
    for($i = 0; $i < $length; $i++){
        $result = longStr($str, $i);
        if ($count < $result) {
            $count = $result;
        }
    }
    return $count;
}



function longStr(string $str, int $j){
    $len = strlen($str);
    $arrStr = [];
    while ($j < $len) {
        if(!in_array($str[$j], $arrStr)){
            $arrStr[] = $str[$j];
            $j++;
        } else {
             return count($arrStr);
        }  
        
    }
    return count($arrStr);
}
// END

//=======================================MY SOLUTION ==================================================


//=======================================Teacher SOLUTION ==================================================

// BEGIN
function isUniqueString(string $string)
{
    return count(array_flip(str_split($string))) === strlen($string);
};

function longestLength(string $str)
{
    $length = strlen($str);
    for ($i = $length - 1; $i >= 0; $i -= 1) {
        for ($j = 0; $j < $length - $i; $j += 1) {
            $sub = substr($str, $j, $i + 1);
            if (isUniqueString($sub)) {
                return $i + 1;
            }
        }
    }
    return 0;
}
// END

//=======================================Teacher SOLUTION ==================================================