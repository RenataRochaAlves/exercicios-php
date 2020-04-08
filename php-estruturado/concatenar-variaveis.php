<?php

/* 7. Declarar uma variável com a string ‘Olá’ e outra com a string ‘mundo!’.
a. Em uma nova variável, concatenar as variáveis criadas recentemente para
formar “Olá mundo!”.
b. Criar uma nova variável que concatene a variável criada no ponto a, e
concatenar à ela a string ‘PHP é o máximo’. */

$variavel1 = "Olá";
$variavel2 = "mundo!";

$concatenar1 = $variavel1 . " " . $variavel2;

//echo $concatenar1;

$concatenar2 = $concatenar1 . " PHP é o máximo";

echo $concatenar2;

?>