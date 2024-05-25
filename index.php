<?php

class Test
{
	private $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function foo()
	{

	}
}

var_dump(new Test('Max'));