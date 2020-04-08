<?php

/* Gerar um número entre 1 e 100 (usar a função math_rand() ), verificar se é
maior que 50.
Caso seja verdadeiro, retornar “O número é maior que 50” e, caso seja falso: “O
número é menor que 50”. */

$var1 = mt_rand(1,100);

if($var1 > 50) {
    echo "O número é maior que 50";
} else {
    echo "O número é menor que 50";
}

?>