<?php

require_once '../../vendor/autoload.php';


$raw = [
    [
        'name' => 'pariS ',
        'country' => ' france'
    ],
    [
        'name' => ' madrid',
        'country' => ' sPain'
    ],
    [
        'name' => 'valencia',
        'country' => 'spain'
    ],
    [
        'name' => 'marcel',
        'country' => 'france'
    ],
    [
        'name' => ' madrid',
        'country' => ' sPain'
    ],
];

// function normalize($raw)
// {
// 	$collect = collect($raw)->map( function ($arr) {
// 	return array_map( function ($item) {
// 		return trim(strtolower($item));
// 	}, $arr); 
// } )->reduce(function ($acc, $item) {
// 	if (!array_key_exists($item['country'], $acc)) {
// 		$acc[$item['country']] = [];
// 	}
// 	$acc[$item['country']][] = $item['name'];
// 	return $acc;
// }, []);

//   foreach ($collect as $key => $vol){
//     sort($vol);
//     $collect[$key] = array_values(array_unique($vol));
//   }
//   ksort($collect);
//   return $collect;
// }

// echo "<pre>";
// print_r(normalize($raw));
// echo "</pre>";

// ======================= hexlet solution ============================

// BEGIN
// function normalize2($raw)
// {
//     return collect($raw)
//         ->map(function ($value) {
//             return array_map('mb_strtolower', $value);
//         })
//         ->map(function ($value) {
//             return array_map('trim', $value);
//         })
//         ->mapToGroups(function ($item, $key) {
//             return [$item['country'] => $item['name']];
//         })
//         ->map(function ($cities) {
//             return $cities->unique()->sort()->values();
//         })
//         ->sortKeys()
//         ->toArray();
// }
// END

// ===================== my experement for collection lib =================

function myCollect($raw)
{
	return collect($raw)
		->map( function ($value){
			return array_map('mb_strtolower', $value);
		})
		->map(function ($value) {
			return array_map('trim', $value);
		})
        ->mapToGroups(function ($item, $key) {
            return [$item['country'] => $item['name']];
        })
        ->map(function ($cities) {
            return $cities->unique()->sort()->values();
        });
}

echo "<pre>";
print_r(myCollect($raw));
echo "</pre>";