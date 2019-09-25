<?php

// Слаг — часть адреса сайта, которая используется для идентификации ресурса в Человекопонятном виде. 
// Без слага /posts/3, со слагом /posts/my-super-post, где слаг это my-super-post. 
// Слаг обычно генерируется автоматически на основе названия ресурса, например статьи. 
// На Хекслете слаги используются повсеместно.

// Функция, выполняющая трансляцию текста в слаг, есть и в библиотеке Funct:


// \Funct\Strings\slugify('Global Thermonuclear Warfare'); // => 'global-thermonuclear-warfare'
// \Funct\Strings\slugify('Crème brûlée'); // => 'creme-brulee'
// src\Slugify.php
// Реализуйте функцию slugify самостоятельно, не прибегая к \Funct\Strings\slugify. Преобразования, которые она должна делать:

// Приводить к нижнему регистру все символы в строке
// Удалять все пробелы
// Соединять слова с помощью дефисов


// slugify(''); // ''
// slugify('test'); // 'test'
// slugify('test me'); // 'test-me'
// slugify('La La la LA'); // 'la-la-la-la'
// slugify('O la      lu'); // 'o-la-lu'
// slugify(' yOu   '); // 'you'
// Подсказки
// Функции, которые вам могут понадобится:

// toLower()
// compact()

// В общем случае это не обязательно. Возможно, ваше решение не будет похожим на решение учителя.

// ====================my solution======================================================
use Funct\Strings;
use Funct\Collection;
// BEGIN (write your solution here)
function slugify ($str){
    $lower = mb_strtolower($str);
    $arrExplode = explode(" ", $lower);
    $delEmpty = delEmptyValueInArray($arrExplode);
    $strDefice = implode("-", $delEmpty);
    return $strDefice;
}

function delEmptyValueInArray($arrExplode){
    $result = [];
    foreach ($arrExplode as $key => $val){
        if($val != ''){
            $result[] = $val;
        }
    }
    return $result;
}
// END

// ====================my solution======================================================



// ====================teacher solution======================================================
use Funct\Strings;
use Funct\Collection;
// BEGIN
function slugify($text)
{
    $prepared = Strings\toLower($text);
    $parts = explode(' ', $prepared);
    $parts = Collection\compact($parts);
    return implode('-', $parts);
}
// END

// ====================teacher solution======================================================