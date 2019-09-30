<?php
// Отрезок - еще один графический примитив. В коде описывается парой точек, одна из которых - начало отрезка, другая - конец. 
// Обычный отрезок не имеет направления, поэтому вы сами вольны выбирать то, какую точку считать началом, а какую концом.

// В этом задании подразумевается, что вы уже понимаете принцип построения абстракции и способны самостоятельно принять решение о том, 
// как она будет реализована. Напомню, что сделать это можно разными способами и нет одного правильного.

// Реализуйте указанные ниже функции:

// makeSegment() Принимает на вход две точки и возвращает отрезок.
// getMidpointOfSegment() Принимает на вход отрезок и возвращает точку находящуюся на середине отрезка.


// $segment = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(0, 0));
// getMidpointOfSegment($segment); // => (1.5, 1)
// Подсказки
// Средняя точка вычисляется по формуле x = (x1 + x2) / 2 и y = (y1 + y2) / 2.



//=======================================MY SOLUTION ==================================================


// заносим данные точки в массив
function makeDecartPoint($x, $y)
{
    return [
        'x' => $x,
        'y' => $y
    ];
}
// извлекаем значение точки
function getX($point)
{
    return $point['x'];
}
// извлекаем значение точки
function getY($point)
{
    return $point['y'];
}

// print_r(makeDecartPoint(3, 2));
// print_r(makeDecartPoint(0, 0));


// данные отрезка в декартовом просстранстве в виде массива
function makeSegment($onePoint, $twoPoint){ 
	$xOne = getX($onePoint);
	$yOne = getY($onePoint);
	$xTwo = getX($twoPoint);
	$yTwo = getY($twoPoint);

	$result = [];
	$result['onePoint'] = ['x' => $xOne, 'y' => $yOne];
	$result['twoPoint'] = ['x' => $xTwo, 'y' => $yTwo];

	return $result;
	
}

// print_r(makeSegment(makeDecartPoint(3, 2), makeDecartPoint(0, 0)));


// получаем середину отрезка
function getMidpointOfSegment($data){
	$x1 = $data['onePoint']['x'];
	$x2 = $data['twoPoint']['x'];
	$y1 = $data['onePoint']['y'];
	$y2 = $data['twoPoint']['y'];

	$result = [];
	$x = ( $x1 + $x2 ) / 2;
	$y = ( $y1 + $y2 ) / 2;
	$result['x'] = $x;
	$result['y'] = $y;

	return $result;

	// return "( " . $x . ", " . $y . " )";
}

$segment = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(2, 3));

// print_r(getMidpointOfSegment($segment));

//=======================================MY SOLUTION ==================================================





//=======================================Teacher SOLUTION ==================================================

// BEGIN
function makeSegment($point1, $point2)
{
    return ['beginPoint' => $point1, 'endPoint' => $point2];
}

function getBeginPoint($segment)
{
    return $segment['beginPoint'];
}

function getEndPoint($segment)
{
    return $segment['endPoint'];
}

function getMidpointOfSegment($segment)
{
    $beginPoint = getBeginPoint($segment);
    $endPoint = getEndPoint($segment);

    $x = (getX($beginPoint) + getX($endPoint)) / 2;
    $y = (getY($beginPoint) + getY($endPoint)) / 2;

    return makeDecartPoint($x, $y);
}
// END

//=======================================Teacher SOLUTION ==================================================