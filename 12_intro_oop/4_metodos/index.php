<?php

  class Pessoa {

    function falar() {
      echo "Olá, eu sou um objeto! <br>";
    }

    function somar($x, $y) {
      echo $x + $y . "<br>";
    }

  }

  $Julio = new Pessoa;

  $Julio->falar();
  $Julio->falar();

  $joao = new Pessoa;

  $joao->falar();

  $Julio->somar(2, 2);

  $joao->somar(10, 12);