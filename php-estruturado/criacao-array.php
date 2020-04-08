<?php

/* Criar um array numérico com 5 strings de animais diferentes. Em seguida, executar
um var_dump para ver os resultados.
a. Adicionar mais 2 animais ao final do array e executar outro var_dump para
ver os resultados.
b. Imprimir a seguinte oração “Eu gosto de animais: animal1, animal2, ...” com
os 7 animais que declaramos.
c. Substituir o primeiro animal por outro novo e imprimir o resultado (desafio).
d. Adicionar um animal novo na posição 100 e imprimir o resultado (desafio).
e. Adicionar um animal novo na posição 16 e imprimir o resultado (desafio). */

$animais = ["cachorro", "gato", "papagaio", "pantera", "macaco"];

//var_dump($animais);

$animais[] = "tartaruga";
$animais[] = "morcego";

//var_dump($animais);

echo "Eu gosto de animais: <br>";

foreach($animais as $animal) { 
    echo $animal . "<br>";
} 

$animais[0] = "leão";

//var_dump($animais);

$animais[100] = "lagarto";

//var_dump($animais);

$animais[16] = "borboleta";

var_dump($animais);

?>