<?php


class Movie {

    public $title;

    public $year;

    public $vote;

    public $genre;

    public function __construct(

        string $title,
        integer $year,
        integer $vote,
        array $genre
    ){
        $this->title = $title;
        $this->year = $year;
        $this->vote = $vote;
        $this->genre = $genre;
    }


}













?>