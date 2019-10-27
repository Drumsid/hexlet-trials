<?php 

require_once 'Truncater.php';

$cut = new Truncater();
echo "<pre>";
print_r($cut->truncate('one two', ['length' => '3']));
echo "</pre>";
echo "<pre>";
print_r($cut->tmpOptions());
echo "</pre>";
echo "<pre>";
print_r($cut->tmpProp());
echo "</pre>";

$cut = new Truncater(['length' => 3]);
echo "<pre>";
print_r($cut->truncate('one two'));
echo "</pre>";
echo "<pre>";
print_r($cut->tmpOptions());
echo "</pre>";
echo "<pre>";
print_r($cut->tmpProp());
echo "</pre>";