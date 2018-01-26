<?php

/**
* this class represents a author
*/
class Author 
{
	
	var $name;
	var $lastname;

	function __construct($name, $lastname)
	{
		$this->name = $name;
		$this->lastname = $lastname;
	}

}