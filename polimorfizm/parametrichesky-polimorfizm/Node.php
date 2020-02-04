<?php

// namespace App; если оставлять namespace то через require_once будет ошибка

class Node
{
    public function __construct($value, Node $node = null)
    {
        $this->next = $node;
        $this->value = $value;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function getValue()
    {
        return $this->value;
    }
}
