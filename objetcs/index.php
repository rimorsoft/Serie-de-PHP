<?php

require 'Post.php';
require 'Author.php';

$author = new Author('Italo', 'Morales');
$post   = new Post($author, 'Clases en PHP', 'Las clases nos ayudan...');

echo "Título: {$post->title} <br>";
echo "Contenido: {$post->body} <br>";
echo "Autor: {$post->author->name} <br>";

echo '<pre>'; // structure the output
var_dump($post); // detail of the post object