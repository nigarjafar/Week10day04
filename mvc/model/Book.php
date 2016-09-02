<?php

class Book {
	public $title;
	public $author;
	public $description;
	public $year;
	
	public function __construct($title, $author, $description,$year)  
    {  
        $this->title = $title;
	    $this->author = $author;
	    $this->description = $description;
	    $this->year = $year;
    } 
}

?>