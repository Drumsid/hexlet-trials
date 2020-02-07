<?php

function factorial($num)
{
    if ($num == 0) {
        return 1;
    }
    return $num == 1 ? $num : $num * factorial($num - 1);
}