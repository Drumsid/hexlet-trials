<?php 

class Time
{
    private $h;
    private $m;
//==== my solution ============================
    // BEGIN (write your solution here)
    public static function fromString($str)
    {
    	$tmp = explode(':', $str);
    	return new self($tmp[0], $tmp[1]);
    }
    // END

    public function __construct($h, $m)
    {
        $this->h = $h;
        $this->m = $m;
    }

    public function __toString()
    {
        return "{$this->h}:{$this->m}";
    }
}

//========hexlet solution =====================

    // BEGIN
    public static function fromString($time)
    {
        [$h, $m] = explode(':', $time);
        return new self($h, $m);
    }
    // END
