<?php

  $nomes = ["Julio", "João", "Pedro", "Maria"];

  $a = 10;

  foreach($nomes as $nome) {
    echo "O nome do índice atual é $nome <br>";
    if($nome == "Julio") {
      echo "Opa $a <br>";
    }
  }