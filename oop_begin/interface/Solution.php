<?php 

require_once 'User.php';

$u1 = new User(2, 'Denis');
$u2 = new User(3, 'Vitia');


print_r($u1);
echo "<br>";

print_r($u2);
echo "<br>";

print_r($u2->getId());
echo "<br>";

var_dump($u1->compareTo($u2));
echo "<br>";