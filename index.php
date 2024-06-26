<?php
require_once __DIR__ . '/Models/Movie.php';

try {
    $movies = [
        new Movie("Avengers", ["Azione", "Fanstascienza"], 2012, "inglese", [$attori1, $attori2, $attori3, $attori4]),
        new Movie("Avengers Age of Ultron", ["Azione", "Fanstascienza"], 2015, "inglese", [$attori1, $attori2, $attori3, $attori4]),
        new Movie("Avengers Infinity War", ["Azione", "Fanstascienza"], 2018, "inglese", [$attori1, $attori2, $attori3, $attori4]),
        new Movie("Avengers End Game", ["Azione", "Fanstascienza"], 2019, "inglese", [$attori1, $attori2, $attori3]),

    ];

    $movies[0]->addGenere("avventura");
    $movies[0]->addAttori(new Attori("Mark", "Bufalo"));
} catch (Exception $e) {
    echo "Eccezione: " . $e->getMessage();
}

// $film1 = new Movie("Avengers", "azione", 2012, "inglese");
// $film2 = new Movie("Avengers Age of Ultron", "azione", 2015, "inglese");
// $film3 = new Movie("Avengers Infinity War", "azione", 2018, "inglese");
// $film4 = new Movie("Avengers End Game", "azione", 2019, "inglese");

// $films = [$film1, $film2, $film3, $film4];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Link Bootstrap -->
</head>

<body>
    <!-- HEADER -->
    <header>
        <h1>
            Avengers FILM MCU
        </h1>
    </header>
    <!-- /HEADER -->

    <!-- MAIN -->
    <main>
        <div class="container-fluid">
            <ul>
                <?php foreach ($movies as $movie) : ?>
                    <li>
                        <?php echo $movie?->getFilm() ?? 'Informazione dei film non disponibili'; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
    <footer>
        <p>
            Totali film usciti (per ora) : <?= Movie::getMovieCount(); ?>
        </p>
    </footer>
    <!-- MAIN -->






</body>

</html>