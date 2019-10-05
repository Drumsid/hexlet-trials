<?php

require 'Rational.php';
require 'functions.php';


$rational1 = new Rational(3, 9);
myDebug($rational1);

$rational2 = new Rational(10, 3);

myDebug($rational2);

// myDebug($rational1->nok($rational2));

myDebug($rational1->add($rational2));

myDebug($rational1->sub($rational2));