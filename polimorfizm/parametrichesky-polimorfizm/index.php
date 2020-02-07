<?php

// require_once 'Node.php'; так можно подключится без autoload но тогда убрать namespace нужно
// namespace App\LinkedList;

// задача вытащить из массива (дерева) все (цифры) и вернуть массивом

// пытался решить задачу из урока  PHP: Полиморфизм → Параметрический полиморфизм но там все надо объектами,
// у меня же массивы. Но зато обошел дерево и вынул все числа

use Hexlet\Trials\Classes\Node;

require_once '../../vendor/autoload.php';

$tree = new Node(1, new Node(2, new Node(3)));
echo "<pre>";
print_r($tree);
echo "</pre>";

// парсим дерево и вынимаем все цифры
function parseTree($arr)
{
    $result = '';
    foreach ($arr as $v) {
        if (is_object($v)) {
            $result .= parseTree($v);
        }
        if (is_int($v)) {
            $result .= $v . "-";
        }
    }
    return $result;
}


// удаляем пустые значения массива
function trimEmpty($arr)
{
    $result = array_filter($arr, function ($v) {
        if (! empty($v)) {
            return $v;
        }
    });
    return $result;
}


// решение задачи
function getNumberFromArray($tree)
{
    $parseTree = parseTree($tree);
    $exploded = explode("-", $parseTree);
    return trimEmpty($exploded);
}

print_r(getNumberFromArray($tree));
