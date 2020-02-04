<?php

// require_once 'Node.php'; так можно подключится без autoload но тогда убрать namespace нужно
// namespace App\LinkedList;

use Hexlet\Trials\Classes\Node;

require_once '../../vendor/autoload.php';

$test = new Node(1, new Node(2, new Node(3)));
echo "<pre>";
print_r($test);
echo "</pre>";

// var_dump($test);
// print_r($test->getValue());

foreach ($test as $key => $value) {
    print_r($value);
}
