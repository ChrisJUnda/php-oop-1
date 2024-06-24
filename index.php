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
}

$film1 = new Movie("Avengers", "azione", 2012, "inglese");
$film2 = new Movie("Avengers Age of Ultron", "azione", 2015, "inglese");
$film3 = new Movie("Avengers Infinity War", "azione", 2018, "inglese");
$film4 = new Movie("Avengers End Game", "azione", 2019, "inglese");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
</head>

<body>

</body>

</html>