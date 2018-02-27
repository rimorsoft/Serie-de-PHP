<?php

/**
* this class represents a author
*/
class Author
{
    
    protected $name;
    protected $lastname;

    public function __construct($name, $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }
    
    public function greet()
    {
        return "Hola, cómo estás? {$this->name}";
    }
}