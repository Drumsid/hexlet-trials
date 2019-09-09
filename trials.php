<?php

// Реализуйте функцию binarySum, которая принимает на вход два бинарных числа (в виде строк)
//  и возвращает их сумму. Результат (вычисленная сумма) также должен быть бинарным числом в виде строки.

// Посмотрите примеры работы функции:


// binarySum('10', '1'); // 11
// binarySum('1101', '101'); // 10010


function binarySum ($a, $b){
  $result = bindec($a) + bindec($b);
  $result = decbin($result);
  return $result;
}

// Реализуйте функцию isPowerOfThree которая определяет, является ли переданное число натуральной степенью тройки. 
// Например число 27 это третья степень (33), а 81 это четвертая (34).


// isPowerOfThree(1); // → true (3^0)
// isPowerOfThree(3); // → true
// isPowerOfThree(4); // → false
// isPowerOfThree(9); // → true

function isPowerOfThree ($num) {
  if ($num == 1 ) {
    return true;
  } else if ($num % 3 == 0 ) {
    return true;
  } else {
    return false;
  }
}