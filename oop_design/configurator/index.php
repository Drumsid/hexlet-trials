<?php
require_once 'PasswordValidator.php';

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
