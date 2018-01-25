<?php

/**
* this class represents a person (Professor)
*/
class Professor extends Person
{
	
	function greet()
	{
		return "Hola profesor {$this->name}, cómo está usted?";
	}
}