<?php

  Class Car {

    public $rodas = 4;
    private $vidro = "Sem película";
    protected $portas = 4;

    public function getVidro() {
      return $this->vidro;
    }

    public function getPortas() {
      return $this->portas;
    }

  }

  class Mecanico {

    public function alterarRodas($carro) {
      $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula) {
      $carro->vidro = $pelicula;
    }

  }

  $carro = new Car;

  echo $carro->rodas . "<br>";

  $Julio = new Mecanico;

  $Julio->alterarRodas($carro);

  echo $carro->rodas . "<br>";

  // $Julio->colocarPelicula($carro, "G20");

  echo $carro->getVidro() . "<br>";

  // $carro->vidro = "teste";

  echo $carro->getPortas() . "<br>";