<?php
class Movie
{
    // public $titolo;
    // public $genere;
    // public $anno;
    // public $lingua;

    private string $titolo;
    private string $genere;
    private int $anno;
    private string $lingua;

    //FUNZIONE COSTRUCT
    public function __construct(string $titolo, string $genere, int $anno, string $lingua)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->anno = $anno;
        $this->lingua = $lingua;
    }

    //METODO GET
    public function getFilm()
    {
        return "Titolo: {$this->titolo}, Genere: {$this->genere}, Anno di uscita: {$this->anno}, Lingua originale: {$this->lingua}";
    }
}

try {
    $movies = [
        new Movie("Avengers", "azione", 2012, "inglese"),
        new Movie("Avengers Age of Ultron", "azione", 2015, "inglese"),
        new Movie("Avengers Infinity War", "azione", 2018, "inglese"),
        new Movie("Avengers End Game", "azione", 2019, "inglese"),

    ];
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
                        <?php echo $movie->getFilm() ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
    <!-- MAIN -->






</body>

</html>