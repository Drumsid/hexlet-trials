<?php



// Иногда в программировании возникает задача поиска разницы между двумя наборами данных, такими как ассоциативные массивы. Например, при поиске различий в json файлах.
// Для этого даже существуют специальные сервисы, например, http://www.jsondiff.com/ (попробуйте нажать на ссылку sample data и затем кнопку Compare).
// src\Arrays.php
//
// Реализуйте функцию genDiff, которая возвращает ассоциативный массив, в котором каждому ключу из исходных массивов соответствует одно из
// четырёх значений: added, deleted, changed или unchanged. Аргументы:
//
//     Ассоциативный массив
//     Ассоциативный массив
//
// Расшифровка:
//
//     added — ключ отсутствовал в первом массиве, но был добавлен во второй
//     deleted — ключ был в первом массиве, но отсутствует во втором
//     changed — ключ присутствовал и в первом и во втором массиве, но значения отличаются
//     unchanged — ключ присутствовал и в первом и во втором массиве с одинаковыми значениями
//
//


//
// $result = genDiff(
//     ['one' => 'eon', 'two' => 'two', 'four' => true],
//     ['two' => 'own', 'zero' => 4, 'four' => true]
// );
// => [
//     'one' => 'deleted',
//     'two' => 'changed'
//     'zero' => 'added',
//     'four' => 'unchanged',
// ];



// ====================my solution======================================================

$arr1 = ['one' => 'eon'];
$arr2 = ['two' => 'own'];

$arr3 = array_merge($arr1, $arr2);

function genDiff ($arr1, $arr2) {
    $mergeArr = union($arr1, $arr2);
    $result = [];

    foreach ($mergeArr as $mergeKey => $mergeValue){
        if (array_key_exists($mergeKey, $arr1) && !array_key_exists($mergeKey, $arr2)) {
            $result[$mergeKey] = 'deleted';
            continue;

        }
        if(!array_key_exists($mergeKey, $arr1) && array_key_exists($mergeKey, $arr2)) {
              $result[$mergeKey] = 'added';
              continue;

        }
        if(array_key_exists($mergeKey, $arr1) && array_key_exists($mergeKey, $arr2) && ($arr1[$mergeKey] != $arr2[$mergeKey])) {
            $result[$mergeKey] = 'changed';
            continue;

        }
        if(array_key_exists($mergeKey, $arr1) && array_key_exists($mergeKey, $arr2) && ($arr1[$mergeKey] == $arr2[$mergeKey])) {
            $result[$mergeKey] = 'changed';
            continue;

        }
    }
    return $result;
}

print_r($arr3);
$q = genDiff($arr1, $arr2);
print_r($q);

// ====================my solution======================================================

// ====================teacher solution======================================================

// BEGIN
function genDiff2(array $data1, array $data2)
{
    $keys = union(array_keys($data1), array_keys($data2));
    $result = [];
    foreach ($keys as $key) {
        if (!array_key_exists($key, $data1)) {
            $result[$key] = 'added';
        } elseif (!array_key_exists($key, $data2)) {
            $result[$key] = 'deleted';
        } elseif ($data1[$key] !== $data2[$key]) {
            $result[$key] = 'changed';
        } elseif ($data1[$key] === $data2[$key]) {
            $result[$key] = 'unchanged';
        }
    }

    return $result;
}
// END
// ====================teacher solution======================================================
