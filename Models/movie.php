<?php


class movie {

    public $title;

    public $year;

    public $vote;

    public $genre;

   
    public function __construct(

        string $title,
        int $year,
        float $vote,
        genre $genre
    ){
        $this->title = $title;
        $this->year = $year;
        $this->vote = $vote;
        $this->genre = $genre;
    }


    public function fixVote(){

        if($this->vote > 5){
            
           $fixedVote = floor($this->vote);
           return $fixedVote;

        }
        else {

            $fixedVote = ceil($this->vote);
            return $fixedVote;
        }

    }



}













?>