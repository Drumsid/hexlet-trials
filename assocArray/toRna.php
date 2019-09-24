<?php

// ДНК и РНК это последовательности нуклеотидов.

// Четыре нуклеотида в ДНК это аденин (A), цитозин (C), гуанин (G) и тимин (T).

// Четыре нуклеотида в РНК это аденин (A), цитозин (C), гуанин (G) и урацил (U).

// Цепь РНК составляется на основе цепи ДНК последовательной заменой каждого нуклеотида:

// G -> C
// C -> G
// T -> A
// A -> U
// src/Solution.php
// Напишите функцию toRna, которая принимает на вход цепь ДНК и возвращает соответствующую цепь РНК (совершает транскрипцию РНК).


// toRna('ACGTGGTCTTAA');
// → 'UGCACCAGAAUU'


//=======================================MY SOLUTION ==================================================

// BEGIN (write your solution here)
function toRna($str)
{
    $atrArr = str_split($str);
    $result = [];
    
    foreach($atrArr as $k => $v){
        if($v == "A") {
            $result[$k] = "U";
        } 
        else if ($v == "T") {
            $result[$k] = "A";
        }
        else if ($v == "C") {
            $result[$k] = "G";
        }
        else if ($v == "G") {
            $result[$k] = "C";
        }
    }
    
    return implode($result);
}
// END

//=======================================MY SOLUTION ==================================================


//=======================================Teacher SOLUTION ==================================================

// BEGIN
function toRna(String $nucleotide)
{
    $map = [
        'G' => 'C',
        'C' => 'G',
        'T' => 'A',
        'A' => 'U',
    ];

    $length = strlen($nucleotide);

    $result = [];
    for ($i = 0; $i < $length; $i += 1) {
        $result[] = $map[$nucleotide[$i]];
    }

    return implode('', $result);
}
// END

//=======================================Teacher SOLUTION ==================================================