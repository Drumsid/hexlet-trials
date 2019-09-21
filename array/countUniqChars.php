<?php

//Реализуйте функцию countUniqChars, которая получает на вход строку и считает, 
// сколько символов (уникальных символов) использовано в этой строке.
// Например, в строке 'yy' всего один уникальный символ — y.
// А в строке '111yya!' — четыре уникальных символа: 1, y, a и !.

// Задание необходимо выполнить без использования функции array_unique.

// Примеры

// $text1 = 'yyab';
// countUniqChars($text1); // => 3

// $text2 = 'You know nothing Jon Snow';
// countUniqChars($text2); // => 13

// $text3 = '';
// countUniqChars($text3); // => 0

//=========================================================================================
//=========================================================================================
//=========================================================================================


//=======================================MY SOLUTION ==================================================

// BEGIN (write your solution here)
function countUniqChars($str){
    $length = strlen($str);
    if(!strlen($str) == 0) {
        $result = $str[0];
    } else {
        return 0;
    }


    for ($i = 1; $i < $length; $i++){
        $result .= findChar($result, $str[$i]);
    }

    return strlen($result);
}


function findChar($str, $char){
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++){
        if($str[$i] == $char){
            return "";
        }
    }

    return $char;
}

// END

//=======================================MY SOLUTION ==================================================


//=======================================Teacher SOLUTION ==================================================

// BEGIN
function countUniqChars($text)
{
    $uniqChars = [];
    for ($i = 0; $i < strlen($text); $i++) {
        if (!in_array($text[$i], $uniqChars)) {
            $uniqChars[] = $text[$i];
        }
    }
    return count($uniqChars);
}
// END

//=======================================Teacher SOLUTION ==================================================
