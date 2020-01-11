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

$recurse = function ($tree) use (&$recurse) {

    if ($tree['type'] == 'file') {
        $tree['name'] = strtolower($tree['name']);
        echo $tree['name'] . "\n";
        $children = null;
    }
    if ($tree['type'] == 'directory') {
        $children = $tree['children'];
        echo 0 . "\n";
    }

    if (!$children) {
        return;
    }
    return array_map($recurse, $children);
};

$recurse($trees);
