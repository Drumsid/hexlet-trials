<?php

// Реализуйте функцию findWhere, которая принимает на вход массив (элементы которого - ассоциативные массивы) и пары ключ-значение 
// (тоже в виде массива), а возвращает первый элемент исходного массива, значения которого соответствуют переданным парам (всем переданным). Если совпадений не было, то функция должна вернуть null.



// findWhere(
//     [
//         ['title' => 'Book of Fooos', 'author' => 'FooBar', 'year' => 1111],
//         ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611],
//         ['title' => 'The Tempest', 'author' => 'Shakespeare', 'year' => 1611],
//         ['title' => 'Book of Foos Barrrs', 'author' => 'FooBar', 'year' => 2222],
//         ['title' => 'Still foooing', 'author' => 'FooBar', 'year' => 3333],
//         ['title' => 'Happy Foo', 'author' => 'FooBar', 'year' => 4444],
//     ],
//     ['author' => 'Shakespeare', 'year' => 1611]
// ); // => ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611]


//=======================================MY SOLUTION ==================================================

// BEGIN (write your solution here)
function findWhere($arr, $searchArr){
    $a = "";
    foreach ($arr as $key => $val){
        if(foundValArrInArr($val, $searchArr)){
            return $val;
        }
    }
    // return $a;
}

function foundValArrInArr($arr, $searchArr){
    $len = count($searchArr);
    $found = 0;
    foreach ($searchArr as $searchKey => $searchVal){
        foreach($arr as $key => $value){
            if($searchVal == $value){
                $found++;
            }
        }
       
    }
    if($found == $len) {
        return true;
    } else false;
    
}
// END

//=======================================MY SOLUTION ==================================================




//=======================================Teacher SOLUTION ==================================================

// BEGIN
function findWhere($data, $where)
{
    foreach ($data as $item) {
        $find = true;
        foreach ($where as $key => $value) {
            if ($item[$key] !== $value) {
                $find = false;
            }
        }
        if ($find) {
            return $item;
        }
    }
}
// END

//=======================================Teacher SOLUTION ==================================================