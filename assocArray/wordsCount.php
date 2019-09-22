<?php

// Реализуйте функцию wordsCount, которая считает количество одинаковых слов в предложении. Результатом функции является ассоциативный массив, в ключах которого слова из исходного текста, а значения это количество повторений.

// Пример:


// wordsCount(''); // []
// wordsCount('  one two one'); // ['one' => 2, 'two' => 1]
// wordsCount('  one      two       one     '); // ['one' => 2, 'two' => 1]
// Подсказки
// Разбиение строки по разделителю: explode.
// Для проверки строки на "пустоту" можно использовать функцию empty.

// ====================my solution======================================================

// BEGIN (write your solution here)
function wordsCount($str) {
    
    $words = explode(' ', $str);
    $result = [];
    foreach ($words as $key => $word) {
        if(empty($word)) {
            continue;
        }
        if (!array_key_exists($word, $result)) {
            
            $result[$word] = 1;
        } else {
            $result[$word]++;
        }
    }

    return $result;

}
// END

// ====================my solution======================================================