<?php

// Реализуйте анонимную функцию, которая принимает на вход строку и возвращает её последний 
// символ (или null, если строка пустая). Запишите созданную функцию в переменную $last.

// Примеры


// $last('');     // => null
// $last('0');    // => 0
// $last('210');  // => 0
// $last('pow');  // => w
// $last('kids'); // => s


//=======================================MY SOLUTION ==================================================

function run(string $text)
{
    // BEGIN (write your solution here)
    $last = function ($text){
        if($text == ''){
            return null;
        }
        $lastChar = strlen($text) - 1;

        return $text[$lastChar];
    };
    // END

    return $last($text);
}

//=======================================MY SOLUTION ==================================================





//=======================================Teacher SOLUTION ==================================================

    // BEGIN
    $last = function (string $text) {
        if ($text === '') {
            return null;
        }
        return $text[strlen($text) - 1];
    };
    // END

//=======================================Teacher SOLUTION ==================================================