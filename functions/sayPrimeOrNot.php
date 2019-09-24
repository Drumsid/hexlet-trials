<?php
// Реализуйте функцию sayPrimeOrNot, которая проверяет переданное число на простоту и печатает на экран yes или no.

// sayPrimeOrNot(5); // => yes
// sayPrimeOrNot(4); // => no
// Подсказки
// Цель этой задачи — научиться отделять чистый код от кода с побочными эффектами.

// Для этого выделите процесс определения того, является ли число простым, в отдельную функцию, возвращающую логическое значение. Это функция, с помощью которой мы отделяем чистый код от кода, интерпретирующего логическое значение (как 'yes' или 'no') и делающего побочный эффект (печать на экран).

// Пример такого разделения и хороших абстракций — в решении учителя.

// ====================my solution======================================================

// BEGIN (write your solution here)
function sayPrimeOrNot($num){
    if(isSimpleNum($num)){
        print_r('yes');
        return;
    }
    print_r('no');
}
function isSimpleNum($num){
    if($num <= 1){
        return false;
    }
    for ($i = 2; $i < $num; $i++){
        if($num % $i == 0){
            return false;
        }
    }
    return true;
}
// END

// ====================my solution======================================================


// ====================teacher solution======================================================

// BEGIN
function isPrime(int $num)
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

function sayPrimeOrNot($num)
{
    $text = isPrime($num) ? 'yes' : 'no';
    print_r($text);
}
// END

// ====================teacher solution======================================================