<?php

require_once 'Booking.php';

use Carbon\Carbon;

$book = new Booking();

$book->resetDate();

$firstTrip = $book->book('10-11-2008', '05-11-2008');
$secondTrip = $book->book('11-11-2008', '13-11-2008');
$therdTrip = $book->book('12-11-2008', '12-11-2008');
$forTrip = $book->book('10-11-2008', '12-11-2008');
$fithTrip = $book->book('12-11-2008', '14-11-2008');
$sixTrip = $book->book('10-11-2008', '11-11-2008');
$sevenTrip = $book->book('12-11-2008', '13-11-2008');
$eigthTrip = $book->book('13-11-2008', '13-11-2008');
$nineTrip = $book->book('13-11-2008', '14-11-2008');
$tenTrip = $book->book('08-11-2008', '18-11-2008');
$elevenTrip = $book->book('08-05-2008', '18-05-2008');
$twelwTrip = $book->book('09-05-2008', '10-05-2008');
$therdTrip = $book->book('08-05-2008', '20-05-2008');
$forthTrip = $book->book('07-05-2008', '18-05-2008');
$fifthTrip = $book->book('08-05-2008', '18-05-2008');

echo "<br>";
echo "<pre>";
print_r($book->getAllDate());
echo "</pre>";

echo "<br>";
echo "firstTrip = " . $firstTrip;

echo "<br>";
echo "secondTrip = " . $secondTrip;

echo "<br>";
echo "therdTrip = " . $therdTrip;

echo "<br>";
echo "forTrip = " . $forTrip;

echo "<br>";
echo "fithTrip = " . $fithTrip;

echo "<br>";
echo "sixTrip = " . $sixTrip;

echo "<br>";
echo "sevenTrip = " . $sevenTrip;

echo "<br>";
echo "eigthTrip = " . $eigthTrip;

echo "<br>";
echo "nineTrip = " . $nineTrip;

echo "<br>";
echo "tenTrip = " . $tenTrip;

echo "<br>";
echo "elevenTrip = " . $elevenTrip;

echo "<br>";
echo "twelwTrip = " . $twelwTrip;

echo "<br>";
echo "therdTrip = " . $therdTrip;

echo "<br>";
echo "forthTrip = " . $forthTrip;

echo "<br>";
echo "fifthTrip = " . $fifthTrip;


