<?php

// ищет в строке $str значения из массива $searchArr , если находит, удаляет. И возвращает строку уже без этих слов
// test($str, $searchArr); //=> "175/70 R 13 82T Hakka Green 2"

$str = "175/70 R 13 82T Matador Hakka Green 2";
$searchArr = [ 'Matador', 'BF Goodrich', 'Bridgestone', 'Continental', 'Cordiant', 'Dunlop', 'Firestone', 'Gislaved', 'Goodyear', 'Hankook', 'Kumho', 'Matador', 'MICHELIN',
'NEXEN', 'Nokian', 'Pirelli', 'Sava', 'Toyo', 'Tigar', 'Tunga', 'Yokohama', 'Tunga', 'Formula'];

function test ($str, $arr2){
    $arr = explode(" ", $str);
    $tmp = '';
    foreach($arr2 as $searchVal){
        $tmp = array_search($searchVal, $arr);
        if($tmp){
           unset($arr[$tmp]); 
        }
    }
    $arr = implode(" ", $arr);
    return $arr;
}