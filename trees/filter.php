<?php

function isDirectory($node)
{
    return $node['type'] == 'directory';
}

$tree = [
    'name' => '/',
    'children' => [
        [
            'name' => 'consul',
            'children' => [
                [
                    'name' => 'kets',
                    'meta' => [],
                    'type' => 'file'
                ]
            ],
            'meta' => [],
            'type' => 'directory'
        ]
    ],
    'meta' => [],
    'type' => 'directory'
];

$tree2 = [
    'name' => '/',
    'children' => [
                [
                    'name' => 'etc',
                    'children' => [
                                [
                                    'name' => 'nginx',
                                    'children' => [
                                                [
                                                    'name' => 'conf.d',
                                                    'children' => [],

                                                    'meta' => [],

                                                    'type' => 'directory'
                                                ]

                                            ],

                                    'meta' => [],

                                    'type' => 'directory',
                                        ],

                                [
                                    'name' => 'consul',
                                    'children' => [
                                                [
                                                    'name' => 'config.json',
                                                    'meta' => [],

                                                    'type' => 'file',
                                            ]

                                            ],

                                    'meta' => [],

                                    'type' => 'directory',
                                        ],

                                        ],

                    'meta' => [],

                    'type' => 'directory',
                ],
                [
                    'name' => 'hosts',
                    'meta' => [],
                    'type' => 'file'
                ],
    ],
    'meta' => [],
    'type' => 'directory'
];


function filter($func, $tree)
{
    $filter = function ($func, $tree) use (&$filter) {
        if ($func($tree) != true) {
            return null;
        }
        if (isset($tree['children']) && count($tree['children']) > 0) {
            $children = $tree['children'];
            $tree['children'] = array_map(function ($el) use (&$filter, &$func) {
                return $filter($func, $el);
            }, $children);
        }
            return $tree;
    };

    return $filter($func, $tree);
}


$test = filter(function ($n) {
    return isDirectory($n);
}, $tree2);



echo "<pre>";
print_r($test);
echo "</pre>";

echo "<pre>";
// var_dump($test['children'][1]);
echo "</pre>";

// $result = array_filter($test, function ($test) {
//     if ($test['children'] != null) {
//         return $test;
//     }
// });

echo "<pre>";
// print_r($result);
echo "</pre>";
