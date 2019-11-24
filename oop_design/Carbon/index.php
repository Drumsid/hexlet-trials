<?php

require_once 'Booking.php';

$book = new Booking();

$firstTrip = $book->book('10-11-2008', '12-11-2008');
$secondTrip = $book->book('13-12-2009', '18-12-2009');

echo "<br>";
echo "<pre>";
print_r($book->getAllDate());
echo "</pre>";