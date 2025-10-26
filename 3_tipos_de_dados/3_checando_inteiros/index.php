<?php

is_int(5);

if (is_int(5)) { //true
    echo "É um inteiro <br>";
} else {
    echo "Não é um inteiro <br>";
}

if (is_int("texto")) { //false
    echo "É um inteiro <br>";
} else {
    echo "Não é um inteiro <br>";
}

$a = 10;

if (is_int($a)) { //true
    echo "É um inteiro <br>";
} else {
    echo "Não é um inteiro <br>";
}


?>