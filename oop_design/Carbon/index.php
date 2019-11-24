<?php

require_once 'Booking.php';

use Carbon\Carbon;

$book = new Booking();

$firstTrip = $book->book('10-11-2008', '12-11-2008');
$secondTrip = $book->book('13-12-2009', '18-12-2009');

echo "<br>";
echo "<pre>";
print_r($book->getAllDate());
echo "</pre>";

// print_r($book::$date[0]['dayIn']);

// if ($book::$date[0]['dayIn'] > $book::$date[0]['dayOut']){
// 	echo "dayIn = big";
// } else {
// 	echo "dayIn = small";
// }

$checkDateIn = Carbon::create('14-12-2009')->hour(12)->minute(00)->second(00)->toDateTimeString();

foreach ($book::$date as ['dayIn' => $dayIn, 'dayOut' => $dayOut]) {
	if ($checkDateIn > $dayIn && $checkDateIn < $dayOut) {
		echo "stop";
	}
}

// echo $checkDate;
// echo $book::$date[0]['dayOut'];

