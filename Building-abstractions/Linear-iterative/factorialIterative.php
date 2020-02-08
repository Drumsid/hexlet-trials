<?php

function myFactorial($num)
{
    $numIter = function ($num, $acc) use (&$numIter) {
        if ($num <= 1) {
            return $acc;
        }
        return $numIter($num - 1, $acc * $num);
    };

    return $numIter($num, 1);
}
