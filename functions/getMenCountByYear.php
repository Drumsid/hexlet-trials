<?php
// Реализуйте функцию getMenCountByYear, которая принимает на вход список пользователей и возвращает массив, 
// в котором ключ это год рождения, а значение это количество мужчин, родившихся в этот год.


// $users = [
//     ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
//     ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
//     ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
//     ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03'],
//     ['name' => 'Jon', 'gender' => 'male', 'birthday' => '1980-11-03'],
//     ['name' => 'Robb','gender' => 'male', 'birthday' => '1980-05-14'],
//     ['name' => 'Tisha', 'gender' => 'female', 'birthday' => '2012-11-03'],
//     ['name' => 'Rick', 'gender' => 'male', 'birthday' => '2012-11-03'],
//     ['name' => 'Joffrey', 'gender' => 'male', 'birthday' => '1999-11-03'],
//     ['name' => 'Edd', 'gender' => 'male', 'birthday' => '1973-11-03']
// ];

// getMenCountByYear($users);
// # => Array (
// #     1973 => 3,
// #     1963 => 1,
// #     1980 => 2,
// #     2012 => 1,
// #     1999 => 1
// # );
// Подсказки

// Для преобразования даты в Unix Timestamp используйте strtotime().
// Для извлечения года из даты используйте функцию date() с шаблоном 'Y'.







//=======================================MY SOLUTION ==================================================

// BEGIN (write your solution here)
function getMenCountByYear($arr){

	$filterusers = array_filter($arr, function($user){ 
		
		return $user['gender'] == 'male';
	});	

	$sortBirthday = array_reduce($filterusers, function($acc, $user){ 
		$year = date('Y', strtotime($user['birthday']));
		if (!array_key_exists($year, $acc)) {
			$acc[$year] = 1;
		} else {
			$acc[$year] += 1;
		}
		return $acc;
	}, []);

	return $sortBirthday;
}
// END

//=======================================MY SOLUTION ==================================================





//=======================================Teacher SOLUTION ==================================================

// BEGIN
function getMenCountByYear2(array $users)
{
    $menfolk = array_filter($users, function ($user) {
        return $user['gender'] === 'male';
    });

    $years = array_map(function ($user) {
        return date('Y', strtotime($user['birthday']));
    }, $menfolk);

    return array_reduce($years, function ($acc, $year) {
        if (!array_key_exists($year, $acc)) {
            $acc[$year] = 1;
        } else {
            $acc[$year] += 1;
        }

        return $acc;
    }, []);
}
// END

//=======================================Teacher SOLUTION ==================================================