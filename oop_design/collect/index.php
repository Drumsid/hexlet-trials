<?php


require_once 'DeckOfCards.php';

$deck = new DeckOfCards([2, 3]);
echo "<pre>";
print_r($deck);
echo "</pre>";

echo "<pre>";
$test1 = $deck->getShuffled();
print_r($test1);
echo "</pre>";
echo "<pre>";
$test2 = $deck->getShuffled();
print_r($test2);
echo "</pre>";