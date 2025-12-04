<?php

  interface Caracteristicas {

    const nome = "Julio";

    public function falar();

  }

  class Humano implements Caracteristicas {

    public $idade = 29;

    public function falar() {
      echo "Olá mundo! <br>";
    }

    public function dizerNome() {

      echo "Meu nome é " . self::nome . "<br>";

    }

  }

  $Julio = new Humano;

  $Julio->falar();

  $Julio->dizerNome();