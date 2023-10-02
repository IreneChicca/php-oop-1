<?php

class Production {

    public $title;

    public $vote;

    public $genre;


    public function __construct(
        string $title,
        float $vote,
        genre $genre
        
    ){

        $this->title = $title;
        $this->vote = $vote;
        $this->genre = $genre;

        
    }
}







?>