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
	public function foo()
	{
		// еще код
	}
}

var_dump(new Test('Max'));
