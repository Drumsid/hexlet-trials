<?php
// Реализуйте класс Point с публичными свойствами $x и $y.

// Реализуйте функцию getMidpoint, которая принимает на вход две точки (объекты) и 
// возвращает точку (объект) лежащую между ними (поиск середины отрезка).


// $point1 = new Point();
// $point1->x = 1;
// $point1->y = 10;
// $point2 = new Point();
// $point2->x = 10;
// $point2->y = 1;

// $midpoint = getMidpoint($point1, $point2);
// $midpoint->x; // => 5.5
// $midpoint->y; // => 5.5

//=======================================================

/**
 * 
 */
class Point
{
	public $x;
	public $y;
}

$point1 = new Point();
$point1->x = 1;
$point1->y = 10;

print_r($point1);
echo "<br><br>";

$point2 = new Point();
$point2->x = 10;
$point2->y = 1;

print_r($point2);
echo "<br><br>";

function getMidpoint($point1, $point2)
{
	$x1 = $point1->x;
	$y1 = $point1->y;
	$x2 = $point2->x;
	$y2 = $point2->y;

	$midX = ($x1 + $x2) / 2; // координата середины отрезка
	$midY = ($y1 + $y2) / 2; // координата середины отрезка

	$midPoint = new Point();
	$midPoint->x = $midX;
	$midPoint->y = $midY;

	return $midPoint;
}

var_dump(getMidpoint($point1, $point2));
echo "<br><br>";