<?php

class Movie{

    public $nome;
    public $genere;
    public $voto;

    public function __construct($nome, $genere, $voto) {

        $this->nome = $nome;
        $this->genere = $genere;
        $this->voto = $voto;

    }

    function setVoto($voto) {
        $this->voto = $voto;
      }
      function getVoto() {
        return $this->voto;
      }
}


$movie1 = new Movie("Harry Potter", "Fanstasy", 4);
$movie2 = new Movie("Il gladiatore", "Drammatico", 5);


var_dump($movie1);

echo "<br>";

var_dump($movie2);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$movie1->setVoto(2);
$movie2->setVoto(3);

echo $movie1->getVoto();
echo "<br>";
echo $movie2->getVoto();