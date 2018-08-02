<?php

require '../vendor/autoload.php';


use App\User;

$user = new User;

echo $user->greetOne(); 
echo '<br>';
echo $user->greetTwo(); 