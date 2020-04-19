<?php

// Utilizando um do/while, realizar um programa que lance a moeda até tirar
// cara (o número 1). No final do programa, imprimir quantos lançamentos da
// moeda forem necessários.

$moeda = 0;
$lancamentos = 0;

do {
    $moeda = mt_rand(0,1);
    $lancamentos++;
} while($moeda != 1);

echo "número de lançamentos: $lancamentos";

?>

