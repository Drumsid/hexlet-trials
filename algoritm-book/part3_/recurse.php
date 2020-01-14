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
    if ($num !== 1 && $num > 1){
        return isPowTwo($num / 2);
    }
    if ($num == 1) {
        return 'yes';
    }
        return 'no';
}