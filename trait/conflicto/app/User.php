<?php

namespace App;

use App\Traits\TestOne;
use App\Traits\TestTwo;

/**
* this class represents a user
*/
class User
{
	
	use TestOne, TestTwo {
		TestOne::greet insteadof TestTwo; // Usa el TestOne en lugar de TestTwo (esto resuelve el conflicto)
		TestOne::greet as greetOne; // Usando alias
		TestTwo::greet as greetTwo; // Usando alias
	}
	
}