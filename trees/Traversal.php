<?php

// Реализуйте функцию downcaseFileNames, которая принимает на вход директорию, приводит имена всех файлов в этой
//  и во всех вложенных директориях к нижнему регистру. Результат в виде обработанной директории возвращается наружу.

$trees =  [
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
                    'children' => [
                        [
                            'name' => 'config.json',
                            'type' => 'file',
                            'meta' => [],
                        ]
                    ],
                ],
            ],
        ],
        [
            'name' => 'hOsts',
            'type' => 'file',
            'meta' => [],
        ],
    ],
];

// мое решение ===================================
function downcaseFileNames($arr)
{
    if (isset($arr['name'])) {
        $findName = $arr['name'];
    }
    if (isset($arr['type']) && $arr['type'] == 'file') {
        $arr['name'] = strtolower($findName);
    }
    foreach ($arr as $key => $value) {
        if (is_array($value) && count($value) > 0) {
            $children = $value;
            $arr[$key] = downcaseFileNames($children);
        }
    }
    return $arr;
}
// мое решение ===================================


// решение учителя ===================================
// BEGIN
// function downcaseFileNames($tree)
// {
//     $downcaseFileNames = function ($node) use (&$downcaseFileNames) {
//         if ($node['type'] === 'directory') {
//             $updatedChildren = array_map($downcaseFileNames, $node['children']);
//             return array_merge(
//                 $node,
//                 ['children' => $updatedChildren],
//             );
//         }

//         return array_merge($node, ['name' => strtolower($node['name'])]);
//     };

//     return $downcaseFileNames($tree);
// }
// END
// решение учителя ===================================