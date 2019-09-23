<?php

// Реализуйте набор функций, для работы со словарём, построенным на хеш-таблице. Для простоты, наша реализация
// не поддерживает разрешение коллизий.
//
//     make() — создаёт новый словарь
//     set($map, $key, $value) — устанавливает в словарь значение по ключу. Работает и для создания и для изменения. Функция возвращает true,
//     если удалось установить значение. При возникновении коллизии, функция никак не меняет словарь и возвращает false.
//     get($map, $key, $default = null) — читает значение по ключу.
//
// Функции set и get принимают первым параметром словарь. Передача идет по ссылке, поэтому set может изменить его напрямую.
//
// Для полноценного погружения в тему, считаем, что массив в PHP может использоваться только как индексированный массив.
//
//
// $map = Map\make();
// $result = Map\get($map, 'key');
// print_r($result); // => null
//
// $result = Map\get($map, 'key', 'value');
// print_r($result); // => value
//
// Map\set($map, 'key2', 'value2');
// $result = Map\get($map, 'key2');
// print_r($result); // => value2
//
// Подсказки
//
//     crc32 — хеш-функция
//     Индекс по которому будет храниться значение во внутреннем массиве вычисляется так: crc32($key) % 1000.
//     То есть к ключу применяется хеш-функция и берется остаток от деления на тысячу. Это нужно для ограничения размера массива в разумных рамках.

//=======================================MY SOLUTION ==================================================

// BEGIN (write your solution here)
function make(){
    return $map = [];
}


function set(&$arr, $key, $val ){
    $hash = crc32($key) % 1000;
    
    if(array_key_exists($hash, $arr) && $arr[$hash][1] == $val){
        return false;
    } 
    else if (array_key_exists($hash, $arr) && ($arr[$hash][0] != $key && $arr[$hash][1] != $val)) {
        return false;// need change hash
    }
    else if (array_key_exists($hash, $arr) && $arr[$hash][1] != $val) {
        $arr[$hash][1] = $val;
        return true;
    } 
    else {
        $arr[$hash] = [$key, $val];
        return true;
    }
}


function get($arr, $key, $val = null) {
    $hash = crc32($key) % 1000;
    
    if(array_key_exists($hash, $arr)) {
        return $arr[$hash][1];
    } 
    else {
        return $val;
    }
}
// END

//=======================================MY SOLUTION ==================================================

//=======================================Teacher SOLUTION ==================================================

// BEGIN
function getIndex($key)
{
    return crc32($key) % 1000;
}

function make()
{
    return [];
}

function set(&$map, $key, $value)
{
    $index = getIndex($key);
    if (isset($map[$index])) {
        [$currentKey] = $map[$index];
        if ($currentKey != $key) {
            return false;
        }
    }
    $map[$index] = [$key, $value];
    return true;
}

function get($map, $key, $default = null)
{
    $index = getIndex($key);
    if (!isset($map[$index])) {
        return $default;
    }
    [, $value] = $map[$index];
    return $value;
}
// END

//=======================================Teacher SOLUTION ==================================================