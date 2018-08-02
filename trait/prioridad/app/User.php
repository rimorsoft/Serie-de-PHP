<?php

namespace App;

use App\Traits\Test;

/**
* this class represents a user
*/
class User extends Person
{
	
	use Test;

	function greet()
	{
		return "Hola, soy la clase User";
	}
	
}