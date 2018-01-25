<?php

require 'Person.php';
require 'Student.php';
require 'Professor.php';

$student = new Student('Luisa', 'Fantone');
echo $student->greet();

echo '<br>';

$professor = new Professor('Italo', 'Morales');
echo $professor->greet();