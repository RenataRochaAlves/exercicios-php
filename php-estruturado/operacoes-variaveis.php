<?php

/* Declarar a variável $inteiro e $decimal, dê valores à elas. Com base nisso:
a. Executar um echo com a soma dos dois valores.
b. Executar um echo com a subtração dos dois valores.
c. Executar um echo com a divisão dos dois valores.
d. Executar um echo com a multiplicação dos dois valores.
e. Atribuir a uma nova variável o resto da divisão dos valores e mostrar a nova
variável.
f. Adicionar 1 a $inteiro e $decimal.
g. Adicionar 5 a $inteiro e subtrair 0,6 de $decimal.
h. Na mesma linha, criar a variável $resultado, cujo valor seja o resultado da
multiplicação $inteiro * 2, adicionar $decimal e dividir tudo pela metade de
$inteiro. */

$inteiro = 10;
$decimal = 4.5;

echo $inteiro + $decimal . "<br>";

echo $inteiro - $decimal . "<br>";

echo $inteiro / $decimal . "<br>";

echo $inteiro * $decimal . "<br>";

$restoDivisao = $inteiro % $decimal;

echo $restoDivisao . "<br>";

$inteiro++;
$decimal++;

$inteiro = $inteiro + 5;
$decimal = $decimal - 0.6;

$resultado = (($inteiro * 2) + $decimal) / ($inteiro / 2);

echo $resultado;



?>