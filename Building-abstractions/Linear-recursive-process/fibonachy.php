<?php

function fibonachy($num)
{
  return $num <= 1 ? $num : fibonachy($num - 1) + fibonachy($num - 2);
}