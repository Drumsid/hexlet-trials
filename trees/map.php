<?php
// В коде используются два разных map. Один самописный, другой — встроенный array_map. 
$map = function ($f, $tree) use (&$map) {
    $children = $tree[1] ?? null;

    $newName = $f($tree);
    if (!$children) {
        return [$newName];
    }

    return [
        $newName,
        array_map(function ($el) use (&$map, &$f) {
            return $map($f, $el);
        }, $children),
    ];
};

$tree = ['A', [
    ['B', [['E'], ['F']]],
    ['C'],
    ['D', [['G'], ['J']]],
]];

echo json_encode($map(function ($tree) {
    [$name] = $tree;
    return strtolower($name);
}, $tree));


// мое первое решение задачи map но не прошло через тесты
// function map($arr)
// {
//     foreach ($arr as $key => $value) {
//         if ($key === 'name') {
//           $arr['name'] = strtoupper($value);
//         }
//         if (is_array($value) && count($value) > 0) {
//             $children = $value;
//             $arr[$key] = downcaseFileNames($children);
//         }
//     }
//     return $arr;
// }


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


// это решение тоже почему то не проходит
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

// второе решение не проходит...
// BEGIN (write your solution here)
function map($tree)
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

    return $map(function ($n) {
        return array_merge($n, ['name' => strtoupper($n['name'])]);
    }, $tree);
}
// END


// попытка написать с обработчиком
function myMap($func, $tree)
{
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
