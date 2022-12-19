<?php

include_once __DIR__ . '/prodotto.php';

class cibo extends Prodotto {
  public $peso;
  public $ingredienti;

  public function __construct(
    String $immagine,
    String $nome,
    Float $prezzo,
    Category $category,

    Float $peso,
    String $ingredienti
    ) {
    $this->peso = $peso;
    $this->ingredienti = $ingredienti;
    parent::__construct($nome, $immagine, $prezzo, $category );
  }
}

?>