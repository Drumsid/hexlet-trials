<?php

  $raw = [
      [
          'name' => 'istambul',
          'country' => 'turkey'
      ],
      [
          'name' => 'Moscow ',
          'country' => ' Russia'
      ],
      [
          'name' => 'iStambul',
          'country' => 'tUrkey'
      ],
      [
          'name' => 'antalia',
          'country' => 'turkeY '
      ],
      [
          'name' => 'samarA',
          'country' => '  ruSsiA'
      ],
      [
          'name' => 'istambul',
          'country' => 'usa'
      ],
  ];

$maping = array_map(function ($value){
  $result = [];
  $result['name'] = trim(strtolower($value['name']));
  $result['country'] = trim(strtolower($value['country']));
  return $result;
}, $raw);

echo "<pre>";
print_r($maping);
echo "</pre>";

$reduced = array_reduce($maping, function ($acc, $vol) {
if(!array_key_exists($vol['country'], $acc)) {
  $acc[$vol['country']] = [];
}
$acc[$vol['country']][] = $vol['name'];
return $acc;
}, []);

echo "<pre>";
print_r($reduced);
echo "</pre>";

function myUnique($reduced)
{
  foreach ($reduced as $key => $vol){
    sort($vol);
    $reduced[$key] =  array_unique($vol);
  }
  ksort($reduced);
  return $reduced;
}

echo "<pre>";
print_r(myUnique($reduced));
echo "</pre>";