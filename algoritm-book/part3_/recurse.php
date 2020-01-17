<?php

// простая рекурсия
function counterRecurse($num)
{
    print_r($num);
    if ($num <= 0) {  // точка остановки
        return;
    } else {
        return counterRecurse($num - 1); // рекурсия
    }
}

// факториал
function factorial($num)
{
    if ($num == 1) { // точка остановки
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}

//==============================================================================================
// Даны два целых числа A и В (каждое в отдельной строке).
// Выведите все числа от A до B включительно, в порядке возрастания,
// если A < B, или в порядке убывания в противном случае

// fromLargeToSmall(5, 1) => 5, 4, 3, 2, 1

function buildConsecutiveNumber($bigerNum, $smalerNum = 0)
{
    print_r($bigerNum . " ");
    if ($bigerNum <= $smalerNum) {  // точка остановки
        return;
    } else {
        return buildConsecutiveNumber($bigerNum - 1, $smalerNum); // рекурсия
    }
}

function fromLargeToSmall($numA, $numB)
{
    if ($numA > $numB) {
        return buildConsecutiveNumber($numA, $numB);
    } else {
        return buildConsecutiveNumber($numB, $numA);
    }
}
//==============================================================================================

// Дано натуральное число N. Выведите слово YES, если число N является точной степенью двойки,
// или слово NO в противном случае.
// Операцией возведения в степень пользоваться нельзя!
function isPowTwo($num)
{
    if ($num !== 1 && $num > 1) {
        return isPowTwo($num / 2);
    }
    if ($num == 1) {
        return 'yes';
    }
    return 'no';
}

// ================================================================================================

// нужно разделить площадь квадрата или прямоугольника на макимально возможные одинаковые квадраты
// пример quadro(1680, 640); => 160 / 80 максимальная длина стороны квадрата будет 80

function width($hight, $width)
{
    if ($hight > $width) {
        return $hight / $width;
    }
    if ($hight < $width) {
        return $width / $hight;
    }
    return $hight / $width;
}

function findMaxLength($hight, $width)
{
    $result = [];
    if ($hight > $width) {
        $result['maxLen'] = $hight;
        $result['minLen'] = $width;
        return $result;
    } else {
        $result['maxLen'] = $width;
        $result['minLen'] = $hight;
        return $result;
    }
}

function quadro($maxLen, $minLen)
{
    $arrLen = findMaxLength($maxLen, $minLen);
    ['maxLen' => $hight, 'minLen' => $width] = $arrLen;

    if (2 == width($hight, $width)) {
        // $result = $hight / $width;
        return "{$hight}" . " / " .  "{$width}" . " максимальная длина стороны квадрата будет " . "{$width}";
    }
    if (1 == width($hight, $width)) {
        $result = $hight / $width;
        return "{$hight}" . " " .  "{$width}" . " максимальная длина стороны квадрата будет " . "{$result}";
    }
    $newLen = $hight - $width;
    return quadro($newLen, $width);
}

// ====================================
// посчитать сумму всех чисел массива не используя циклы
$arr = [1, 2, 3, 4, 5];

function myCount($arr)
{
    $num = 0;
    if (count($arr)) {
        $num = array_shift($arr);
        return  $num + myCount($arr);
    }
    return $num;
}
