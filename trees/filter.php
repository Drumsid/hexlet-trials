<?php

require_once 'sourse.php';


$tree = mkdir2('/', [
    mkdir2('etc', [
        mkdir2('nginx', [
            mkdir2('conf.d'),
        ]),
        mkdir2('consul', [
            mkfile('config.json'),
        ]),
    ]),
    mkfile('hosts'),
]);

echo "<pre>";
// print_r($tree);
echo "</pre>";

$filter = function ($f, $tree) use (&$filter) {
    if (!$f($tree)) {
        return null;
    }
    [$name] = $tree;
    $children = $tree[1] ?? null;

    echo $name . "\n";

    if (!$children) {
        return $tree;
    }

    $filteredChildren = array_map(function ($el) use (&$f, &$filter) {
        return $filter($f, $el);
    }, $children);

    return [
        $name,
        array_values(
            array_filter($filteredChildren, function ($n) {
                return $n !== null;
            })
        ),
    ];
};

// $filtered = $filter(
//     function ($tree) {
//         [$name] = $tree;
//         return $name === strtolower($name);
//     },
//     $tree
// );

echo "<pre>";
// print_r($tree);
echo "</pre>";

$test = [
    'name' => '/',
    'type' => 'directory',
    'meta' => [],
    'children' => [
        [
            'name' => 'etc',
            'type' => 'directory',
            'meta' => []
        ]
    ]
];

// var_dump(isDirectory($test));

// [
//   'name' => '/',
//   'type' => 'directory',
//   'meta' => [],
//   'children' => [
//     [
//       'name' => 'etc',
//       'type' => 'directory',
//       'meta' => [],
//       'children' => [
//         [
//           'name' => 'nginx',
//           'type' => 'directory',
//           'meta' => [],
//           'children' => [[
//             'name' => 'conf.d',
//             'type' => 'directory',
//             'meta' => [],
//             'children' => [],
//           ]],
//         ],
//         [
//           'name' => 'consul',
//           'type' => 'directory',
//           'meta' => [],
//           'children' => [],
//         ],
//       ],
//     ],
//   ],
// ]

// $filtered = $filter(
//     function ($tree) {
//         [$name] = $tree;
//         return $name === isDirectory($name);
//     },
//     $tree
// );

$f = array_filter($tree, function ($tr) {
    if (isDirectory($tr)) {
        return 22;
    }
});

echo "<pre>";
print_r($f);
echo "</pre>";
