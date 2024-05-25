<?php

class Test 
{
	private $id;
	
	public function __construct($id)
	{
		$this->id = $id;		
	}
}

var_dump(new Test('Jon'));
