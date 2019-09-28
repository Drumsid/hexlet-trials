<?php

// Реализуйте функцию getManWithLeastFriends, которая принимает список пользователей и возвращает пользователя, 
// у которого меньше всего друзей.

// Примечания
// Если список пользователей пустой, то возвращается null
// Если в списке есть более одного пользователя с минимальным количеством друзей, то возвращается 
// последний из таких пользователей

// Примеры


// $users = [
//     ['name' => 'Tirion', 'friends' => [
//         ['name' => 'Mira', 'gender' => 'female'],
//         ['name' => 'Ramsey', 'gender' => 'male']
//     ]],
//     ['name' => 'Bronn', 'friends' => []],
//     ['name' => 'Sam', 'friends' => [
//         ['name' => 'Aria', 'gender' => 'female'],
//         ['name' => 'Keit', 'gender' => 'female']
//     ]],
//     ['name' => 'Keit', 'friends' => []],
//     ['name' => 'Rob', 'friends' => [
//         ['name' => 'Taywin', 'gender' => 'male']
//     ]],
// ];

// getManWithLeastFriends($users);
// => ['name' => 'Keit', 'friends' => []];


// ====================my solution======================================================

namespace App\Users;

use Funct\Collection;

// BEGIN (write your solution here)
function getManWithLeastFriends(array $arr){
	if (empty($arr)) {
		return null;
	}

	$res = Collection\minValue($arr, function($user){
		return count($user['friends']);
	});

	return $res;

}
// END

// ====================my solution======================================================

// ====================teacher solution=================================================

// BEGIN
function getManWithLeastFriends(array $users)
{
    if (empty($users)) {
        return null;
    }
    return Collection\minValue($users, function ($user) {
        return count($user['friends']);
    });
}
// END

// ====================teacher solution=================================================