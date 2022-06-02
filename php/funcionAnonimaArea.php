<?php

function CalcularArea(Closure $figura, $base, $altura)
{
    return $figura($base, $altura);
}

$triangulo = function ($base, $altura) {

    echo 'El area del triangulo es ' . ($base * $altura) / 2;
};

$cuadrado = function ($base, $altura) {
    echo 'El area del cuadrado es ' . $base * $altura;
};

CalcularArea($triangulo, 5, 6);
echo "<br>";
CalcularArea($cuadrado, 6, 8);
