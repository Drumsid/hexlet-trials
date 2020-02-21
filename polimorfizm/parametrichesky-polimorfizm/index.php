<?php

// require_once 'Node.php'; так можно подключится без autoload но тогда убрать namespace нужно
// namespace App\LinkedList;

// задача вытащить из массива (дерева) все (цифры) и вернуть массивом

// пытался решить задачу из урока  PHP: Полиморфизм → Параметрический полиморфизм но там все надо объектами,
// у меня же массивы. Но зато обошел дерево и вынул все числа

// потм решил через неделю, но разве это можно назвать решением после того как увидел решение учителя?

use Hexlet\Trials\Classes\Node;

require_once '../../vendor/autoload.php';

$tree = new Node(1, new Node(2, new Node(3)));

//================================================
// my solution
//================================================
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

function trimEmpty($arr)
{
    $result = array_filter($arr, function ($v) {
        if (!empty($v)) {
            return $v;
        }
    });
    return $result;
}


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
{
    $newHead = null;
    $current = $list;
    while ($current) {
        $newHead = new Node($current->getValue(), $newHead);
        $current = $current->getNext();
    }

    return $newHead;
}

//================================================
// hexlet solution
//================================================
