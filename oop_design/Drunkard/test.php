<?php

require_once "Drunkard.php";

$test = new Drunkard();

print_r($test->run([1], [2]));