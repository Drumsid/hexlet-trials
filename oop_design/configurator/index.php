<?php

require_once 'PasswordValidator.php';

$validate1 = new PasswordValidator(['containNumberz' => null]);

print_r($validate1->getContainNumbers());
print_r($validate1->validate('qwertya3sdf'));