<?php

require_once '../../vendor/autoload.php';

use Ds\Stack;

// $stack = new Stack();

// $stack->push('a');
// print_r($stack);
// print_r(count($stack));
// $stack->pop();
// print_r(count($stack));

// Реализуйте функцию compare($seq1, $seq2), которая сравнивает две строчки набранные в редакторе. Если они равны то возвращает true, иначе - false. Особенность строчек в том они могут содержать символ #, соответствующий нажатию клавиши Backspace. Она означает, что нужно стереть предыдущий символ: abd##a# превращается в a.

// <?php

// // Перед самим сравнением, нужно вычислить реальную строчку отображенную в редакторе.
// // 'ac' === 'ac'
// compare('ab#c', 'ab#c'); // true

// // '' === ''
// compare('ab##', 'c#d#'); // true

// // 'c' === 'b'
// compare('a#c', 'b'); // false

// // 'cd' === 'cd'
// compare('#cd', 'cd'); // true
// Подсказки
// Поведение # соответствует тому как это происходит в реальной жизни. Если строчка пустая, то Backspace ничего не стирает.
// В этой задаче понадобится стек.
// Воспользуйтесь классом \Ds\Stack.

function compare($seq1, $seq2)
{
	return removeHash($seq1) === removeHash($seq2);
}

function removeHash($str)
{
	$stack = new Stack();
	for($i = 0; $i < strlen($str); $i++){
		if($str[$i] != "#"){
			$stack->push($str[$i]);
		}
		
		if($str[$i] == "#" && count($stack) != 0){
			$stack->pop();
		}
	}

	$result = "";
	foreach ($stack as $k => $v){
		$result .= $v;
	}
	return strrev($result);
}

// $seq1 = '#cd';
// $seq2 = 'cd3';

// // print_r(compare($seq1, $seq2));
// var_dump(compare($seq1, $seq2));

// =========================== hexlet solution ========================

// BEGIN
// function compare($text1, $text2)
// {
//     $evaluatedText1 = evaluate($text1);
//     $evaluatedText2 = evaluate($text2);

//     return $evaluatedText1 === $evaluatedText2;
// }

// function evaluate($text)
// {
//     $stack = new \Ds\Stack();
//     for ($i = 0, $length = mb_strlen($text); $i < $length; $i++) {
//         $current = $text[$i];
//         if ($current != '#') {
//             $stack->push($current);
//         } elseif (!$stack->isEmpty()) {
//             $stack->pop();
//         }
//     }

//     return implode('', $stack->toArray());
// }
// END