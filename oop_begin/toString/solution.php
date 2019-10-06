<?php 

require_once 'Point.php';
require_once 'Segment.php';

$point1 = new Point(4, 6);

print_r($point1);
echo "<br>";

$point2 = new Point(5, 9);

print_r($point2);
echo "<br>";

$segment1 = new Segment($point2, $point1);
print_r($segment1);
echo "<br>";

echo $segment1;