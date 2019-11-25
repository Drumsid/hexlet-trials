<?php

// Реализуйте функцию getQuestions, которая принимает на вход текст (полученный из редактора) и возвращает извлеченные из этого текста вопросы. 
// Это должна быть строчка в форме списка разделенных переводом строки вопросов (смотрите секцию "Примеры").

// Входящий текст разбит на строки и может содержать любые пробельные символы. Некоторые из этих строк являются вопросами. 
// Они определяются по последнему символу: если это знак ?, то считаем строку вопросом.

// Примеры

// $text = <<<HEREDOC
// lala\r\nr
// ehu?
// vie?eii
// \n \t
// i see you
// /r \n
// one two?\r\n\n
// HEREDOC;

// $result = getQuestions($text); // "ehu?\none two?"
// echo $result;
// // ehu?
// // one two?

require_once '../../vendor/autoload.php';

use function Stringy\create as s;

$text = <<<HEREDOC
lala\r\nr
ehu?
vie?eii
\n \t
i see you
/r \n
one two?\r\n\n
HEREDOC;

function getQuestions($text)
{
	$result = "";
	$strings = s($text)->lines();

	foreach ($strings as $string) {	
		if (s($string)->endsWith('?')){
			$result .= $string . "\n";
		}
	}
	return trim($result);
}


echo getQuestions($text);



// hexlet solutions 

// BEGIN
function getQuestions2(string $text)
{
    $lines = s($text)->lines();
    $filteredLines = collect($lines)->filter(function ($line) {
        return $line->endsWith('?');
    });
    return implode("\n", $filteredLines->all());
}
// END