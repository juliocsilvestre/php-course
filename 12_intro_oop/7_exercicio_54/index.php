<?php

  class Pessoa {

    public $nome;
    public $idade;

    function andar($m) {
      echo "A pessoa andou $m metros <br>";
    }

  }

  $Julio = new Pessoa;

  $Julio->nome = "Julio";
  $Julio->idade = 29;

  echo "O nome dele é $Julio->nome e tem $Julio->idade anos <br>";

  $Julio->andar(20);

  $joaquim = new Pessoa;

  $joaquim->nome = "Joaquim";
  $joaquim->idade = 32;

  echo "O nome dele é $joaquim->nome e tem $joaquim->idade anos <br>";

  $joaquim->andar(30);