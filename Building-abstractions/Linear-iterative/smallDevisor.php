<?php

function smallestDivisor($num)
{
    if ($num == 1) {
        return $num;
    }
    $findDevisor = function ($num, $del) use (&$findDevisor) {
        if ($num % $del == 0) {
            return $del;
        }
        return $findDevisor($num, $del + 1);
    };
    return $findDevisor($num, 2);
}
