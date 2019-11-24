<?php

require_once '../../vendor/autoload.php';

use Carbon\Carbon;


// '10-11-2008', '12-11-2008'


// $first = Carbon::create('16-11-2008');
// echo "<br>";
// $second = Carbon::create('15-11-2008');
// echo "<br>";
// echo $first;
// echo "<br>";
// echo $second;
// echo "<br>";
// echo $first->hour(12)->minute(00)->second(00)->toDateTimeString();
// echo "<br>";
// echo $second->hour(12)->minute(00)->second(00)->toDateTimeString();
// echo "<br>";

// $arr = ['f' => $first, 's' => $second];
// echo "<br>";
// echo "<pre>";
// print_r($arr);
// echo "</pre>";
// echo "<br>";

// if($second > $first){
// 	echo 'big';
// } else {
// 	echo "litle";
// }

class Booking
{
	static $date = [];

	public function __construct()
	{

	}

	public function book($dayIn, $dayOut)
	{
		$arr = [];
		$arr['dayIn'] = Carbon::create($dayIn)->hour(12)->minute(00)->second(00)->toDateTimeString();
		$arr['dayOut'] = Carbon::create($dayOut)->hour(12)->minute(00)->second(00)->toDateTimeString();
		self::$date[] = $arr;
	}

	public function getAllDate()
	{
		return self::$date;
	}
}