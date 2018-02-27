<?php

    require 'Author.php';

    $author = new Author('Italo', 'Morales');
    echo $author->greet();