<?php

// include __DIR__ . './Production.php';


class tvserie extends Production {


    public $n_episodes;

    public $n_series;

    public $release_year;


    public function __construct(

        string $title,
        float $vote,
        genre $genre,
        int $n_episodes,
        int $n_series,
        int $release_year,

    ){
        parent::__construct($title,$vote,$genre);
        $this->n_episodes = $n_episodes;
        $this->n_series = $n_series;
        $this->release_year = $release_year;

    }

    public function getDetails(){

        return "
        <h4>Titolo:  $this->title </h4>             
        <p>Anno di uscita:  $this->release_year </p>
        <p>Voto:  $this->vote </p>
        <p>N. stagioni:  $this->n_series min </p>
        <p>N. episodi:  $this->n_episodes min </p>
        ";

}


}






















?>