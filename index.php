<?php

require_once __DIR__ . '/Models/movie.php';
require_once __DIR__ . '/Models/genre.php';

$movie_1 = new movie("Il signore degli anelli", 2001 , 9.4, ["fantasy","action"]);

$movie_2 = new movie("Harry Potter", 2001 , 9.2, ["fantasy","action","magic"]);

$movie_3 = new movie("Scarface", 1983 , 8.9, ["action","thriller","drama"]);

$movie_4 = new movie("Scream", 2001 , 8.5, ["horror","thriller","mistery"]);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>