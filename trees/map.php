<?php

$tree = [
    'name' => '/',
    'type' => 'directory',
    'meta' => [],
    'children' => [
        [
            'name' => 'eTc',
            'type' => 'directory',
            'meta' => [],
            'children' => [
                [
                    'name' => 'NgiNx',
                    'type' => 'directory',
                    'meta' => [],
                    'children' => [],
                ],
                [
                    'name' => 'CONSUL',
                    'type' => 'directory',
                    'meta' => [],
                    'children' => [['name' => 'config.json', 'type' => 'file', 'meta' => []]],
                ],
            ],
        ],
        ['name' => 'hOsts', 'type' => 'file', 'meta' => []],
    ],
];


// эта функция решает поставленную задачу но не проходит тест на hexlet
// $map = function ($func, $tree) use (&$map) {
//     if (isset($tree['name'])) {
//         $tree = $func($tree);
//     }

//     if (isset($tree['children']) && count($tree['children']) > 0) {
//         $children = $tree['children'];
//         $tree['children'] = array_map(function ($el) use (&$map, &$func) {
//             return $map($func, $el);
//         }, $children);
//     }
//     return $tree;
// };

// второе решение не проходит...
// BEGIN (write your solution here)
// function map($tree)
// {
//     $map = function ($func, $tree) use (&$map) {
//         if (isset($tree['name'])) {
//             $tree = $func($tree);
//         }

//         if (isset($tree['children']) && count($tree['children']) > 0) {
//             $children = $tree['children'];
//             $tree['children'] = array_map(function ($el) use (&$map, &$func) {
//                 return $map($func, $el);
//             }, $children);
//         }
//         return $tree;
//     };

//     return $map(function ($n) {
//         return array_merge($n, ['name' => strtoupper($n['name'])]);
//     }, $tree);
// }
// END


//================================================================
// вот мое решение, через жопу но работает.
//================================================================
function map($func, $tree)
{
    $map = function ($func, $tree) use (&$map) {
        if (isset($tree['name'])) {
            $tree = $func($tree);
        }

        if (isset($tree['children']) && count($tree['children']) > 0) {
            $children = $tree['children'];
            $tree['children'] = array_map(function ($el) use (&$map, &$func) {
                return $map($func, $el);
            }, $children);
        }
        return $tree;
    };
    return $map($func, $tree);
}

print_r(map(function ($n) {
    return array_merge($n, ['name' => strtoupper($n['name'])]);
}, $tree));
//================================================================
// вот мое решение, через жопу но работает.
//================================================================

//================================================================
// вот решение учителя буду смотреть что и как
//================================================================
// BEGIN
function map2($func, $tree)
{
    $map = function ($f, $node) use (&$map) {
        $updatedNode = $f($node);
        $children = $node['children'] ?? [];
        if ($node['type'] == 'directory') {
            $updatedChildren = array_map(function ($n) use (&$f, &$map) {
                return $map($f, $n);
            }, $children);
            return array_merge($updatedNode, ['children' => $updatedChildren]);
        }
        return $updatedNode;
    };
    return $map($func, $tree);
}
// END
//================================================================
// вот решение учителя буду смотреть что и как
//================================================================
