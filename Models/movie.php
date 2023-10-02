<?php

include __DIR__ . './Production.php';


class movie extends Production {

    

    public $publish_year;

    public $duration;

   
    public function __construct(

        string $title,
        float $vote,
        genre $genre,
        int $publish_year,
        int $duration

    ){
        parent::__construct($title,$vote,$genre);
        $this->publish_year = $publish_year;
        $this->duration = $duration;
        
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