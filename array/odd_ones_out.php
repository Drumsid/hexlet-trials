<?php

// Задача: 
// Вам дан список номеров. Числа повторяются определенное количество раз. 
// Удалите все числа, которые повторяются нечетное количество раз, оставляя все остальное таким же.

$arr = [26, 23, 24, 17, 23, 24, 23, 26];

//=========================================================================================
//=========================================================================================
//=========================================================================================


//=======================================MY SOLUTION ==================================================

function test ($arr){
	// сортируем входящий массив с помощью array_count_values которая Подсчитывает количество всех значений массива;
	// перебираем отсортированый массив и оставляем только те ключи которые повторялись четное кол - во раз
	$out = array_count_values($arr);
	$pre = [];
	foreach ($out as $k =>$v){
	    if(($v % 2) == 0) {
	        $pre[$k] = $v;
	    }
	}

	// теперь в исходном массиве $arr с помощью отсортированого массива $pre удаляем все значения которые повторялись НЕ четное кол - во раз
	$res = [];
	foreach ($pre as $k => $v){
	    foreach($arr as $k2 => $v2){
	        if($k == $v2) {
	            $res[$k2] = $v2;
	        }
	        
	    }
	}
	ksort($res);	//сортируем ключи
	$result = [];
	foreach($res as $v) {
	    $result[] = $v;
	}
	return $result;
}
//=======================================MY SOLUTION ==================================================

//=======================================More SOLUTION ==================================================

function odd_ones_out($a) {
  $av = array_count_values($a);
    $na = [];
    foreach($a as $value){
        if($av[$value] % 2 == 0)
            $na[] = $value;
    }
    return $na;
}

//=======================================More SOLUTION ==================================================

