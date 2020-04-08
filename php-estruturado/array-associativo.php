<?php

/* Criar um array associativo que contenha as seguintes propriedades de um carro:
Marca, Modelo, Cor, Ano e Placa.
Em seguida, executar um var_dump para ver os resultados.
a. Adicionar o nome do dono na posição 0 (zero) do array e imprimir o
resultado.
b. Adicionar nome da empresa seguradora na posição 14 e imprimir o
resultado. */

$carro = [
    "marca" => "Peugeot",
    "modelo" => "Peugeot 208",
    "cor" => "vermelho",
    "ano" => 2020,
    "placa" => "AAA3456"
];

//var_dump($carro);

$carro[0] = "Gabriel Luiz";

//var_dump($carro);

$carro[14] = "Porto Seguro";

var_dump($carro);

?>