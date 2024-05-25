<?php

class Test
{
	private $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

}

var_dump(new Test('Max'));