<?php

include_once __DIR__ . '/prodotto.php';

class accessori extends Prodotto {
  public $materiale;
  public $dimensioni;

  public function __construct(
    String $immagine,
    String $nome,
    Float $prezzo,
    Category $category,

    String $materiale,
    Float $dimensioni
    ) {
    $this->materiale = $materiale;
    $this->dimensioni = $dimensioni;
    parent::__construct($nome, $immagine, $prezzo, $category );
  }
}

?>