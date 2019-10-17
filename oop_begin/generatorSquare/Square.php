<?php

class Square
{
	private $sideSquare;

	public function __construct($sideSquare)
	{
		$this->sideSquare = $sideSquare;
	}

	public function getSide()
	{
		return $this->sideSquare;
	}
}