<?php

/**
* this class represents a post
*/
class Post 
{
	
	var $author;
	var $title;
	var $body;

	function __construct(Author $author, $title, $body)
	{
		$this->author = $author;
		$this->title  = $title;
		$this->body   = $body;
	}

}