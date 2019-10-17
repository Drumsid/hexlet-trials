<?php

require_once 'Square.php';
require_once 'SquaresGenerator.php';

$square1 = new Square(5);

print_r($square1);
print_r($square1->getSide());
$test = SquaresGenerator::generate(5,2);
echo "<pre>";
print_r($test);
echo "</pre>";