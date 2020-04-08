<?php

/* Usando a função mt_rand(x,y) -onde x é o número mínimo e y é o número
máximo- você irá gerar um número aleatório entre 1 e 5 (isso é o que a função
faz).
Atribua esse número (resultado da função) à uma variável e imprima essa
variável apenas se o número gerado for 3 ou 5. */

$var1 = mt_rand(1,5);

if ($var1 == 3 || $var1 == 5) {
    echo $var1;
} 

?>