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



    public function getDetails(){

            return "
            <h4>Titolo:  $this->title </h4>             
            <p>Anno:  $this->publish_year </p>
            <p>Voto:  $this->vote </p>
            <p>Durata:  $this->duration min </p>
            ";




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