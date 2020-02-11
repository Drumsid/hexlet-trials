<?php

require "Pairs.php";

// считает длинну списка
function length($pair)
{
    if (cdr($pair) == null) {
        return 1;
    }
    return 1 + length(cdr($pair));
}
