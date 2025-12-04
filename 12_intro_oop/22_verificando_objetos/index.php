<?php

  class Humano {

    public function falar() {
      echo "Olá";
    }

  }

  $Julio = new Humano;

  $teste = 10;

  if(is_object($Julio)) {
    echo "É um objeto <br>";
  } else {
    echo "Não é um objeto <br>";
  }

  if(is_object($teste)) {
    echo "É um objeto <br>";
  } else {
    echo "Não é um objeto <br>";
  }

  echo get_class($Julio) . "<br>";

  if(method_exists($Julio, "falar")) {
    echo "Método existe <br>";
  } else {
    echo "Método não existe <br>";
  }

  if(method_exists($Julio, "asd")) {
    echo "Método existe <br>";
  } else {
    echo "Método não existe <br>";
  }