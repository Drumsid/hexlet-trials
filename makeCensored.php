<?php
// Реализуйте функцию makeCensored, которая заменяет каждое вхождение указанных слов
//  в предложении на последовательность $#%! и возвращает полученную строку. 

//  Аргументы:
//  1.Текст
//  2.Набор стоп слов

// Словом считается любая непрерывная последовательность символов, включая любые спецсимволы (без пробелов).

// Примеры


// use function App\Strings\makeCensored;

// $sentence = 'When you play the game of thrones, you win or you die';
// makeCensored($sentence, ['die', 'play']);
// // => When you $#%! the game of thrones, you win or you $#%!

// $sentence2 = 'chicken chicken? chicken! chicken';
// makeCensored($sentence2, ['?', 'chicken']);
// // => '$#%! chicken? chicken! $#%!';
// Подсказки
// Тернарная операция может сослужить вам хорошую службу в этой практике.

//=========================================================================================
//=========================================================================================
//=========================================================================================


//=======================================MY SOLUTION ==================================================

// BEGIN (write your solution here)
function makeCensored($str, $arrFindWord){
    $allWordInArr = explode(" ", $str);
    $checkWords = [];
    
    $lengthFind = count($arrFindWord);
    
    
    foreach ($allWordInArr as $key => $word) {
        
        for ($i = 0; $i < $lengthFind; $i++) {
            
            if($word == $arrFindWord[$i]) {
                
                $checkWords[$key] = '$#%!';
                $i = 0;
                break;
            } 
            
            $checkWords[$key] = $word;

        }

    }
    
    return $result = implode(" ", $checkWords);
}
// END

//=======================================MY SOLUTION ==================================================


//=======================================Teacher SOLUTION ==================================================

// BEGIN
function makeCensored(string $text, array $stopWords)
{
    $words = explode(' ', $text);
    $result = [];
    foreach ($words as $word) {
        $result[] = in_array($word, $stopWords) ? '$#%!' : $word;
    }

    return implode(' ', $result);
}
// END

//=======================================Teacher SOLUTION ==================================================


