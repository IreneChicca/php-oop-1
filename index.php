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


$movies = [$movie_1,$movie_2,$movie_3,$movie_4];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <header>

        <h1 class="text-center pt-4">~ My Movies ~</h1>
    </header>

    <main>
        <div class="container d-flex flex-wrap justify-content-center p-4">

            <?php foreach ($movies as $movie): ?>
            <div class="card col-3 m-3 p-3 text-center">
                <h4><?php echo $movie->title ?></h4>
                <p>Anno <?php echo $movie->year ?></p>
                <p>Voto <?php echo $movie->fixVote() ?></p>
                <h6>Genere</h6>
                <ul>
                    <?php  foreach($movie->genre->genre as $gen): ?>
                    <li><?php echo $gen  ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <?php endforeach; ?>

        </div>
    </main>

</body>

</html>