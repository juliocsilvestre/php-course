<?php

  class Pessoa {

    function falar() {
      echo "Olá pessoal!";
    }

  }

  $Julio = new Pessoa();

  $Julio->nome = "Julio";

  echo $Julio->nome;

  echo "<br>";

  $Julio->falar();
