<?php 

class Timer
{
    const SEC_PER_MIN = 60;

    // BEGIN (write your solution here)
    const SEC_PER_HOUR = 3600;

    public $secondsCount;

    public function __construct($second, $minuts = 0, $hours = 0 )
    {
        $this->secondsCount = $second + ($minuts * self::SEC_PER_MIN) + ($hours * self::SEC_PER_HOUR);
    }
    // END

    public function getLeftSeconds()
    {
        return $this->secondsCount;
    }

    public function tick()
    {
        $this->secondsCount--;
    }
}