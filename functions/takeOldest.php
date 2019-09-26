<?php

// Реализуйте функцию takeOldest, которая принимает на вход список пользователей и возвращает самых взрослых. 
// Количество возвращаемых пользователей задается вторым параметром, который по-умолчанию равен единице.

// $users = [
//     ['name' => 'Tirion', 'birthday' => '1988-11-19'],
//     ['name' => 'Sam', 'birthday' => '1999-11-22'],
//     ['name' => 'Rob', 'birthday' => '1975-01-11'],
//     ['name' => 'Sansa', 'birthday' => '2001-03-20'],
//     ['name' => 'Tisha', 'birthday' => '1992-02-27']
// ];

// takeOldest($users);
// # => Array (
// #   ['name' => 'Rob', 'birthday' => '1975-01-11']
// # )
// Подсказки
// Для преобразования даты в unixtimestamp используйте функцию strtotime()
// firstN()
// usort()


//=======================================MY SOLUTION ==================================================

// BEGIN (write your solution here)
function takeOldest($arr, $count = 1)
{
    $result = [];
    usort($arr, function ($a, $b) {
        if (strtotime($a['birthday']) === strtotime($b['birthday'])) {
            return 0;
        }
        return (strtotime($a['birthday']) < strtotime($b['birthday'])) ? -1 : 1;
	});
    return countInArr($arr, $count);
}

function countInArr($arr, $count)
{
	if ($count != 1) {
	    for ($i = 0; $i < $count; $i++) {
	        $result[] = $arr[$i];
	    }
	    return $result;
	} else {
	        $result[] = $arr[0];
	        return $result;
	}
}
// END

//=======================================MY SOLUTION ==================================================





//=======================================Teacher SOLUTION ==================================================

// BEGIN
function takeOldest(array $users, int $count = 1)
{
    usort($users, function ($user1, $user2) {
        return strtotime($user1['birthday']) <=> strtotime($user2['birthday']);
    });

    return firstN($users, $count);
}
// END

//=======================================Teacher SOLUTION ==================================================