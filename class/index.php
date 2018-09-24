<?php

require 'Person.php';

$person = new Person('Italo', 'Morales');
echo $person->greet();

$person2 = new Person('Andres', 'Ayala');
echo $person2->greet();