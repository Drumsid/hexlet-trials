<?php

//Реализуйте функцию stringify($tag), которая принимает на вход тег и возвращает его текстовое представление. Например:
    
    // $tag = ['name' => 'hr', 'class' => 'px-3', 'id' => 'myid', 'tagType' => 'single'];
    // $html = stringify($tag);
    // <hr class="px-3" id="myid">
    
    
    // $tag = ['name' => 'div', 'tagType' => 'pair', 'body' => 'text2', 'id' => 'wow'];
    // $html = stringify($tag);
    // <div id="wow">text2</div>

    // Внутри структуры тега есть три специальных ключа:
    
    // name - имя тега
    // tagType - тип тега, определяет его парность (pair) или одиночность (single)
    // body - тело тега, используется для парных тегов
    // Все остальное становится атрибутами тега и не зависит от того парный он или нет.
    
    // Подсказки
    // В этой задаче хорошо работает Collect


// my solution

function stringify($tag)
{
    if ($tag['tagType'] == 'single') {
        return '<' . $tag['name'] . ' class="' . $tag['class'] . '"' . ' id="' . $tag['id'] . '"' . '>';
    }
    if ($tag['tagType'] == 'pair' && isset($tag['id'])) {
        return '<' . $tag['name'] . ' id="' . $tag['id'] . '"' . '>' . $tag['body'] . '</' . $tag['name'] . '>';
    }
    if ($tag['tagType'] == 'pair' && ! isset($tag['id'])) {
        return '<' . $tag['name'] . '>' . $tag['body'] . '</' . $tag['name'] . '>';
    }
}
// my solution


// BEGIN
function buildAttrs(array $tag)
{
    return collect($tag)
        ->except(['name', 'tagType', 'body'])
        ->map(function ($value, $key) {
            return " {$key}=\"{$value}\"";
        })->join('');
}

function stringify($tag)
{
    $mapping = [
        'single' => function ($tag) {
            $attrs = buildAttrs($tag);
            return "<{$tag['name']}{$attrs}>";
        },
        'pair' => function ($tag) {
            $attrs = buildAttrs($tag);
            return "<{$tag['name']}{$attrs}>{$tag['body']}</{$tag['name']}>";
        }
    ];

    $build = $mapping[$tag['tagType']];
    return $build($tag);
}
// END
