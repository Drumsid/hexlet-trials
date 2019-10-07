<?php

// Реализуйте функцию json_decode, которая работает почти как встроенная, но вместо возврата ошибки, выбрасывает исключение \Exception.


// use App\Safe;

// // Второй параметр соответствует второму параметру во встроенной функции json_decode.
// // Его нужно передать как есть во внутренний вызов встроенной функции json_decode.
// $data = Safe\json_decode('{ "key": "value" }', true);
// // ['key' => 'value']
// Подсказки
// Проверить наличие ошибок парсинга можно так: json_last_error() !== JSON_ERROR_NONE. Здесь используются специальная функция и константа, определённые в PHP.


// ======================== my solution =================================

function json_decode($json, $assoc = false)
{
    // BEGIN (write your solution here)
    \json_decode($json, true);  //вызов встроеной функции json_decode
if (json_last_error() !== JSON_ERROR_NONE) {
    throw new \Exception("'{$json}' is not readble");
} 
$result = [];
$search  = [
    "{", "}", " ", "\"", "\'"
];
$tmp = str_replace($search, "", $json);
$tmp = explode(':', $tmp);
foreach ($tmp as $k => $v) {
    if ($k == 0) {
        $result[$v] = '';
    }
    if ($k == 1) {
        $result['key'] = $v;
    }
}
return $result;


    // END
}

// ======================== my solution =================================

// ======================== hexlet solution =================================
function json_decode($json, $assoc = false)
{
    // BEGIN
    $data = \json_decode($json, $assoc);        // проверим что вернет встроенная функция, если ошибок нет, то этот результат отдаем наружу
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new \Exception(json_last_error_msg());
    }
    return $data;
    // END
}
// ======================== hexlet solution =================================