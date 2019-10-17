<?php

class Circle
{
	private $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function getRadius()
	{
		return $this->radius;
	}

	public function getArea()
	{	
		$area = (pi() * pow($this->getRadius(), 2));
		return round($area, 2);
	}

	public function getCircumference()
	{
		return round((2 * pi() * $this->getRadius()), 2);
	}
}