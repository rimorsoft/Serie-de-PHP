<?php

/**
* this class represents a person
*/
class Professor extends Person
{
	
	function greet()
	{
		return "Hola profesor {$this->name}, cómo está usted?";
	}
}