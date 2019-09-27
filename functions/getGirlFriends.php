<?php

// Реализуйте функцию getGirlFriends, которая принимает на вход список пользователей и возвращает плоский список подруг всех пользователей 
// (без сохранения ключей). Друзья каждого пользователя хранятся в виде массива в ключе friends. Пол доступен по ключу gender и может 
// принимать значения male или female.


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
//     ['name' => 'Rob', 'friends' => [
//         ['name' => 'Taywin', 'gender' => 'male']
//     ]],
// ];

// getGirlFriends($users);
# => Array (
#      ['name' => 'Mira', 'gender' => 'female'],
#      ['name' => 'Aria', 'gender' => 'female'],
#      ['name' => 'Keit', 'gender' => 'female']
# )


// ====================my solution======================================================

// BEGIN (write your solution here)
function getGirlFriends($arr){

	$frends = getFrends($arr); 

	$filteredFrends = array_filter($frends, function ($frend) { 
    	return $frend['gender'] == 'female';
	});
	return arrZero($filteredFrends);
}

function getFrends($arr){ 
    
  $res = array_map(function($val){
      return $val['friends'];
  }, $arr);
  return flatten($res); 
}

function arrZero($arr){
	$result = [];
	foreach ($arr as $val){
		$result[] = $val;
	}
	return $result;
}
// END

// ====================my solution======================================================

// ====================teacher solution=================================================

// BEGIN
function getGirlfriends(array $users)
{
    $friends = array_map(function ($user) {
        return $user['friends'];
    }, $users);
    $friends = flatten($friends);

    $girlfriends = array_filter($friends, function ($user) {
        return $user['gender'] === 'female';
    });
    return array_values($girlfriends);
}
// END

// ====================teacher solution=================================================