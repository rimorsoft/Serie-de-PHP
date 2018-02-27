<?php

    require 'Author.php';

    $author = new Author('Italo', 'Morales');
    echo "Nombre: {$author->name} <br>";
    echo $author->greet();