<?php

// Реализуйте функцию getSortedNames, которая принимает на вход список пользователей, извлекает их имена,
// сортирует и возвращает отсортированный список имен.
//
// $users = [
//     ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
//     ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
//     ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
//     ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03']
// ];
//
// getSortedNames($users); // => ['Bronn', 'Eiegon', 'Reigar', 'Sansa']

// ====================my solution======================================================

// BEGIN (write your solution here)
function getSortedNames(array $data)
{   $len = count($data);
    $result = [];
    foreach ($data as $key => $val){
        foreach ($val as $k => $v){
            if($k == 'name') {
                $result[] = $v;
            }
        }
    }
    sort($result);
    return $result;
}
// END

// ====================my solution======================================================

// ====================teacher solution======================================================

// BEGIN
function getSortedNames(array $users)
{
    $names = [];
    foreach ($users as ["name" => $name]) {
        $names[] = $name;
    }

    sort($names);
    return $names;
}
// END

// ====================teacher solution======================================================
