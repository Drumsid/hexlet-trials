<?php

// require_once 'Node.php'; так можно подключится без autoload но тогда убрать namespace нужно
// namespace App\LinkedList;

// задача вытащить из массива (дерева) все (цифры) и вернуть массивом

// пытался решить задачу из урока  PHP: Полиморфизм → Параметрический полиморфизм но там все надо объектами,
// у меня же массивы. Но зато обошел дерево и вынул все числа

// потм решил через неделю, но разве это можно назвать решением после того как увидел решение учителя?

use Hexlet\Trials\Classes\Node;

require_once '../../vendor/autoload.php';

<<<<<<< HEAD
$tree = new Node(1, new Node(2, new Node(3)));

//================================================
// my solution
//================================================
=======
// $tree = new Node(1, new Node(2, new Node(3)));
// echo "<pre>";
// print_r($tree);
// echo "</pre>";

// $count = 1;
// foreach ($tree as $key => $value) {
//     echo $count++;
// }

// // парсим дерево и вынимаем все цифры
>>>>>>> a0867b4948a23b98fd39c88702c7fe5688273759
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

<<<<<<< HEAD
=======

// // удаляем пустые значения массива
>>>>>>> a0867b4948a23b98fd39c88702c7fe5688273759
function trimEmpty($arr)
{
    $result = array_filter($arr, function ($v) {
        if (!empty($v)) {
            return $v;
        }
    });
    return $result;
}


<<<<<<< HEAD
$rev = function ($list, $acc) use (&$rev) {
    if (count($acc) == 1) {
        [$list] = $acc;
        return new Node($list);
    }
    $list = array_shift($acc);
    return new Node($list, $rev($list, $acc));
};

function reverse($tree)
{
    if (is_bool($tree->getValue())) {
        return $tree;
    }
    $strTree = explode('-', parseTree($tree));
    $noEmpty = trimEmpty($strTree);


    $rev = function ($list, $acc) use (&$rev) {
        if (count($acc) == 1) {
            [$list] = $acc;
            return new Node($list);
        }
        $list = array_shift($acc);
        return new Node($list, $rev($list, $acc));
    };
    return $rev('', $noEmpty);
}
//================================================
// my solution
//================================================



//================================================
// hexlet solution
//================================================

function reverse2($list)
=======
// // решение задачи
function getNumberFromArray($tree)
>>>>>>> a0867b4948a23b98fd39c88702c7fe5688273759
{
    $newHead = null;
    $current = $list;
    while ($current) {
        $newHead = new Node($current->getValue(), $newHead);
        $current = $current->getNext();
    }

    return $newHead;
}

<<<<<<< HEAD
//================================================
// hexlet solution
//================================================
=======
// // print_r(getNumberFromArray($tree));

$acc = [1,2,3,4,5];
$rev = function ($list, $acc) use (&$rev) {
    if (count($acc) == 0) {
        return $list = '';
    }
    $list = array_pop($acc);
    return $list .= $rev($list, $acc);
};

// print_r($rev('', $acc));
// print_r(1);

$rev = function ($list, $acc) use (&$rev) {
    if (count($acc) == 1) {
        [$list] = $acc;
        return new Node($list);
    }
    $list = array_pop($acc);
    return new Node($list, $rev($list, $acc));
};

echo "<pre>";
print_r($rev('', $acc));
echo "</pre>";
>>>>>>> a0867b4948a23b98fd39c88702c7fe5688273759
