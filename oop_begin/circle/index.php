<?php

require_once 'Circle.php';

$circle = new Circle(1);

echo "<pre>";
print_r($circle->getArea());
echo "</pre>";

echo "<pre>";
print_r($circle->getCircumference());
echo "</pre>";