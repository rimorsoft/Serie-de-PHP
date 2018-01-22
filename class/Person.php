<?php

/**
* this class represents a person
*/
class Person 
{
	
	var $name;
	var $lastname;

	function __construct($name, $lastname)
	{
		$this->name = $name;
		$this->lastname = $lastname;
	}

	function greet()
	{
		return 'Hola, cómo estas?';
	}
}