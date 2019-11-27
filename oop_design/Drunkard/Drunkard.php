<?php

require_once '../../vendor/autoload.php';

use Ds\Deque;

class Drunkard
{

    public function __construct()
    {
       
    }

    public function run($firstPlayer, $secondPlayer)
    {
        $firstPlayer = new Deque($firstPlayer);
        $secondPlayer = new Deque($secondPlayer);
        return $firstPlayer->merge($secondPlayer);
    }

    
}