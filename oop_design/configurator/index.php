<?php

require_once 'PasswordValidator.php';

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