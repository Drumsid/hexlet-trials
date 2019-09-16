<?php
// Реализуйте функцию longestLength принимающую на вход строку и возвращающую длину максимальной 
// последовательности из неповторяющихся символов. Подстрока может состоять из одного символа. 
// Например в строке qweqrty, можно выделить следующие подстроки: qwe, weqrty. 
// Самой длинной будет weqrty.

// Пример:

// longestLength('abcdeef'); // → 5
// longestLength('jabjcdel'); // → 7 


// пока не могу решить...

$str = 'abcddef';

function longestLength ($str){
    $length = strlen($str);
    $latters = [];
    
    for ($i = 0; $i < $length; $i++){
        if (!in_array($str[$i], $latters)) {
            $latters[] = $str[$i];
        }
    }
    $result = count($latters);
    
    return $result;
}


$a = longestLength($str);
print_r($a);

