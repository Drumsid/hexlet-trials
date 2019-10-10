<?php 
require_once 'Comparable.php';

class User implements Comparable
{
	private $id;
	private $name;

	public function __construct($id, $name)
	{
		$this->id = $id;
		$this->name = $name;
	}

	public function getId()
	{
		return $this->id;
	}

	public function compareTo($user)
	{
		if ($this->getId() !== $user->getId()) {
			return false;
		}
		return true;
	}
}