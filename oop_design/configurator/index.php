<?php
require_once 'PasswordValidator.php';

<<<<<<< HEAD
$validate1 = new PasswordValidator();

echo "<pre>";
echo "gethasNumber: ";
var_dump($validate1->gethasNumber('another-password'));
echo "</pre>";
echo "<pre>";
echo "containNumbers: ";
var_dump($validate1->getContainNumbers());
echo "</pre>";
echo "<pre>";
var_dump($validate1->getOptions());
echo "</pre>";
echo "<pre>";
print_r($validate1->validate('another-password'));
echo "</pre>";
echo "=========================================================================";

$validate1 = new PasswordValidator(['containNumbers' => true]);

echo "<pre>";
echo "gethasNumber: ";
var_dump($validate1->gethasNumber('q23ty'));
echo "</pre>";
echo "<pre>";
echo "containNumbers: ";
var_dump($validate1->getContainNumbers());
echo "</pre>";
echo "<pre>";
var_dump($validate1->getOptions());
echo "</pre>";
echo "<pre>";
print_r($validate1->validate('q23ty'));
echo "</pre>";
echo "=========================================================================";

$validate1 = new PasswordValidator(['containNumberz' => null]);

echo "<pre>";
echo "gethasNumber: ";
var_dump($validate1->gethasNumber('qwerty'));
echo "</pre>";
echo "<pre>";
echo "containNumbers: ";
var_dump($validate1->getContainNumbers());
echo "</pre>";
echo "<pre>";
var_dump($validate1->getOptions());
echo "</pre>";
echo "<pre>";
print_r($validate1->validate('qwerty'));
echo "</pre>";
echo "=========================================================================";
=======
$validate =  new PasswordValidator();

echo "<pre>";
print_r($validate->getContainNumbers());
echo "</pre>";
echo "<pre>";
print_r($validate->getOptions());
echo "</pre>";
echo "<pre>";
print_r($validate->validate('another-password'));
echo "</pre>";

$validate =  new PasswordValidator(['containNumbers' => true]);
echo "<pre>";
print_r($validate->getContainNumbers());
echo "</pre>";
echo "<pre>";
print_r($validate->getOptions());
echo "</pre>";
echo "<pre>";
print_r($validate->validate('q23ty'));
echo "</pre>";

$validate =  new PasswordValidator(['containNumberz' => null]);
echo "<pre>";
print_r($validate->getContainNumbers());
echo "</pre>";
echo "<pre>";
print_r($validate->getOptions());
echo "</pre>";
echo "<pre>";
print_r($validate->validate('qwerty'));
echo "</pre>";

// возможно нужны правки

// $validate = new PasswordValidator(['containNumberz' => 'null']);

// echo "<pre>";
// print_r($validate->getContainNumbers());
// echo "</pre>";
// echo "<pre>";
// print_r($validate->getOptions());
// echo "</pre>";
// echo "<pre>";
// print_r($validate->validate('qwertyui'));
// echo "</pre>";
>>>>>>> c6e667ca40160fc35cfe499de4ebab31c4e93d47
