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


    public function fixVote($vote){

        if($vote > 5){
            
           $fixedVote = floor($vote);
           return $fixedVote;

        }
        else {

            $fixedVote = ceil($vote);
            return $fixedVote;
        }

    }



}













?>