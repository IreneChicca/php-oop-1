<?php

class genre {

    public $main_genre; 

    public $second_genre;

    public $third_genre;

    public function __construct(

        string $main_genre,
        string $second_genre,
        string $third_genre,   

    ){

        $this->main_genre = $main_genre;
        $this->second_genre = $second_genre;
        $this->third_genre = $third_genre;

    }

}
















?>