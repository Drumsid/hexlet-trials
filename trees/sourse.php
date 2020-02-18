<?php

/**
 * Make directory node
 */
function mkdir2(string $name, array $children = [], array $meta = [])
{
    return [
        "name" => $name,
        "children" => $children,
        "meta" => $meta,
        "type" => "directory",
    ];
}

/**
 * Make file node
 */
function mkfile(string $name, array $meta = [])
{
    return [
        "name" => $name,
        "meta" => $meta,
        "type" => "file",
    ];
}

/**
 * Test directory
 */
function isFile($node)
{
    return $node['type'] == 'file';
}

/**
 * Test file
 */
function isDirectory($node)
{
    return $node['type'] == 'directory';
}

/**
 * Map tree
 */
function map($func, $tree)
{
    $map = function ($f, $node) use (&$map) {
        $updatedNode = $f($node);

        $children = $node['children'] ?? [];

        if (isDirectory($node)) {
            $updatedChildren = array_map(function ($n) use (&$f, &$map) {
                return $map($f, $n);
            }, $children);
            return array_merge($updatedNode, ['children' => $updatedChildren]);
        }

        return $updatedNode;
    };

    return $map($func, $tree);
}

/**
 * Reduce tree
 */
function reduce($func, $tree, $accumulator)
{
    $reduce = function ($f, $node, $acc) use (&$reduce) {
        $children = $node['children'] ?? [];
        $newAcc = $f($acc, $node);

        if (isFile($node)) {
            return $newAcc;
        }

        return array_reduce(
            $children,
            function ($iAcc, $n) use (&$reduce, &$f) {
                return $reduce($f, $n, $iAcc);
            },
            $newAcc
        );
    };

    return $reduce($func, $tree, $accumulator);
}

/**
 * Filter tree
 */
function filter($func, $tree)
{
    $filter = function ($f, $node) use (&$filter) {
        if (!$f($node)) {
            return null;
        }

        $children = $node['children'] ?? null;

        if (isDirectory($node)) {
            $updatedChildren = array_map(function ($n) use (&$f, &$filter) {
                return $filter($f, $n);
            }, $children);

            $filteredChildren = array_filter($updatedChildren, function ($n) {
                if ($n != null) {
                    return $n;
                }
            });
            return array_merge($node, ['children' => array_values($filteredChildren)]);
        }

        return $node;
    };

    return $filter($func, $tree);
}
