<?php

require_once __DIR__ . '/Models/movie.php';
require_once __DIR__ . '/Models/genre.php';


$movie_1_genre = new genre(["fantasy","action"]);
$movie_2_genre = new genre(["fantasy","action","magic"]);
$movie_3_genre = new genre(["action","thriller","drama"]);
$movie_4_genre = new genre(["horror","thriller","mistery"]);

$movie_1 = new movie("Il signore degli anelli", 2001 , 9.4, $movie_1_genre);

$movie_2 = new movie("Harry Potter", 2001 , 9.2, $movie_2_genre);

$movie_3 = new movie("Scarface", 1983 , 8.9, $movie_3_genre);

$movie_4 = new movie("Scream", 2001 , 8.5, $movie_4_genre);

$genre_test = new genre(["horror","thriller","mistery"]);


var_dump($movie_2);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
</head>

<body>

    <header></header>

    <main></main>

</body>

</html>