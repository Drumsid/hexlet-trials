<?php

// $arr = [3, 5, null, 7, 1, 9, [], null];


// задача вытащить из массива (дерева) все (цифры) и вернуть массивом
$tree = [
  'arr' => [
    'arr' => [
      'arr' => [
        null
      ],
      'num' => 124
    ],
    'num' => 23
  ],
  'num' => 43
];

// function foo($arr)
// {
//   $result = [];
//   foreach ($arr as $v){
//     if(is_int($v)){
//       $result[] = $v;
//     }
//   }
//   return $result;
// }

// print_r($tree);

// парсим дерево и вынимаем все цифры
function parseTree($arr)
{
    $result = '';
    foreach ($arr as $v) {
        if (is_array($v) && count($v) > 0) {
            $result .= parseTree($v);
        }
        if (is_int($v)) {
            $result .= $v . "-";
        }
    }
    return $result;
}

$parseTree = parseTree($tree);

$expl = explode("-", $parseTree);

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

// print_r($expl);
// print_r(trimEmpty($expl));

// решение задачи
function getNumberFromArray($tree)
{
    $parseTree = parseTree($tree);
    $exploded = explode("-", $parseTree);
    return trimEmpty($exploded);
}

// echo "test";
print_r(getNumberFromArray($tree));
