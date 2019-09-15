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
//=====================================================================================================================
//=====================================================================================================================
//=====================================================================================================================

// Реализуйте функцию isPowerOfThree которая определяет, является ли переданное число натуральной степенью тройки.
// Например число 27 это третья степень (33), а 81 это четвертая (34).


// isPowerOfThree(1); // → true (3^0)
// isPowerOfThree(3); // → true
// isPowerOfThree(4); // → false
// isPowerOfThree(9); // → true

// мое решение
function isPowerOfThree ($num) {
  if ($num == 0 || $num == 6) {
      return false;
  } else if ($num == 1) {
    return true;
  } else if ($num % 3 == 0 ) {
    return true;
  } else {
    return false;
  }
}
// мое решение


//решение учителя .. круто сделано

// BEGIN
function isPowerOfThree(int $num)
{
    $current = 1;
    while ($current <= $num) {
        if ($current === $num) {
            return true;
        }
        $current *= 3;
    }

    return false;
}
// END

//решение учителя
//=====================================================================================================================
//=====================================================================================================================
//=====================================================================================================================


// Дано не отрицательное целое число num. Итеративно сложите все входящие в него цифры до тех пор пока не останется одна цифра.

// Для числа 38 процесс будет выглядеть так:

// 3 + 8 = 11
// 1 + 1 = 2
// Результат: 2

// src/Solution.php
// Реализуйте функцию addDigits

// addDigits(0); // 0
// addDigits(1); // 1
// addDigits(9); // 9
// addDigits(10); // 1
// addDigits(38); // 2

function addDigits($num) {
  $num = strval($num);
  $stringLen = strlen($num);
  $result = 0;


  for ($i = 0; $i < $stringLen; $i++) {
    $result += $num[$i];
  }

  if ($result >= 10) {
    return addDigits($result);
  }
  else {
    return $result;
  }

}

// решение учителя

// BEGIN
function sumDigits(int $number)
{
    $str = (string) $number;
    $result = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $result += (int) $str[$i];
    }
    return $result;
}

function addDigits($num)
{
    $result = $num;
    while ($result >= 10) {
        $result = sumDigits($result);
    }

    return $result;
}
// END
