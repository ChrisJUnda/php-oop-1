<?php
class Movie
{
    public $titolo;
    public $genere;
    public $anno;
    public $lingua;
    public $valutazione;

    public function __construct($dato1, $dato2, $dato3, $dato4, $dato5)
    {
        $this->titolo = $dato1;
        $this->genere = $dato2;
        $this->anno = $dato3;
        $this->lingua = $dato4;
        $this->valutazione = $dato5;
    }
}
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