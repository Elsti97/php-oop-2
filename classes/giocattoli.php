<?php

include_once __DIR__ . '/prodotto.php';

class giocattoli extends Prodotto {
  public $caratteristiche;
  public $dimensioni;

  public function __construct(
    String $immagine,
    String $nome,
    Float $prezzo,
    Category $category,

    String $caratteristiche,
    Float $dimensioni
    ) {

    $this->caratteristiche = $caratteristiche;
    $this->dimensioni = $dimensioni;
    parent::__construct($nome, $immagine, $prezzo, $category );
  }
}

?>