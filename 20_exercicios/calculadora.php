<?php

class Calculadora
{
    public function somar($a, $b)
    {
        return $a + $b;
    }

    public function subtrair($a, $b)
    {
        return $a - $b;
    }

    public function multiplicar($a, $b)
    {
        return $a * $b;
    }

    public function dividir($a, $b)
    {
        if ($b == 0) {
            throw new Exception("Divisão por zero não é permitida.");
        }

        return $a / $b;
    }
}

$calc = new Calculadora();

echo $calc->somar(10, 5);
echo $calc->subtrair(10, 5);
echo $calc->multiplicar(10, 5);
echo $calc->dividir(10, 5);
