<?php
//classi attori
class Attori
{

    private string $name;
    private string $lastname;

    //FUNZIONE COSTRUCT ATTORI
    public function __construct(string $name, string $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    // METODO GET
    public function getFullName(): string
    {
        return "{$this->name} {$this->lastname}";
    }
}

//Classi Movie
class Movie
{
    // public $titolo;
    // public $genere;
    // public $anno;
    // public $lingua;

    private string $titolo;
    private array $generes;
    private int $anno;
    private string $lingua;
    private array $attoris;

    //variabile statica
    public static int $movieCount = 0;

    //FUNZIONE COSTRUCT MOVIE
    public function __construct(string $titolo, array $generes, int $anno, string $lingua, array $attoris = [])
    {
        $this->titolo = $titolo;
        $this->setGeneres($generes);
        $this->anno = $anno;
        $this->lingua = $lingua;
        $this->attoris = $attoris;
        self::$movieCount++;
    }

    public static function getMovieCount(): int
    {
        return self::$movieCount;
    }


    // GENERI CON ECCEZIONI
    public function setGeneres(array $generes)
    {
        if (empty($generes)) {
            throw new InvalidArgumentException("Il genere deve essere una lista non vuota.");
        }
        foreach ($generes as $genere) {
            if (!is_string($genere) || empty($genere)) {
                throw new InvalidArgumentException("Ogni genere deve essere una stringa non vuota.");
            }
        }
        $this->generes = $generes;
    }

    //function Aggiungi genere (ADD)

    public function addGenere(string $genere)
    {
        if (!is_string($genere) || empty($genere)) {
            throw new InvalidArgumentException("Il genere deve essere una stringa non vuota.");
        }
        $this->generes[] = $genere;
    }


    //function attori
    public function setAttoris(array $attoris)
    {
        $this->attoris = $attoris;
    }


    //function Aggiungi attori (ADD)
    public function addAttori(Attori $attori): void
    {
        $this->attoris[] = $attori;
    }



    //METODO GET
    public function getFilm()
    {
        // $generes = implode(", ", $this->generes);
        // return "Titolo: {$this->titolo}, Genere: {$generes}, Anno di uscita: {$this->anno}, Lingua originale: {$this->lingua}";
        $generesString = '';
        foreach ($this->generes as $genere) {
            $generesString .= $genere . ', ';
        }

        $attorisString = '';
        foreach ($this->attoris as $attori) {
            $attorisString .= $attori->getFullName() . ', ';
        }
        return "Titolo: {$this->title}, Generi: {$generesString}, Anno: {$this->anno}, Attori: {$attorisString}";
    }
}

$attori1 = new Attori("Robert", "Downey");
$attori2 = new Attori("Chris", "Evans");
$attori3 = new Attori("Chris ", "Hemsworth");
$attori4 = new Attori("Scarlett", "Johansson");

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