<?php

class Movie {
    private $title =null;
    private $description = "une description";
    
    
    public function __construct($title = ""){
        $this->title = $title;
    }
    
    public function getTitle()
    {
        return $this->title;       
    }
    
    public function setTitle(String $title= "")
    {
        return $this->title =$title;       
    }   
   
   public function getDescription()
    {
        return $this->description;       
    }
        
    public function setDescription(String $description= "")
    {
        return $this->description =$description;       
    }  
    
    public function DisplayMovie(){
        print "Title : ".$this->title;
    }
}

$movie = new Movie;
$movie->__construct("bonjour");
$movie->DisplayMovie();




