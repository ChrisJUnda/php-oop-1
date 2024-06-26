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
        return "Titolo: {$this->titolo}, Generi: {$generesString}, Anno: {$this->anno}, Attori: {$attorisString}";
    }
}

$attori1 = new Attori("Robert", "Downey");
$attori2 = new Attori("Chris", "Evans");
$attori3 = new Attori("Chris ", "Hemsworth");
$attori4 = new Attori("Scarlett", "Johansson");
