<?php
class Movie
{
    public $titolo;
    public $genere;
    public $anno;
    public $lingua;

    public function __construct($dato1, $dato2, $dato3, $dato4)
    {
        $this->titolo = $dato1;
        $this->genere = $dato2;
        $this->anno = $dato3;
        $this->lingua = $dato4;
    }
    public function getFilm()
    {
        return "<p>" . "$this->titolo" . "</p>" . "<p>" . "$this->genere" . "</p>" . "<p>" . "$this->anno" . "</p>" . "<p>" . "$this->lingua" . "</p>";
    }
}

$film1 = new Movie("Avengers", "azione", 2012, "inglese");
$film2 = new Movie("Avengers Age of Ultron", "azione", 2015, "inglese");
$film3 = new Movie("Avengers Infinity War", "azione", 2018, "inglese");
$film4 = new Movie("Avengers End Game", "azione", 2019, "inglese");

$films = [$film1, $film2, $film3, $film4];


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
    <div class="container ">
        <div class="row">
            <div class="col-12 border">
                <?php foreach ($films as $film) { ?>
                    <?php echo $film->getFilm() ?>
                <?php } ?>
            </div>
        </div>
    </div>



</body>

</html>