<?php

class Test
{
	private $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function bar() 
	{

	}
}

var_dump(new Test('Max'));
