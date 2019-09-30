<?php

// В этой задаче, тесты написаны для сегментов, которые в свою очередь используют точки. 
// Ваша задача, реализовать интерфейсные функции для работы с точками. 
// Внутреннее представление точек должно быть основано на полярной системе координат, 
// хотя интерфейс предполагает работу с декартовой системой (снаружи).


// Реализуйте интерфейсные фунции точек:

// makeDecartPoint(). Принимает на вход координаты и возвращает точку. Уже реализован.
// getX()
// getY()


// $x = 4;
// $y = 8;

// // $point хранит в себе данные в полярной системе координат
// $point = makeDecartPoint($x, $y);

// // Здесь происходит преобразование из полярной в декартову
// getX($point); // 4
// getY($point); // 8
// Подсказки
// Трансляция декартовых координат в полярные была описана в теории
// Получить x можно по формуле radius * cos(angle)
// Получить y можно по формуле radius * sin(angle)

//=======================================MY SOLUTION ==================================================

function makeDecartPoint($x, $y)
{
     return [
         'angle' => atan2($y, $x),
         'radius' => sqrt($x ** 2 + $y ** 2)
     ];
}

// BEGIN (write your solution here)
function getX ($arr){
    $res = '';
    $res = $arr['radius'] * cos($arr['angle']);
    return $res;
    
}

function getY ($arr){
    $res = '';
    $res = $arr['radius'] * sin($arr['angle']);
    return $res;
    
}
// END

//=======================================MY SOLUTION ==================================================





//=======================================Teacher SOLUTION ==============================================

// BEGIN
function getAngle($point)
{
    return $point['angle'];
}

function getRadius($point)
{
    return $point['radius'];
}

function getX($point)
{
    return getRadius($point) * cos(getAngle($point));
}

function getY($point)
{
    return getRadius($point) * sin(getAngle($point));
}
// END

//=======================================Teacher SOLUTION ==================================================