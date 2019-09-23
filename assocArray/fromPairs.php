<?php

// Реализуйте функцию fromPairs, которая принимает на вход массив, состоящий из массивов-пар, 
// и возвращает ассоциативный массив, полученный из этих пар.

// Примечания
// Если при конструировании объекта попадаются совпадающие ключи, то берётся ключ из последнего массива-пары:


//    fromPairs([['cat', 5], ['dog', 6], ['cat', 11]]
   // → ['dog' => 6, 'cat' => 11]
// Примеры


// fromPairs([['fred', 30], ['barney', 40]]);
// → ['fred' => 30, 'barney' => 40]

// ====================my solution======================================================

// BEGIN (write your solution here)
function fromPairs ($arr) {
    $result = [];
    foreach ($arr as $key => $value){
        if(!array_key_exists($value[0], $result)){
            $result[$value[0]] = $value[1];
        } else if (array_key_exists($value[0], $result) && $result[$value[0]] < $value[1]){
             $result[$value[0]] = $value[1];
        }
    }
    return $result;
}
// END

// ====================my solution======================================================

// ====================teacher solution======================================================

// BEGIN
function fromPairs(array $data)
{
    $result = [];
    foreach ($data as [$key, $value]) {
        $result[$key] = $value;
    }

    return $result;
}
// END

// ====================teacher solution======================================================