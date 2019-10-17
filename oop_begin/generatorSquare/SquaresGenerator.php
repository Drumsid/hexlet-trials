<?php

class SquaresGenerator
{
	public static function generate($side, $count = 5)
	{
		$result = [];
		for ($i = 1; $i <= $count; $i++) {
			$result[] = new Square($side);
		}
		return $result;
	}
}